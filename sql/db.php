<?php
// Central database connection for the project
// Path: Final Assignment_/sql/db.php
// Usage in PHP files: include_once __DIR__ . '/sql/db.php';
// If the including file is inside a subfolder, adjust the relative path accordingly.

$DB_HOST = '127.0.0.1'; // or 'localhost'
$DB_USER = 'root';       // XAMPP default user
$DB_PASS = '';           // XAMPP default has empty password unless you changed it
$DB_NAME = 'jannetd';    // requested database name

$mysqli = @new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);

if ($mysqli->connect_errno) {
    // Return a server error if included via HTTP context
    if (php_sapi_name() !== 'cli') {
        http_response_code(500);
    }
    die('Database connection failed: (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}

// Ensure utf8mb4 (full Unicode) is used
$mysqli->set_charset('utf8mb4');

// Optional helper to run parameterized queries quickly
function db_query($sql, $params = [], $types = '') {
    global $mysqli;
    if (!$params) {
        return $mysqli->query($sql);
    }
    $stmt = $mysqli->prepare($sql);
    if (!$stmt) {
        throw new Exception('Prepare failed: ' . $mysqli->error);
    }
    if ($types === '') {
        // Infer basic types as 's' (string) by default
        $types = str_repeat('s', count($params));
    }
    $stmt->bind_param($types, ...$params);
    if (!$stmt->execute()) {
        throw new Exception('Execute failed: ' . $stmt->error);
    }
    return $stmt->get_result();
}
?>
