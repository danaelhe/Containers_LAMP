<?php
$host = 'db';
$user = 'devuser';
$password = 'devpass';
$db = 'test_db';

// Create connection
$conn = new mysqli($host,$user,$password,$db);

// Check connection
if ($conn->connect_error) {
    echo 'Connection failed' . $conn->connect_error;
}
echo "Connected successfully";
?>
