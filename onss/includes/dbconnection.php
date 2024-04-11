<?php
// DB credentials.
define('DB_HOST', 'localhost');
define('DB_PORT', '3307'); // Define the port
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'onssdb');

try {
    // Establish database connection.
    $dbh = new PDO("mysql:host=" . DB_HOST . ";port=" . DB_PORT . ";dbname=" . DB_NAME, DB_USER, DB_PASS, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
    
    // Set PDO to throw exceptions for errors.
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Additional options (optional).
    $dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    
    echo "Connected to database successfully.";
} catch (PDOException $e) {
    // Handle connection errors.
    exit("Error: " . $e->getMessage());
}
?>                                                                          ```                                                                                                                                                                                                     `
