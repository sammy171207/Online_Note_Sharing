<?php
// DB credentials.
define('DB_HOST', 'localhost');
define('DB_PORT', '3307'); // Define the port
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'onssdb');

try {
    // Establish database connection.
    $dbh = new PDO("mysql:host=".DB_HOST.";port=".DB_PORT.";dbname=".DB_NAME, DB_USER, DB_PASS);
    
    // Set PDO to throw exceptions for errors.
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Set character encoding to UTF-8.
    $dbh->exec("SET NAMES utf8");
    
    // Optionally, other configurations can be set here.
    
    // echo "Connected to database successfully.";
} catch (PDOException $e) {
    // Handle connection errors.
    exit("Error: " . $e->getMessage());
}
?>
