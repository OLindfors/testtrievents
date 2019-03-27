<?php include ("conn.php");


$firstname = $_POST['fname'];
$lastname = $_POST['lname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];

$sql = "INSERT INTO user (Fname,Lname,Email,Phone,Password) VALUES ('$firstname','$lastname','$email','$phone','$password')";

$result = $conn->query($sql);

if ($conn->query($sql) == TRUE) {
    echo "Tietojen tallennus onnistui.<br><br>";
?>