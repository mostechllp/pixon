<?php
session_start();

// If user is already logged in, redirect to dashboard
if (isset($_SESSION['user_id'])) {
    header('Location: /admin/dashboard.php');
} else {
    // Otherwise, redirect to login page
    header('Location: /admin/login.php');
}
exit;
?>
