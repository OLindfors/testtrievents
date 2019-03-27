<?php
/*
'if (!empty($_POST['userid']) && !empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['email']) && !empty($_POST['phone'])) {
    $sql = "UPDATE user
    SET Lname = '$lastname',Email = '$email',Phone = '$phone'
    WHERE userID = '$userid' AND Fname = '$fname'";*/
}

/*if (!empty($_POST['userid']) && !empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['email']) && empty($_POST['phone'])) {
    $sql = "UPDATE user (Lname,Email) 
    SET ('$lastname','$email')
    WHERE userID = '$userid' AND Fname = '$fname'";
}

if (!empty($_POST['userid']) && !empty($_POST['fname']) && !empty($_POST['lname']) && empty($_POST['email']) && !empty($_POST['phone'])) {
    $sql = "UPDATE user (Lname,Phone) 
    SET ('$lastname','$phone')
    WHERE userID = '$userid' AND Fname = '$fname'";
}

if (!empty($_POST['userid']) && !empty($_POST['fname']) && empty($_POST['lname']) && !empty($_POST['email']) && !empty($_POST['phone'])) {
    $sql = "UPDATE user (Email,Phone) 
    SET ('$email','$phone')
    WHERE userID = '$userid' AND Fname = '$fname'";
}

if (!empty($_POST['userid']) && !empty($_POST['fname']) && !empty($_POST['lname']) && empty($_POST['email']) && empty($_POST['phone'])) {
    $sql = "UPDATE user (Lname) 
    SET ('$lastname')
    WHERE userID = '$userid' AND Fname = '$fname'";
}

if (!empty($_POST['userid']) && !empty($_POST['fname']) && empty($_POST['lname']) && empty($_POST['email']) && !empty($_POST['phone'])) {
    $sql = "UPDATE user (Phone) 
    SET ('$phone')
    WHERE userID = '$userid' AND Fname = '$fname'";
}*/

if (!empty($_POST['userid']) && !empty($_POST['fname']) && empty($_POST['lname']) && !empty($_POST['email']) && empty($_POST['phone'])) {
    $sql = "UPDATE user (Email) 
    SET ('$email')
    WHERE userID = '$userid' AND Fname = '$fname'";
}
?>