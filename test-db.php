<?php
// Quick connectivity test for XAMPP + MySQL
require_once __DIR__ . '/includes/bootstrap.php';

try {
    $result = db_query('SELECT DATABASE() AS db, @@version AS version');
    $row = $result->fetch_assoc();
    echo '<h1>DB connection OK</h1>';
    echo '<p>Database: ' . htmlspecialchars($row['db']) . '</p>';
    echo '<p>MySQL version: ' . htmlspecialchars($row['version']) . '</p>';
    echo '<p>Charset: ' . htmlspecialchars($mysqli->character_set_name()) . '</p>';
} catch (Throwable $e) {
    http_response_code(500);
    echo '<h1>DB connection FAILED</h1>';
    echo '<pre>' . htmlspecialchars($e->getMessage()) . "\n" . htmlspecialchars($e->getTraceAsString()) . '</pre>';
}
