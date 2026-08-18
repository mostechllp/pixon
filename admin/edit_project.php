<?php
session_start();
require_once 'config/database.php';

// Protect page - check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}

$userEmail = $_SESSION['email'] ?? 'Admin';

// Get project ID
$id = isset($_GET['id']) ? (int)$_GET['id'] : (isset($_POST['id']) ? (int)$_POST['id'] : 0);

if ($id === 0) {
    header('Location: projects.php');
    exit;
}

// Fetch existing project
$stmt = $conn->prepare("SELECT * FROM projects WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 0) {
    $_SESSION['error_msg'] = "Project not found.";
    header('Location: projects.php');
    exit;
}

$project = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = trim($_POST['title'] ?? '');
    $category = trim($_POST['category'] ?? 'indoor');
    $project_date = trim($_POST['project_date'] ?? '');
    $video_path = $project['video_path']; // Default to existing
    
    // Validate inputs
    if (empty($title) || empty($project_date)) {
        $_SESSION['error_msg'] = "Please fill in all required fields.";
    } else {
        $update_success = false;
        
        // Handle new file upload if provided
        if (isset($_FILES['video']) && $_FILES['video']['error'] !== UPLOAD_ERR_NO_FILE) {
            $videoFile = $_FILES['video'];
            
            if ($videoFile['error'] !== UPLOAD_ERR_OK) {
                $_SESSION['error_msg'] = "Error uploading file. Error code: " . $videoFile['error'];
            } else {
                $allowed_exts = ['mp4', 'webm', 'ogg', 'jpg', 'jpeg', 'png', 'gif', 'webp'];
                $file_info = pathinfo($videoFile['name']);
                $file_ext = strtolower($file_info['extension']);
                
                if (!in_array($file_ext, $allowed_exts)) {
                    $_SESSION['error_msg'] = "Invalid file type. Allowed types: " . implode(', ', $allowed_exts);
                } else {
                    $upload_dir = '../uploads/projects/';
                    if (!file_exists($upload_dir)) {
                        mkdir($upload_dir, 0777, true);
                    }
                    
                    $new_filename = uniqid('proj_') . '.' . $file_ext;
                    $destination = $upload_dir . $new_filename;
                    
                    if (move_uploaded_file($videoFile['tmp_name'], $destination)) {
                        // Delete old video file if it exists
                        $old_file = '../' . $project['video_path'];
                        if (file_exists($old_file) && is_file($old_file)) {
                            unlink($old_file);
                        }
                        
                        $video_path = 'uploads/projects/' . $new_filename;
                        $update_success = true; // Mark ready to update DB
                    } else {
                        $_SESSION['error_msg'] = "Failed to move uploaded file.";
                    }
                }
            }
        } else {
            // No new file, just update text fields
            $update_success = true;
        }
        
        if ($update_success) {
            $update_stmt = $conn->prepare("UPDATE projects SET title = ?, category = ?, project_date = ?, video_path = ? WHERE id = ?");
            $update_stmt->bind_param("ssssi", $title, $category, $project_date, $video_path, $id);
            
            if ($update_stmt->execute()) {
                $_SESSION['success_msg'] = "Project updated successfully.";
                header('Location: projects.php');
                exit;
            } else {
                $_SESSION['error_msg'] = "Database error: " . $conn->error;
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Project - PIXON TECHNOLOGIES</title>
    <link rel="icon" href="../assets/fav-logo.jpg-removebg-preview.png" type="image/png">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        /* (Same CSS as add_project.php) */
        :root {
            --primary-bg: #f8f9fa;
            --white: #ffffff;
            --text-main: #111827;
            --text-muted: #6b7280;
            --border-color: #e5e7eb;
            --brand-color: #18315B;
            --brand-hover: #1e3d73;
        }
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Inter', sans-serif; }
        body { background-color: var(--primary-bg); color: var(--text-main); min-height: 100vh; }
        .navbar {
            background-color: #f8fafc; padding: 0 32px; height: 64px;
            display: flex; justify-content: space-between; align-items: center;
            border-bottom: 1px solid #e2e8f0; position: sticky; top: 0; z-index: 100;
        }
        .navbar-brand { font-size: 18px; font-weight: 700; color: #0f172a; display: flex; align-items: center; gap: 8px; }
        .navbar-brand .brand-blue { color: #3b82f6; }
        .brand-icon { width: 24px; height: 24px; fill: #3b82f6; }
        .nav-links { position: absolute; left: 50%; transform: translateX(-50%); display: flex; gap: 28px; }
        .nav-links a { text-decoration: none; color: #64748b; font-size: 14px; font-weight: 500; }
        .nav-links a:hover, .nav-links a.active { color: #0f172a; font-weight: 600; }
        .container { max-width: 800px; margin: 0 auto; padding: 40px 32px; }
        .page-header { display: flex; align-items: center; justify-content: space-between; margin-bottom: 32px; }
        .page-header h1 { font-size: 28px; font-weight: 600; }
        .btn { padding: 10px 16px; border-radius: 8px; font-size: 14px; font-weight: 500; cursor: pointer; display: inline-flex; align-items: center; gap: 8px; border: none; transition: all 0.2s; text-decoration: none; }
        .btn-primary { background-color: var(--brand-color); color: white; }
        .btn-primary:hover { background-color: var(--brand-hover); }
        .btn-secondary { background-color: white; border: 1px solid var(--border-color); color: var(--text-main); }
        .btn-secondary:hover { background-color: #f9fafb; }
        .form-card { background: var(--white); border-radius: 12px; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05); border: 1px solid var(--border-color); padding: 32px; }
        .form-group { margin-bottom: 24px; }
        .form-label { display: block; font-size: 14px; font-weight: 600; color: #374151; margin-bottom: 8px; }
        .form-input, .form-file { width: 100%; padding: 12px 16px; border: 1px solid var(--border-color); border-radius: 8px; font-size: 15px; outline: none; transition: border-color 0.2s; }
        .form-input:focus { border-color: var(--brand-color); }
        .form-file { padding: 8px; background: #f9fafb; }
        .form-hint { display: block; font-size: 13px; color: var(--text-muted); margin-top: 6px; }
        .alert { padding: 12px 16px; border-radius: 8px; margin-bottom: 24px; font-size: 14px; }
        .alert-error { background: #fee2e2; color: #dc2626; border: 1px solid #fecaca; }
        .current-video { margin-top: 8px; padding: 12px; background: #f3f4f6; border-radius: 8px; font-size: 14px; display: flex; align-items: center; justify-content: space-between; }
        
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
            .form-card {
                padding: 20px 16px;
            }
            .form-group {
                margin-bottom: 16px;
            }
            .form-label {
                font-size: 13px;
            }
            .form-input, .form-file {
                padding: 10px 14px;
                font-size: 14px;
            }
            .btn {
                width: 100%;
                justify-content: center;
                padding: 8px 12px;
                font-size: 13px;
            }
            form > div:last-child {
                flex-direction: column;
                margin-top: 24px;
                gap: 12px;
            }
            .current-video {
                flex-direction: column;
                align-items: flex-start;
                gap: 8px;
            }
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <div class="navbar-brand">
            <img src="../assets/pixon-bg.png" alt="PIXON TECHNOLOGIES" style="height: 40px; width: auto; transform: scale(3.5); transform-origin: left center;">
        </div>
        <div class="nav-links">
            <a href="dashboard.php">Leads</a>
            <a href="projects.php" class="active">Projects</a>
        </div>
    </nav>

    <div class="container">
        <div class="page-header">
            <h1>Edit Project</h1>
            <a href="projects.php" class="btn btn-secondary">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>
                Back
            </a>
        </div>

        <div class="form-card">
            <?php include 'toast.php'; ?>

            <form action="edit_project.php?id=<?php echo $id; ?>" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                
                <div class="form-group">
                    <label class="form-label" for="title">Project Title <span style="color: red;">*</span></label>
                    <input type="text" id="title" name="title" class="form-input" required value="<?php echo htmlspecialchars($_POST['title'] ?? $project['title']); ?>">
                </div>

                <div class="form-group">
                    <label class="form-label" for="category">Category <span style="color: red;">*</span></label>
                    <select id="category" name="category" class="form-input" required style="background: white;">
                        <?php $current_category = $_POST['category'] ?? $project['category'] ?? 'indoor'; ?>
                        <option value="indoor" <?php echo ($current_category === 'indoor') ? 'selected' : ''; ?>>Indoor</option>
                        <option value="outdoor" <?php echo ($current_category === 'outdoor') ? 'selected' : ''; ?>>Outdoor</option>
                    </select>
                </div>

                <div class="form-group">
                    <label class="form-label" for="project_date">Project Date <span style="color: red;">*</span></label>
                    <input type="date" id="project_date" name="project_date" class="form-input" required value="<?php echo htmlspecialchars($_POST['project_date'] ?? $project['project_date']); ?>">
                </div>

                <div class="form-group">
                    <label class="form-label" for="video">Replace Media (Optional)</label>
                    
                    <?php if($project['video_path']): ?>
                        <div class="current-video">
                            <span>Current: <strong><?php echo basename($project['video_path']); ?></strong></span>
                            <a href="../<?php echo htmlspecialchars($project['video_path']); ?>" target="_blank" style="color: #3b82f6; text-decoration: none;">View</a>
                        </div>
                    <?php endif; ?>
                    
                    <input type="file" id="video" name="video" class="form-file" accept="video/mp4,video/webm,video/ogg,video/avi,video/quicktime,image/jpeg,image/png,image/gif,image/webp" style="margin-top: 12px;">
                    <span class="form-hint">Leave empty if you don't want to change the current media. Accepted formats: MP4, WebM, OGG, AVI, MOV, JPG, PNG, GIF, WEBP.</span>
                </div>

                <div style="display: flex; gap: 12px; margin-top: 32px;">
                    <button type="submit" class="btn btn-primary">Update Project</button>
                    <a href="projects.php" class="btn btn-secondary">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
