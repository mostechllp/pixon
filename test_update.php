<?php
require 'admin/config/database.php';
// insert a dummy
$conn->query("INSERT INTO projects (title, category, project_date, video_path) VALUES ('Test Update', 'indoor', '2026-07-21', 'test.mp4')");
$id = $conn->insert_id;
echo "Inserted ID: " . $id . "\n";

// simulate the prepare query
$title = "Updated Title";
$category = "outdoor";
$project_date = "2026-10-10";
$video_path = "updated.mp4";

$update_stmt = $conn->prepare("UPDATE projects SET title = ?, category = ?, project_date = ?, video_path = ? WHERE id = ?");
if (!$update_stmt) {
    echo "Prepare failed: " . $conn->error . "\n";
} else {
    $update_stmt->bind_param("ssssi", $title, $category, $project_date, $video_path, $id);
    if ($update_stmt->execute()) {
        echo "Update successful\n";
    } else {
        echo "Update execute failed: " . $update_stmt->error . "\n";
    }
}

// verify
$res = $conn->query("SELECT * FROM projects WHERE id = $id");
$row = $res->fetch_assoc();
print_r($row);
?>
