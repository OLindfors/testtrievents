<?php include("head.php");

include("conn.php");

$event = $_POST['event'];
$distance = $_POST['distance'];

if (isset($_POST['event']) && isset($_POST['distance'])) {

    $sql = "SELECT race.Eventname,race.Dname,user.Lname,user.Fname,participation.Result 
FROM race INNER JOIN participation ON race.RaceID = participation.RaceID 
INNER JOIN user ON participation.UserID = user.UserID WHERE race.Eventname = '$event' AND race.Dname = '$distance'
ORDER BY participation.Result";

    $result = $conn->query($sql);

}

?>

    <body>

<nav class="navbar navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.php">TestTriClub</a>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navi7">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

        </div>

        <div id="navi7" class="collapse navbar-collapse">

            <ul class="nav navbar-nav">
                <li><a href="index.php"><span class="glyphicon glyphicon-home"></span></a></li>
                <li><a href="kalenteri.php"><b>Kisakalenteri ja ilmoittautuminen</b></a></li>
                <li><a href="muutokset.php"><b>Muuta yhteystietojasi</b></a></li>
                <li class="active"><a href="tulokset.php"><b>Tulokset</b></a></li>
            </ul>

        </div>
    </div>

</nav>

<div class="row">
            <div class="col-sm-1">
            </div>
            <div class="col-sm-10">
                <h3 class="lila">TULOKSET</h3>
            </div>
            <div class="col-sm-1">
            </div>
        </div>

<div class="row">
    <div class="col-sm-2">
    </div>
    <div class="col-sm-8">
        <?php
        if ($result->num_rows > 0) {

            echo "<table border='1'>";
            echo "<tr><th>Tapahtuma</th><th>Matka</th><th>Nimi</th><th>Tulos</th></tr>";

            while ($row = $result->fetch_assoc()) {

                echo "<tr><td>" . $row['Eventname'] . "</td><td>" . $row['Dname'] . "</td><td>" . $row['Lname'] . " " . $row['Fname'] . "</td><td>" . $row['Result'] . "</td></tr><br>";
            }
            echo "</table>";
            echo "<br><a href='tulokset.php'>Takaisin tulokset-sivulle</a>";

        } else {
            echo "0 results";
        }
       
        ?>

    </div>
    <div class="col-sm-2">
    </div>
</div>

<?php
$conn->close();

include("footer.php");
?>