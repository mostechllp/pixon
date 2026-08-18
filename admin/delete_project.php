<?php
session_start();
require_once 'config/database.php';

// Protect page - check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    $id = (int)$_POST['id'];
    
    // First get the project to find the video file path
    $stmt = $conn->prepare("SELECT video_path FROM projects WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        $project = $result->fetch_assoc();
        
        // Delete the record from database
        $delete_stmt = $conn->prepare("DELETE FROM projects WHERE id = ?");
        $delete_stmt->bind_param("i", $id);
        
        if ($delete_stmt->execute()) {
            // Delete the video file if it exists
            if (!empty($project['video_path'])) {
                $file_path = '../' . $project['video_path'];
                if (file_exists($file_path) && is_file($file_path)) {
                    unlink($file_path);
                }
            }
            $_SESSION['success_msg'] = "Project deleted successfully.";
        } else {
            $_SESSION['error_msg'] = "Error deleting project: " . $conn->error;
        }
    } else {
        $_SESSION['error_msg'] = "Project not found.";
    }
}

header("Location: projects.php");
exit;
?>
