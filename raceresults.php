<?php include ("conn.php");

$event = $_POST['event'];
$distance = $_POST['distance'];

if (isset($_POST['event']) && isset($_POST['distance'])) {

$sql = "SELECT race.Eventname,race.Dname,user.Lname,user.Fname,participation.Result 
FROM race INNER JOIN participation ON race.RaceID = participation.RaceID 
INNER JOIN user ON participation.UserID = user.UserID WHERE race.Eventname = '$event' AND race.Dname = '$distance'
ORDER BY participation.Result";

$result = $conn->query($sql);

}

if ($result->num_rows > 0) {
    
    echo "<table border='1'>";
    echo "<tr><th>Tapahtuma</th><th>Matka</th><th>Nimi</th><th>Tulos</th></tr>";

    // output data of each row
    while($row = $result->fetch_assoc()) {
    
        echo "<tr><td>".$row['Eventname']."</td><td>".$row['Dname']."</td><td>".$row['Lname']." ".$row['Fname']."</td><td>".$row['Result']."</td></tr><br>";
    }
    echo "</table>";
    echo "<br><a href='tulokset.php'>Takaisin tulokset-sivulle</a>";

} else {
    echo "0 results";
}
$conn->close();  

?>