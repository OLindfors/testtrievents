<?php include ("conn.php");

$event = $_POST['event'];
$distance = $_POST['distance']

if isset ($_POST['event'] && $_POST['distance'])

$raceid = $_POST['raceName'];

$sql = "SELECT race.Dname,user.Fname,user.Lname,participation.Result 
FROM race INNER JOIN participation ON race.RaceID = participation.RaceID 
INNER JOIN user ON participation.UserID = user.UserID WHERE race.Dname = '$raceid'
ORDER BY participation.Result";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Matka: " . $row["Dname"]. " - Name: " . $row["Fname"]. " " . $row["Lname"]. " - Tulos: " .$row["Result"]."<br>";
    }

} else {
    echo "0 results";
}
$conn->close();  


?>