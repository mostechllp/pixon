<?php
session_start();
require_once 'config/database.php';

// Protect dashboard.php - check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}

$userEmail = $_SESSION['email'] ?? 'Admin';
$userRole = $_SESSION['role'] ?? 'Unknown';

// Handle Export
if (isset($_GET['export'])) {
    $exportType = $_GET['export'];
    $sql = "SELECT id, name, company, email, phone, country, service, message, page, attachment, created_at FROM leads ORDER BY created_at DESC";
    $result = $conn->query($sql);
    
    if ($exportType === 'excel') {
        $filename = "leads_export_" . date('Y-m-d_H-i-s') . ".xls";
        header("Content-Type: application/vnd.ms-excel; charset=utf-8");
        header("Content-Disposition: attachment; filename=\"$filename\"");
        
        echo '<table border="1">';
        echo '<tr><th>ID</th><th>Name</th><th>Company</th><th>Email</th><th>Phone</th><th>Country</th><th>Service</th><th>Message</th><th>Page</th><th>Attachment</th><th>Date</th></tr>';
        
        if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo '<tr>';
                echo '<td>' . $row['id'] . '</td>';
                echo '<td>' . htmlspecialchars($row['name']) . '</td>';
                echo '<td>' . htmlspecialchars($row['company']) . '</td>';
                echo '<td>' . htmlspecialchars($row['email']) . '</td>';
                echo '<td>' . htmlspecialchars($row['phone']) . '</td>';
                echo '<td>' . htmlspecialchars($row['country']) . '</td>';
                echo '<td>' . htmlspecialchars($row['service']) . '</td>';
                echo '<td>' . htmlspecialchars($row['message']) . '</td>';
                echo '<td>' . htmlspecialchars($row['page']) . '</td>';
                echo '<td>' . htmlspecialchars($row['attachment'] ?? 'No attachment') . '</td>';
                echo '<td>' . $row['created_at'] . '</td>';
                echo '</tr>';
            }
        }
        echo '</table>';
        exit;
    } elseif ($exportType === 'csv') {
        $filename = "leads_export_" . date('Y-m-d_H-i-s') . ".csv";
        header('Content-Type: text/csv; charset=utf-8');
        header("Content-Disposition: attachment; filename=\"$filename\"");
        
        // Add BOM for Excel CSV support
        echo "\xEF\xBB\xBF";
        
        $output = fopen('php://output', 'w');
        fputcsv($output, array('ID', 'Name', 'Company', 'Email', 'Phone', 'Country', 'Service', 'Message', 'Page', 'Attachment', 'Date'));
        
        if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                fputcsv($output, $row);
            }
        }
        fclose($output);
        exit;
    }
}

// Build Search and Filter query for Display
$search = $_GET['search'] ?? '';
$filterDate = $_GET['filter_date'] ?? '';
$filterPage = $_GET['filter_page'] ?? '';

$whereClauses = [];
$params = [];
$types = '';

if ($search !== '') {
    $whereClauses[] = "(name LIKE ? OR company LIKE ? OR phone LIKE ? OR email LIKE ?)";
    $searchParam = '%' . $search . '%';
    array_push($params, $searchParam, $searchParam, $searchParam, $searchParam);
    $types .= 'ssss';
}

if ($filterDate !== '') {
    $whereClauses[] = "DATE(created_at) = ?";
    $params[] = $filterDate;
    $types .= 's';
}

if ($filterPage !== '') {
    $whereClauses[] = "page LIKE ?";
    $params[] = '%' . $filterPage . '%';
    $types .= 's';
}

$whereSql = '';
if (count($whereClauses) > 0) {
    $whereSql = " WHERE " . implode(' AND ', $whereClauses);
}

// Pagination logic
$limit = 10;
$page = isset($_GET['page']) ? max(1, (int)$_GET['page']) : 1;
$offset = ($page - 1) * $limit;

// Count total rows
$countQuery = "SELECT COUNT(*) as total FROM leads" . $whereSql;
$countStmt = $conn->prepare($countQuery);
if ($types !== '') {
    $countStmt->bind_param($types, ...$params);
}
$countStmt->execute();
$countResult = $countStmt->get_result();
$totalRows = $countResult->fetch_assoc()['total'];
$totalPages = ceil($totalRows / $limit);
$countStmt->close();

$query = "SELECT * FROM leads" . $whereSql . " ORDER BY created_at DESC LIMIT ? OFFSET ?";
$stmt = $conn->prepare($query);

if ($types !== '') {
    $bindTypes = $types . 'ii';
    $bindParams = $params;
    $bindParams[] = $limit;
    $bindParams[] = $offset;
    $stmt->bind_param($bindTypes, ...$bindParams);
} else {
    $stmt->bind_param('ii', $limit, $offset);
}
$stmt->execute();
$leadsResult = $stmt->get_result();

// Get unique pages for the filter dropdown
$pagesQuery = "SELECT DISTINCT page FROM leads WHERE page IS NOT NULL AND page != ''";
$pagesResult = $conn->query($pagesQuery);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lead Management - PIXON TECHNOLOGIES</title>
    <link href="../assets/favicon.png" rel="icon" type="image/png" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-bg: #f8f9fa;
            --white: #ffffff;
            --text-main: #111827;
            --text-muted: #6b7280;
            --border-color: #e5e7eb;
            --brand-color: #18315B; /* PIXON Brand */
            --brand-hover: #1e3d73;
            --accent-red: #ef4444;
            --accent-green: #10b981;
            --accent-orange: #f59e0b;
        }
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Inter', sans-serif; }
        body { background-color: var(--primary-bg); color: var(--text-main); min-height: 100vh; }
        
        /* Navbar Styling */
        .navbar {
            background-color: #f8fafc; padding: 0 32px; height: 64px;
            display: flex; justify-content: space-between; align-items: center;
            border-bottom: 1px solid #e2e8f0; position: sticky; top: 0; z-index: 100;
        }
        .navbar-brand { font-size: 18px; font-weight: 700; color: #0f172a; display: flex; align-items: center; gap: 8px; font-family: 'Inter', sans-serif; letter-spacing: -0.5px; z-index: 10; }
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
        .container { max-width: 1400px; margin: 0 auto; padding: 40px 32px; }
        .page-header { display: flex; align-items: center; justify-content: space-between; margin-bottom: 32px; }
        .page-header h1 { font-size: 28px; font-weight: 600; }
        
        /* Action Bar */
        .action-bar {
            display: flex; justify-content: space-between; align-items: center;
            margin-bottom: 24px; flex-wrap: wrap; gap: 16px;
            background: var(--white); padding: 16px; border-radius: 12px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05); border: 1px solid var(--border-color);
        }
        .filter-form { display: flex; gap: 16px; align-items: center; flex-wrap: wrap; width: 100%; }
        
        .search-box { position: relative; display: flex; align-items: center; flex-grow: 1; min-width: 200px; max-width: 350px; }
        .search-box input {
            width: 100%; padding: 10px 16px 10px 40px; border: 1px solid var(--border-color);
            border-radius: 8px; outline: none; font-size: 14px; transition: border-color 0.2s;
        }
        .search-box input:focus { border-color: var(--brand-color); }
        .search-box svg { position: absolute; left: 12px; color: var(--text-muted); width: 18px; height: 18px; }
        
        .form-select, .form-input { padding: 10px 16px; border: 1px solid var(--border-color); border-radius: 8px; font-size: 14px; outline: none; background: white; }
        .form-select:focus, .form-input:focus { border-color: var(--brand-color); }
        
        .btn { padding: 10px 16px; border-radius: 8px; font-size: 14px; font-weight: 500; cursor: pointer; display: inline-flex; align-items: center; gap: 8px; border: none; transition: all 0.2s; text-decoration: none; }
        .btn-primary { background-color: var(--brand-color); color: white; }
        .btn-primary:hover { background-color: var(--brand-hover); }
        .btn-secondary { background-color: white; border: 1px solid var(--border-color); color: var(--text-main); }
        .btn-secondary:hover { background-color: #f9fafb; }
        .btn-export { background-color: var(--accent-green); color: white; }
        .btn-export:hover { background-color: #059669; }

        /* Table */
        .table-container { background: var(--white); border-radius: 12px; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05); border: 1px solid var(--border-color); overflow-x: auto; }
        .data-table { width: 100%; border-collapse: collapse; text-align: left; }
        .data-table th { background-color: #f9fafb; padding: 16px 24px; font-size: 13px; font-weight: 600; color: var(--text-muted); text-transform: uppercase; border-bottom: 1px solid var(--border-color); white-space: nowrap; }
        .data-table td { padding: 16px 24px; font-size: 14px; color: var(--text-main); border-bottom: 1px solid var(--border-color); vertical-align: middle; }
        .data-table tbody tr:hover { background-color: #f3f4f6; }
        .user-name-cell { font-weight: 500; color: var(--brand-color); }
        
        .badge-screen { background: #e0e7ff; color: #4338ca; padding: 4px 8px; border-radius: 4px; font-size: 12px; font-weight: 500; }
        
        .action-btns { display: flex; gap: 8px; }
        .btn-icon { background: none; border: none; cursor: pointer; padding: 6px; border-radius: 6px; display: flex; align-items: center; transition: all 0.2s; color: var(--text-muted); }
        .btn-view:hover { background: #dbeafe; color: #2563eb; }
        .btn-delete:hover { background: #fee2e2; color: #dc2626; }

        /* Modal styling */
        .modal-overlay { display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.5); z-index: 1000; align-items: center; justify-content: center; backdrop-filter: blur(4px); }
        .modal-content { background: white; padding: 32px; border-radius: 16px; width: 100%; max-width: 400px; box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1); text-align: center; }
        .modal-title { font-size: 20px; font-weight: 600; margin-bottom: 12px; }
        .modal-body { color: var(--text-muted); margin-bottom: 24px; font-size: 14px; }
        .modal-actions { display: flex; gap: 12px; justify-content: center; }

        .view-modal-content { max-width: 600px; text-align: left; }
        .view-detail-row { display: flex; border-bottom: 1px solid #eee; padding: 12px 0; }
        .view-detail-label { width: 140px; font-weight: 600; color: var(--text-muted); font-size: 14px; }
        .view-detail-value { flex: 1; font-size: 14px; color: var(--text-main); }
        
        /* Responsive Media Queries */
        @media (max-width: 768px) {
            .navbar {
                padding: 12px 16px;
                height: auto;
                flex-wrap: wrap;
            }
            .navbar-brand img {
                transform: scale(2.5) !important; /* Slightly smaller logo on mobile */
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
            .page-header > div {
                width: 100%;
                flex-direction: column;
            }
            .page-header .btn {
                width: 100%;
                justify-content: center;
            }
            .filter-form {
                flex-direction: column;
                align-items: stretch;
                gap: 12px;
            }
            .search-box, .form-input, .form-select {
                width: 100%;
                max-width: none;
            }
            .action-bar {
                padding: 12px;
                margin-bottom: 16px;
            }
            .data-table th, .data-table td {
                padding: 12px 16px;
                font-size: 13px;
            }
            .btn {
                padding: 8px 12px;
                font-size: 13px;
            }
            .view-detail-row {
                flex-direction: column;
                gap: 4px;
            }
            .view-detail-label {
                width: 100%;
                font-size: 13px;
            }
            .view-detail-value {
                font-size: 13px;
            }
            .modal-content {
                padding: 24px 20px;
            }
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar">
        <div class="navbar-brand">
            <img src="../assets/pixon-bg.webp" alt="PIXON TECHNOLOGIES" style="height: 40px; width: auto; transform: scale(3.5); transform-origin: left center;">
        </div>
        
        <div class="nav-links">
            <a href="dashboard.php" class="active">Leads</a>
            <a href="projects.php">Projects</a>
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

    <!-- Main Content -->
    <div class="container">
        <?php include 'toast.php'; ?>

        <div class="page-header">
            <h1>Lead Management System</h1>
            <div style="display: flex; gap: 12px;">
                <a href="?export=csv" class="btn btn-export">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>
                    Export CSV
                </a>
                <a href="?export=excel" class="btn btn-export" style="background-color: #217346;">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>
                    Export Excel
                </a>
            </div>
        </div>

        <div class="action-bar">
            <form class="filter-form" method="GET" action="dashboard.php">
                <div class="search-box">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                    <input type="text" name="search" placeholder="Search..." value="<?php echo htmlspecialchars($search); ?>">
                </div>
                
                <input type="date" name="filter_date" class="form-input" value="<?php echo htmlspecialchars($filterDate); ?>" title="Filter by Date">
                
                <select name="filter_page" class="form-select">
                    <option value="">All Pages</option>
                    <?php if($pagesResult && $pagesResult->num_rows > 0): ?>
                        <?php while($p = $pagesResult->fetch_assoc()): ?>
                            <option value="<?php echo htmlspecialchars($p['page']); ?>" <?php echo ($filterPage === $p['page']) ? 'selected' : ''; ?>>
                                <?php echo htmlspecialchars($p['page']); ?>
                            </option>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </select>

                <button type="submit" class="btn btn-primary">Filter</button>
                <a href="dashboard.php" class="btn btn-secondary">Clear</a>
            </form>
        </div>

        <div class="table-container">
            <table class="data-table">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Name</th>
                        <th>Company</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>Screen Type</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if($leadsResult && $leadsResult->num_rows > 0): ?>
                        <?php while($row = $leadsResult->fetch_assoc()): ?>
                            <tr>
                                <td><?php echo date('M d, Y H:i', strtotime($row['created_at'])); ?></td>
                                <td class="user-name-cell"><?php echo htmlspecialchars($row['name']); ?></td>
                                <td><?php echo htmlspecialchars($row['company']); ?></td>
                                <td><a href="mailto:<?php echo htmlspecialchars($row['email']); ?>" style="color: inherit; text-decoration: none;"><?php echo htmlspecialchars($row['email']); ?></a></td>
                                <td><?php echo htmlspecialchars($row['phone']); ?></td>
                                <td><span class="badge-screen"><?php echo htmlspecialchars($row['service']); ?></span></td>
                                <td>
                                    <div class="action-btns">
                                        <button class="btn-icon btn-view" title="View Details" onclick='viewLead(<?php echo json_encode($row); ?>)'>
                                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                                        </button>
                                        <button class="btn-icon btn-delete" title="Delete" onclick="confirmDelete(<?php echo $row['id']; ?>)">
                                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        <?php endwhile; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="7" style="text-align: center; padding: 40px; color: var(--text-muted);">
                                No leads found matching your criteria.
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
            <h2 class="modal-title">Delete Lead</h2>
            <p class="modal-body">Are you sure you want to delete this lead? This action cannot be undone.</p>
            <div class="modal-actions">
                <button type="button" class="btn btn-secondary" onclick="closeModals()">Cancel</button>
                <form id="deleteForm" action="delete_lead.php" method="POST">
                    <input type="hidden" name="id" id="deleteLeadId">
                    <button type="submit" class="btn btn-primary" style="background: var(--accent-red);">Delete Forever</button>
                </form>
            </div>
        </div>
    </div>

    <!-- View Details Modal -->
    <div id="viewModal" class="modal-overlay">
        <div class="modal-content view-modal-content">
            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 24px; border-bottom: 1px solid #eee; padding-bottom: 12px;">
                <h2 class="modal-title" style="margin: 0;">Lead Details</h2>
                <button type="button" class="btn-icon" onclick="closeModals()">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                </button>
            </div>
            <div class="modal-body" style="text-align: left; margin-bottom: 0;">
                <div class="view-detail-row">
                    <div class="view-detail-label">Name</div>
                    <div class="view-detail-value" id="view-name"></div>
                </div>
                <div class="view-detail-row">
                    <div class="view-detail-label">Company</div>
                    <div class="view-detail-value" id="view-company"></div>
                </div>
                <div class="view-detail-row">
                    <div class="view-detail-label">Email</div>
                    <div class="view-detail-value" id="view-email"></div>
                </div>
                <div class="view-detail-row">
                    <div class="view-detail-label">Phone</div>
                    <div class="view-detail-value" id="view-phone"></div>
                </div>
                <div class="view-detail-row">
                    <div class="view-detail-label">Location/Country</div>
                    <div class="view-detail-value" id="view-country"></div>
                </div>
                <div class="view-detail-row">
                    <div class="view-detail-label">Screen Type</div>
                    <div class="view-detail-value"><span class="badge-screen" id="view-service"></span></div>
                </div>
                <div class="view-detail-row">
                    <div class="view-detail-label">Source Page</div>
                    <div class="view-detail-value" id="view-page" style="word-break: break-all;"></div>
                </div>
                <div class="view-detail-row">
                    <div class="view-detail-label">Message</div>
                    <div class="view-detail-value" id="view-message" style="white-space: pre-wrap;"></div>
                </div>
                <div class="view-detail-row">
                    <div class="view-detail-label">Attachment</div>
                    <div class="view-detail-value" id="viewAttachmentContainer"></div>
                </div>
            </div>
            <div class="modal-actions" style="margin-top: 24px; justify-content: flex-end;">
                <button type="button" class="btn btn-secondary" onclick="closeModals()">Close</button>
            </div>
        </div>
    </div>

    <script>
        function confirmDelete(id) {
            document.getElementById('deleteLeadId').value = id;
            document.getElementById('deleteModal').style.display = 'flex';
        }

        function viewLead(data) {
            document.getElementById('view-name').textContent = data.name || '-';
            document.getElementById('view-company').textContent = data.company || '-';
            document.getElementById('view-email').textContent = data.email || '-';
            document.getElementById('view-phone').textContent = data.phone || '-';
            document.getElementById('view-country').textContent = data.country || '-';
            document.getElementById('view-service').textContent = data.service || '-';
            document.getElementById('view-page').textContent = data.page || '-';
            document.getElementById('view-message').textContent = data.message || '-';

            // Attachment handling
            const attachmentContainer = document.getElementById('viewAttachmentContainer') || createAttachmentContainer();
            if (data.attachment) {
                attachmentContainer.innerHTML = `<a href="../${data.attachment}" target="_blank" style="color: var(--primary); font-weight: 500; text-decoration: none; display: inline-flex; align-items: center; gap: 6px;"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21.44 11.05l-9.19 9.19a6 6 0 0 1-8.49-8.49l9.19-9.19a4 4 0 0 1 5.66 5.66l-9.2 9.19a2 2 0 0 1-2.83-2.83l8.49-8.48"></path></svg> View Attachment</a>`;
            } else {
                attachmentContainer.innerHTML = `<span style="color: var(--text-muted);">No attachment</span>`;
            }
            
            document.getElementById('viewModal').style.display = 'flex';
        }

        function closeModals() {
            document.getElementById('deleteModal').style.display = 'none';
            document.getElementById('viewModal').style.display = 'none';
        }

        // Close modal on outside click
        window.onclick = function(event) {
            let deleteModal = document.getElementById('deleteModal');
            let viewModal = document.getElementById('viewModal');
            if (event.target == deleteModal) {
                deleteModal.style.display = "none";
            }
            if (event.target == viewModal) {
                viewModal.style.display = "none";
            }
        }
    </script>
</body>
</html>
