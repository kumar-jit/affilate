<?php

echo "working";
$servername = "sql4.freesqldatabase.com";
$username = "sql4459991";
$password = "Mkfn3Pq4Ii";
$database = "sql4459991";
// Create connection
$conn = new mysqli($servername, $username, $password,$database);

// Check connection
if ($conn->connect_error) {
    echo "faild";
//   die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";


?>