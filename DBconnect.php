



<?php
$servername = "MySQL";
$username = "root";
$password = "";
$dbName = "itpm_lms_1";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbName);

// Check connection
if ($conn->connect_error) {

    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>


