<?php include("head.php");

include("conn.php");

/*User-taulusta haetaan spostin ja salasanan mukainen käyttäjätunnus (userID) . 
Tarvitaan kun viedään ilmoittautumistiedot participation-tauluun -> yhdistää henkilön user-tauluun.*/
$email = $_POST['email'];
$psword = $_POST['password'];

$sql = "SELECT UserID FROM user WHERE Email = '$email' AND Passwrd = '$psword'";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row["UserID"];
    }
} else {
    echo "0 results";
}
mysqli_close($conn);
?>

    <body>

<nav class="navbar navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand">TestTriClub</a>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navi5">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

        </div>

        <div id="navi5" class="collapse navbar-collapse">

            <ul class="nav navbar-nav">
                <li><a href="index.php"><span class="glyphicon glyphicon-home"></span></a></li>

            </ul>

        </div>
    </div>

</nav>

<div class="container">

    <div class="row">
        <div class="col-sm-1">
        </div>

        <div class="col-sm-10">
            <h3 class="turkoosi">Ilmoittautuminen vaihe 2: ILMOITTAUDU KISAAN</h3>

        </div>

        <div class="col-sm-1">
        </div>

    </div>

    <div class="row">
        <div class="col-sm-3">
        </div>

        <div class="col-sm-6">
<!--Henkiölö valitsee mihin tapahtumaan ja mille matkalle haluaa ilmoittautua.-->
            <form name="signin2" action="signIn.php" method="post">
                <div class="form-group">
                    <br>
                    <input type="text" class="form-control" style="display:none" name="userid" value=<?php echo $id ?>>
                </div>
                <br>
                <div class="radio-group">
                    <label for="valitseTapahtuma" name="eventlist" id="tapahtuma">Ilmoittaudun tapahtumaan</label>
                    <br>
                    <label class="radio-inline"><input type="radio" name="event" value="R1" disabled>Helsinki
                        TestTri 15.6.2019</label><br>
                    <label class="radio-inline"><input type="radio" name="event" value="R2" disabled>Turku TestTri
                        30.6.2019</label><br>
                    <label class="radio-inline"><input type="radio" name="event" value="R3">Lahti TestTri
                        5.7.2019</label><br>
                    <label class="radio-inline"><input type="radio" name="event" value="R4">Kuopio TestTri
                        17.7.2019</label><br>
                    <label class="radio-inline"><input type="radio" name="event" value="R5">Jyväskylä TestTri
                        29.7.2019</label><br>
                    <label class="radio-inline"><input type="radio" name="event" value="R6">Oulu TestTri
                        13.8.2019</label><br>
                </div>
                <br>
                <div class="radio-group">
                    <label for="valitseMatka" name="distancelist" id="matka">Osallistun matkalle</label>
                    <br>
                    <label class="radio-inline"><input type="radio" value="01" name="distance">Pikasprint
                        (300m/10km/3km)</label><br>
                    <label class="radio-inline"><input type="radio" value="02" name="distance">Sprint
                        (750m/20km/5km)</label><br>
                    <label class="radio-inline"><input type="radio" value="03" name="distance">Perusmatka
                        (1500m/40km/10km)</label><br>
                    <label class="radio-inline"><input type="radio" value="04" name="distance">Puolimatka
                        (1900m/90km/21km)</label><br>
                </div>
                <br>
                <button class="btn btn-primary" type="submit" value="" onclick="">Ilmoittaudu kisaan</button>
            </form>

        </div>
        <div class="col-sm-3">
        </div>
    </div>

    <div class="row">
        <div class="col-sm-2">
        </div>

        <div class="col-sm-9">
        </div>

        <div class="col-sm-1">
        </div>
    </div>


</div>

</div>
</div>

<?php include("footer.php"); ?>