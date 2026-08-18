<?php
session_start();
require_once 'config/database.php';

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = intval($_POST['id'] ?? 0);
    
    if ($id > 0) {
        // Use prepared statements to prevent SQL injection
        $stmt = $conn->prepare("DELETE FROM leads WHERE id = ?");
        if ($stmt) {
            $stmt->bind_param("i", $id);
            if ($stmt->execute()) {
                // Deletion successful
                $_SESSION['success_msg'] = "Lead successfully deleted.";
            } else {
                $_SESSION['error_msg'] = "Error deleting lead: " . $stmt->error;
            }
            $stmt->close();
        } else {
            $_SESSION['error_msg'] = "Database statement preparation failed.";
        }
    } else {
        $_SESSION['error_msg'] = "Invalid lead ID.";
    }
}

// Redirect back to dashboard
header('Location: dashboard.php');
exit;
?>
