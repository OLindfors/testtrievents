<?php  include ("conn.php");

$email = $_POST['email'];

$sql = "SELECT* FROM user WHERE Email = '$email'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Userid: " . $row["UserID"]. " - Name: " . $row["Fname"]. " " . $row["Lname"]. " - sposti: " .$row["Email"]. " -puhelin:  " .$row["Phone"]."<br>";
    }
} else {
    echo "0 results";
}
$conn->close();   

?>