<?php
require 'admin/config/database.php';
$res = $conn->query('SELECT * FROM projects');
print_r($res->fetch_all(MYSQLI_ASSOC));
?>
