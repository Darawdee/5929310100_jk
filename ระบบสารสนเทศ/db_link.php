<?php
//$servername = "mysql.mcs.psu.ac.th";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "alist";

// Create connection object
$conn = new mysqli($servername, $username, $password, $dbname);
    
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "Connected successfully";
mysqli_set_charset($conn, "utf8");//is to make Thai readable
?>




