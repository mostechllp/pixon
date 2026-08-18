<?php
require 'admin/config/database.php';
// insert a dummy
$conn->query("INSERT INTO projects (title, category, project_date, video_path) VALUES ('Test Add', 'indoor', '2026-07-21', 'test.mp4')");
$id = $conn->insert_id;

$_GET['id'] = $id;
$_POST['title'] = 'Test Updated';
$_POST['category'] = 'outdoor';
$_POST['project_date'] = '2026-07-22';
$_SERVER['REQUEST_METHOD'] = 'POST';

// Mock session to bypass login
session_start();
$_SESSION['user_id'] = 1;
$_SESSION['email'] = 'admin@example.com';
$_SESSION['role'] = 'admin';

ob_start();
include 'admin/edit_project.php';
$output = ob_get_clean();

$res = $conn->query("SELECT * FROM projects WHERE id = $id");
$row = $res->fetch_assoc();
print_r($row);

// print session to see if success or error is set
print_r($_SESSION);
?>
