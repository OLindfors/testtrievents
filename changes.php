<?php include ("conn.php");

$userid = $_POST['userid'];
$fname = $_POST['fname'];
//$lastname = $_POST['lname'];
$email = $_POST['email'];
//$phone = $_POST['phone'];

//include ("changes_conditions.php");

$sql = "UPDATE user
SET Email = '$email'
WHERE userID = '$userid' AND Fname = '$fname'";


if ($conn->query($sql) == TRUE) {

    $message = "wrong answer";
    echo "<script type='text/javascript'>alert('$message');</script>";
    //echo "Tietojen muutos onnistui.<br><br>";
    //echo "<br><a href='index.php'>Paluu etusivulle</a>";

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>