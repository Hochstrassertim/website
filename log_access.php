<?php
// Include the configuration file
include 'config.php';

// Function to get the client's IP address
function getClientIp() {
    $ipAddress = '';
    if (isset($_SERVER['HTTP_CLIENT_IP'])) {
        $ipAddress = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ipAddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } elseif (isset($_SERVER['HTTP_X_FORWARDED'])) {
        $ipAddress = $_SERVER['HTTP_X_FORWARDED'];
    } elseif (isset($_SERVER['HTTP_FORWARDED_FOR'])) {
        $ipAddress = $_SERVER['HTTP_FORWARDED_FOR'];
    } elseif (isset($_SERVER['HTTP_FORWARDED'])) {
        $ipAddress = $_SERVER['HTTP_FORWARDED'];
    } elseif (isset($_SERVER['REMOTE_ADDR'])) {
        $ipAddress = $_SERVER['REMOTE_ADDR'];
    } else {
        $ipAddress = 'UNKNOWN';
    }
    return $ipAddress;
}

// Capture IP address, current website, and timestamp
$ipAddress = getClientIp();
$currentWebsite = $_SERVER['HTTP_HOST'];
$timestamp = date('Y-m-d H:i:s');

// Insert data into the database
$sql = "INSERT INTO access_logs (ip_address, current_website, timestamp) VALUES ('$ipAddress', '$currentWebsite', '$timestamp')";
$result = mysqli_query($conn, $sql);

// Check for successful insertion

//if ($result) {
//    echo "Data successfully inserted into the access_logs table.";
//} else {
//    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
//}

// Close the database connection
mysqli_close($conn);
?>
