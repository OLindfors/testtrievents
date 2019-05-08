<?php include("head.php");

include ("conn.php");

//Edelliseltä sivulta otetaan vastaan userID, s-posti, etunimi, sukunimi ja puhelinnumero.

$userid = $_POST['userid'];
$email = $_POST['email'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$phone = $_POST['phone'];

//Päivitetään user taulussa sen rivin tiedot userid:n perusteella. 
$sql = "UPDATE user
SET Email = '$email',Fname = '$fname',Lname = '$lname',Phone = '$phone'
WHERE userID = '$userid'";

if ($conn->query($sql) == FALSE) {
    echo "Tietojen tallennus ei onnistunut.";
} 

$conn->close();

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
                <h3 class="oranssi">Alla näet päivitetyt tiedot</h3>
   

            </div>

            <div class="col-sm-1">
            </div>

        </div>
    </div>

<div class="row">
    <div class="col-sm-3">
    </div>

    <div class="col-sm-4">

    <!--Tallennetut tiedot näytetään käyttäjälle (ei voi enää muuttaa tässä)-->
        <form name="muutokset" action="" method="post">
            <div class="form-group">
                <input type="text" class="form-control" name="fname" value=<?php echo $fname ?> readonly>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="lname" value=<?php echo $lname ?> readonly>
            </div>
            <div class="form-group">
                <input type="email" class="form-control" name="email" value=<?php echo $email ?> readonly>
            </div>
            <div class="form-group">
                <input type="tel" class="form-control" name="phone" value=<?php echo $phone ?> readonly>
            </div>
    
        </form>
    </div>
    <div class="col-sm-5">
    </div>
    </div>

    <div class="row">
    <div class="col-sm-3">
    </div>

    <div class="col-sm-6">
        <!--Uloskirjautuminen-->
        <form name="poistumuutoksista" action="logout.php">
            <div class="form-group">
                <br>
                <button class="btn btn-primary" type="submit" value="">Kirjaudu ulos</button>
            </div>
    </form>
    
    </div>

    <div class="col-sm-3">
    </div>
    
    <?php 
    
    session_unset();

    session_destroy();
    

    include("footer.php"); ?>