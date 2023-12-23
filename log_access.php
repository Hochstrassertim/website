<?php
ob_start(); // Start output buffering to prevent headers from being sent prematurely

// Database connection details
$host = 'sql.timhoch.ch';
$user = 'admin';
$pass = 'Brachi 15';
$db = 'access_logs';

// Establish a MySQL database connection
$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Error connecting to database: " . mysqli_connect_error());
}

// Function to get the client's IP address
function getClientIp() {
    return $_SERVER['REMOTE_ADDR'];
}

$ipAddress = getClientIp();
$timestamp = date('Y-m-d H:i:s');

echo $ipAddress; // For debugging purposes

// Insert data into the database
$sql = "INSERT INTO access_logs (ip_address) VALUES ('$ipAddress')";
$result = mysqli_query($conn, $sql);

// Check for successful insertion
if ($result) {
    echo "Data successfully inserted into the access_logs table.";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);

ob_end_flush(); // End output buffering and flush the buffer
?>
