<?php include("head.php");

include("conn.php");

$userid = $_POST['userid'];
$event = $_POST['event'];
$distance = $_POST['distance'];

//RaceID "kootaan" yhdistämällä Event-koodi ja Distance-koodi. 
$raceid = $event . $distance;

//Tallennetaan participation-tauluun UserID sekä RaceID.
$sql = "INSERT INTO participation (UserID, RaceID) VALUES ('$userid', '$raceid')";

?>

    <body>

<nav class="navbar navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.php">TestTriClub</a>
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
<div class="row">
    <div class="col-sm-3">
    </div>

    <div class="col-sm-4">

        <?php

        

        if ($conn->query($sql) == TRUE) {
            echo "Tervetuloa mukaan!";
        } else {
            echo "Tallennus ei onnistunut.";  
        }

        mysqli_close($conn);
        ?>
    </div>
    <div class="col-sm-5">
    </div>
</div>



<div class="row">
    <div class="col-sm-3">
    </div>

    <div class="col-sm-6">

        <form name="signin2" action="logout.php">
            <div class="form-group">
                <br>
                <button class="btn btn-primary" type="submit" value="">Päätä ilmoittautuminen</button>
            </div>
    </form>
    
    </div>

    <div class="col-sm-3">
    </div>

<?php


include("footer.php");
?>