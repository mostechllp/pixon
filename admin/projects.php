<?php
session_start();
require_once 'config/database.php';

// Protect projects.php - check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}

$userEmail = $_SESSION['email'] ?? 'Admin';
$userRole = $_SESSION['role'] ?? 'Unknown';

// Pagination logic
$limit = 10;
$page = isset($_GET['page']) ? max(1, (int)$_GET['page']) : 1;
$offset = ($page - 1) * $limit;

$totalQuery = "SELECT COUNT(*) as total FROM projects";
$totalResult = $conn->query($totalQuery);
$totalRows = $totalResult->fetch_assoc()['total'];
$totalPages = ceil($totalRows / $limit);

// Fetch projects
$query = "SELECT * FROM projects ORDER BY created_at DESC LIMIT $limit OFFSET $offset";
$projectsResult = $conn->query($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects Management - PIXON TECHNOLOGIES</title>
    <link href="../assets/favicon.png" rel="icon" type="image/png" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-bg: #f8f9fa;
            --white: #ffffff;
            --text-main: #111827;
            --text-muted: #6b7280;
            --border-color: #e5e7eb;
            --brand-color: #18315B;
            --brand-hover: #1e3d73;
            --accent-red: #ef4444;
            --accent-green: #10b981;
        }
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Inter', sans-serif; }
        body { background-color: var(--primary-bg); color: var(--text-main); min-height: 100vh; }
        
        /* Navbar Styling */
        .navbar {
            background-color: #f8fafc; padding: 0 32px; height: 64px;
            display: flex; justify-content: space-between; align-items: center;
            border-bottom: 1px solid #e2e8f0; position: sticky; top: 0; z-index: 100;
        }
        .navbar-brand { font-size: 18px; font-weight: 700; color: #0f172a; display: flex; align-items: center; gap: 8px; z-index: 10; }
        .navbar-brand .brand-blue { color: #3b82f6; }
        .brand-icon { width: 24px; height: 24px; fill: #3b82f6; }
        .nav-links { position: absolute; left: 50%; transform: translateX(-50%); display: flex; gap: 28px; }
        .nav-links a { text-decoration: none; color: #64748b; font-size: 14px; font-weight: 500; transition: color 0.2s; }
        .nav-links a:hover, .nav-links a.active { color: #0f172a; font-weight: 600; }
        .navbar-right { display: flex; align-items: center; gap: 24px; }
        .user-profile { display: flex; align-items: center; gap: 12px; padding-left: 24px; border-left: 1px solid #e2e8f0; }
        .avatar { width: 32px; height: 32px; border-radius: 50%; background-color: #3b82f6; color: white; display: flex; align-items: center; justify-content: center; font-weight: 600; font-size: 13px; }
        .user-details { display: flex; flex-direction: column; text-align: right; }
        .user-name { font-weight: 600; font-size: 13px; color: #0f172a; }
        .user-role { font-size: 12px; color: #64748b; text-transform: capitalize; }
        
        /* Main Content */
        .container { max-width: 1200px; margin: 0 auto; padding: 40px 32px; }
        .page-header { display: flex; align-items: center; justify-content: space-between; margin-bottom: 32px; }
        .page-header h1 { font-size: 28px; font-weight: 600; }
        
        .btn { padding: 10px 16px; border-radius: 8px; font-size: 14px; font-weight: 500; cursor: pointer; display: inline-flex; align-items: center; gap: 8px; border: none; transition: all 0.2s; text-decoration: none; }
        .btn-primary { background-color: var(--brand-color); color: white; }
        .btn-primary:hover { background-color: var(--brand-hover); }
        .btn-secondary { background-color: white; border: 1px solid var(--border-color); color: var(--text-main); }
        .btn-secondary:hover { background-color: #f9fafb; }
        .btn-add { background-color: #3b82f6; color: white; }
        .btn-add:hover { background-color: #2563eb; }

        /* Table */
        .table-container { background: var(--white); border-radius: 12px; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05); border: 1px solid var(--border-color); overflow-x: auto; }
        .data-table { width: 100%; border-collapse: collapse; text-align: left; }
        .data-table th { background-color: #f9fafb; padding: 16px 24px; font-size: 13px; font-weight: 600; color: var(--text-muted); text-transform: uppercase; border-bottom: 1px solid var(--border-color); }
        .data-table td { padding: 16px 24px; font-size: 14px; color: var(--text-main); border-bottom: 1px solid var(--border-color); vertical-align: middle; }
        .data-table tbody tr:hover { background-color: #f3f4f6; }
        
        .action-btns { display: flex; gap: 8px; }
        .btn-icon { background: none; border: none; cursor: pointer; padding: 6px; border-radius: 6px; display: flex; align-items: center; transition: all 0.2s; color: var(--text-muted); text-decoration: none; }
        .btn-edit:hover { background: #dbeafe; color: #2563eb; }
        .btn-delete:hover { background: #fee2e2; color: #dc2626; }
        
        /* Modal styling */
        .modal-overlay { display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.5); z-index: 1000; align-items: center; justify-content: center; backdrop-filter: blur(4px); }
        .modal-content { background: white; padding: 32px; border-radius: 16px; width: 100%; max-width: 400px; box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1); text-align: center; }
        .modal-title { font-size: 20px; font-weight: 600; margin-bottom: 12px; }
        .modal-body { color: var(--text-muted); margin-bottom: 24px; font-size: 14px; }
        .modal-actions { display: flex; gap: 12px; justify-content: center; }
        
        /* Responsive Media Queries */
        @media (max-width: 768px) {
            .navbar {
                padding: 12px 16px;
                height: auto;
                flex-wrap: wrap;
            }
            .navbar-brand img {
                transform: scale(2.5) !important;
            }
            .nav-links {
                position: relative;
                left: auto;
                z-index: 20;
                transform: none;
                order: 3;
                width: 100%;
                margin-top: 16px;
                gap: 16px;
                justify-content: center;
            }
            .user-details {
                display: none;
            }
            .user-profile {
                padding-left: 12px;
            }
            .container {
                padding: 16px;
            }
            .page-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 12px;
                margin-bottom: 20px;
            }
            .page-header h1 {
                font-size: 22px;
            }
            .btn {
                width: 100%;
                justify-content: center;
                padding: 8px 12px;
                font-size: 13px;
            }
            .data-table th, .data-table td {
                padding: 12px 16px;
                font-size: 13px;
            }
            .modal-content {
                padding: 24px 20px;
            }
        }
    </style>
</head>
<body>

    <nav class="navbar">
        <div class="navbar-brand">
            <img src="../assets/pixon-bg.webp" alt="PIXON TECHNOLOGIES" style="height: 40px; width: auto; transform: scale(3.5); transform-origin: left center;">
        </div>
        
        <div class="nav-links">
            <a href="dashboard.php">Leads</a>
            <a href="projects.php" class="active">Projects</a>
        </div>
        
        <div class="navbar-right">
            <div class="user-profile">
                <div class="user-details">
                    <span class="user-name"><?php echo htmlspecialchars($userEmail); ?></span>
                    <span class="user-role"><?php echo htmlspecialchars($userRole); ?></span>
                </div>
                <div class="avatar">
                    <?php echo strtoupper(substr($userEmail, 0, 1)); ?>
                </div>
                <a href="logout.php" style="margin-left: 12px; color: #ef4444; text-decoration: none; font-size: 14px; font-weight: 500;" title="Logout">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                </a>
            </div>
        </div>
    </nav>

    <div class="container">
        <?php include 'toast.php'; ?>

        <div class="page-header">
            <h1>Projects Management</h1>
            <a href="add_project.php" class="btn btn-add">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                Add New Project
            </a>
        </div>

        <div class="table-container">
            <table class="data-table">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Project Date</th>
                        <th>Media</th>
                        <th>Created At</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if($projectsResult && $projectsResult->num_rows > 0): ?>
                        <?php while($row = $projectsResult->fetch_assoc()): ?>
                            <tr>
                                <td style="font-weight: 500; color: var(--brand-color);"><?php echo htmlspecialchars($row['title']); ?></td>
                                <td><span style="background: #e0e7ff; color: #4338ca; padding: 4px 8px; border-radius: 4px; font-size: 12px; font-weight: 500; text-transform: capitalize;"><?php echo htmlspecialchars($row['category'] ?? 'Indoor'); ?></span></td>
                                <td><?php echo date('M d, Y', strtotime($row['project_date'])); ?></td>
                                <td>
                                    <?php if($row['video_path']): ?>
                                        <a href="../<?php echo htmlspecialchars($row['video_path']); ?>" target="_blank" style="color: #3b82f6; text-decoration: none; display: flex; align-items: center; gap: 4px;">
                                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="23 7 16 12 23 17 23 7"></polygon><rect x="1" y="5" width="15" height="14" rx="2" ry="2"></rect></svg>
                                            View Media
                                        </a>
                                    <?php else: ?>
                                        <span style="color: var(--text-muted);">No Media</span>
                                    <?php endif; ?>
                                </td>
                                <td><?php echo date('M d, Y H:i', strtotime($row['created_at'])); ?></td>
                                <td>
                                    <div class="action-btns">
                                        <a href="edit_project.php?id=<?php echo $row['id']; ?>" class="btn-icon btn-edit" title="Edit">
                                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
                                        </a>
                                        <button class="btn-icon btn-delete" title="Delete" onclick="confirmDelete(<?php echo $row['id']; ?>)">
                                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        <?php endwhile; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="5" style="text-align: center; padding: 40px; color: var(--text-muted);">
                                No projects found. Click "Add New Project" to create one.
                            </td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
        
        <!-- Pagination -->
        <?php if ($totalPages > 1): ?>
        <?php
            $queryParams = $_GET;
            $buildUrl = function($p) use ($queryParams) {
                $queryParams['page'] = $p;
                return '?' . http_build_query($queryParams);
            };
        ?>
        <div class="pagination" style="display: flex; justify-content: center; align-items: center; gap: 8px; margin-top: 24px;">
            <?php if ($page > 1): ?>
                <a href="<?php echo $buildUrl($page - 1); ?>" class="btn btn-secondary" style="padding: 8px 12px; border-radius: 6px;">&laquo; Prev</a>
            <?php endif; ?>
            
            <?php 
            $start = max(1, $page - 2);
            $end = min($totalPages, $page + 2);
            if ($start > 1) { echo '<span style="color: var(--text-muted);">...</span>'; }
            for ($i = $start; $i <= $end; $i++): 
            ?>
                <a href="<?php echo $buildUrl($i); ?>" class="btn <?php echo $i === $page ? 'btn-primary' : 'btn-secondary'; ?>" style="padding: 8px 14px; border-radius: 6px;"><?php echo $i; ?></a>
            <?php endfor; ?>
            <?php if ($end < $totalPages) { echo '<span style="color: var(--text-muted);">...</span>'; } ?>
            
            <?php if ($page < $totalPages): ?>
                <a href="<?php echo $buildUrl($page + 1); ?>" class="btn btn-secondary" style="padding: 8px 12px; border-radius: 6px;">Next &raquo;</a>
            <?php endif; ?>
        </div>
        <?php endif; ?>
        
    </div>

    <!-- Delete Confirmation Modal -->
    <div id="deleteModal" class="modal-overlay">
        <div class="modal-content">
            <div style="width: 48px; height: 48px; border-radius: 50%; background: #fee2e2; color: #dc2626; display: flex; align-items: center; justify-content: center; margin: 0 auto 16px;">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path><line x1="12" y1="9" x2="12" y2="13"></line><line x1="12" y1="17" x2="12.01" y2="17"></line></svg>
            </div>
            <h2 class="modal-title">Delete Project</h2>
            <p class="modal-body">Are you sure you want to delete this project? The media file will also be deleted. This action cannot be undone.</p>
            <div class="modal-actions">
                <button type="button" class="btn btn-secondary" onclick="closeModals()">Cancel</button>
                <form id="deleteForm" action="delete_project.php" method="POST">
                    <input type="hidden" name="id" id="deleteProjectId">
                    <button type="submit" class="btn btn-primary" style="background: var(--accent-red);">Delete Forever</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        function confirmDelete(id) {
            document.getElementById('deleteProjectId').value = id;
            document.getElementById('deleteModal').style.display = 'flex';
        }

        function closeModals() {
            document.getElementById('deleteModal').style.display = 'none';
        }
    </script>
</body>
</html>
