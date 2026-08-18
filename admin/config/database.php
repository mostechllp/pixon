<?php
$host = 'localhost';
$username = 'u568458817_pixon_db'; // Change if using a different DB user
$password = 'F/TO+3$g'; // Change if using a different DB password
$database = 'u568458817_pixon_db';

// Create connection using MySQLi
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Set charset to utf8mb4 for better compatibility
$conn->set_charset("utf8mb4");

// Automatically create tables if they don't exist to prevent fatal errors
$table_leads_sql = "CREATE TABLE IF NOT EXISTS `leads` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `company` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `country` varchar(10) DEFAULT NULL,
  `service` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `page` varchar(255) DEFAULT NULL,
  `attachment` varchar(255) DEFAULT NULL,
  `created_at` timestamp DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";

$conn->query($table_leads_sql);

// Attempt to add 'attachment' column if table already existed without it
// We ignore the error if it already exists
try {
    @$conn->query("ALTER TABLE `leads` ADD COLUMN `attachment` varchar(255) DEFAULT NULL");
} catch (Exception $e) {
    // Ignore error if column already exists
}

// Create projects table
$table_projects_sql = "CREATE TABLE IF NOT EXISTS `projects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `category` varchar(50) NOT NULL DEFAULT 'indoor',
  `project_date` date NOT NULL,
  `video_path` varchar(255) NOT NULL,
  `created_at` timestamp DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";

$conn->query($table_projects_sql);

// Attempt to add 'category' column if table already existed without it
try {
    @$conn->query("ALTER TABLE `projects` ADD COLUMN `category` varchar(50) NOT NULL DEFAULT 'indoor' AFTER `title`");
} catch (Exception $e) {
    // Ignore error if column already exists
}
?>
