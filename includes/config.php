<?php
// Define the base URL
define('BASE_URL', 'http://localhost/blog-cms/');





// Database configuration
$host = "localhost";
$user = "root";
$password = "";
$database = "blog-cms";

// Create a database connection
$connection = mysqli_connect($host, $user, $password, $database);

// Check the connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    $connection_status = "connected";
}
