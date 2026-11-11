<?php
// Default database configuration
$host = 'localhost';
$username = 'u568458817_pixon_db'; // Change if using a different DB user
$password = 'F/TO+3$g'; // Change if using a different DB password
$database = 'u568458817_pixon_db';

// Load credentials from .env if defined
$env_path = dirname(__DIR__, 2) . '/.env';
if (file_exists($env_path)) {
    $env_config = @parse_ini_file($env_path);
    if (!empty($env_config['DB_HOST'])) $host = $env_config['DB_HOST'];
    if (!empty($env_config['DB_USER'])) $username = $env_config['DB_USER'];
    if (!empty($env_config['DB_PASS'])) $password = $env_config['DB_PASS'];
    if (!empty($env_config['DB_NAME'])) $database = $env_config['DB_NAME'];
}

// Disable mysqli from throwing fatal uncaught exceptions (PHP 8.1+ compatibility)
if (function_exists('mysqli_report')) {
    mysqli_report(MYSQLI_REPORT_OFF);
}

$conn = null;

try {
    // Attempt connection
    $conn = @new mysqli($host, $username, $password, $database);
    
    // Check connection error
    if ($conn->connect_error) {
        error_log("Database connection failed: " . $conn->connect_error);
        $conn = null;
    } else {
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

        @$conn->query($table_leads_sql);

        // Attempt to add 'attachment' column if table already existed without it
        try {
            @$conn->query("ALTER TABLE `leads` ADD COLUMN `attachment` varchar(255) DEFAULT NULL");
        } catch (Throwable $e) {
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

        @$conn->query($table_projects_sql);

        // Attempt to add 'category' column if table already existed without it
        try {
            @$conn->query("ALTER TABLE `projects` ADD COLUMN `category` varchar(50) NOT NULL DEFAULT 'indoor' AFTER `title`");
        } catch (Throwable $e) {
            // Ignore error if column already exists
        }
    }
} catch (Throwable $e) {
    error_log("Database connection exception: " . $e->getMessage());
    $conn = null;
}
?>
