<?php
// Global bootstrap for the site
// Starts session, sets headers, and loads DB connection

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Security headers (basic)
header('X-Content-Type-Options: nosniff');
header('X-Frame-Options: SAMEORIGIN');
header('X-XSS-Protection: 1; mode=block');

// Load database connection
// The bootstrap file is in Final Assignment_/includes/bootstrap.php
// sql/db.php is at Final Assignment_/sql/db.php
$root = dirname(__DIR__); // points to Final Assignment_
require_once $root . DIRECTORY_SEPARATOR . 'sql' . DIRECTORY_SEPARATOR . 'db.php';

// You can now use $mysqli and db_query() everywhere after including this bootstrap.
