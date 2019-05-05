<?php

$servername = "127.0.0.1:51099";
$username = "azure";
$password = "6#vWHD_$";
$dbname = "localdb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>