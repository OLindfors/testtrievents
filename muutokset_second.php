<?php include("head.php");

    include("conn.php");

    session_start();

    //Henkilön s-postin perusteella haetaan tietokannasta henkilön muut tiedot user-taulusta (userID, etunimi, sukunimi ja puhelinnro).
    
    $sql = "SELECT UserID,Fname,Lname,Phone FROM user WHERE Email = '" . $_SESSION['user'] . "' ";

    $result = $conn->query($sql); 

    if ($result->num_rows > 0) {
    
        while ($row = $result->fetch_array()) {

            $userid = $row["UserID"];
            $fname = $row["Fname"];
            $lname = $row["Lname"];
            $phone = $row["Phone"];

        }
    }

    $conn->close();

?>

<body>

<nav class="navbar navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand">TestTriClub</a>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navi7">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

        </div>
        <div id="navi7" class="collapse navbar-collapse">
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
            <h3 class="oranssi">Päivitä yhteystietosi</h3>
            <br>
        </div>
        <div class="col-sm-1">
        </div>

    </div>

    <div class="row">
        <div class="col-sm-1">
        </div>

        <div class="col-sm-5">
            <h4>Tee tarvittavat muutokset ja tallenna.</h4> 

            <form name="changes" action="changes.php" method="post">
                <div class="form-group">
                    <!--Tietokannasta haetut tiedot näytetään henkilölle lomakekentissä, paitsi userID on piilotettuna-->
                    <label for="userid" style="display:none">ID</label>
                    <input type="text" class="form-control" style="display:none" name="userid" value=<?php echo $userid ?>>
                    <label for="email">Sähköposti</label>
                    <input type="email" class="form-control" name="email" value=<?php echo $_SESSION['user'] ?>>
                    <label for="fname">Etunimi</label>
                    <input type="text" class="form-control" name="fname" value=<?php echo $fname ?>>
                    <label for="lname">Sukunimi</label>
                    <input type="text" class="form-control" name="lname" value=<?php echo $lname ?>>
                    <label for="phone">Puhelinnumero</label>
                    <input type="tel" class="form-control" name="phone" value=<?php echo $phone ?>>

                    <br>

                    <button class="btn btn-primary" type="submit" value="muutokset">Tallenna muutokset</button>
        
                </div>
            </form>

            <!--Henkilö voi kirjautua ulos tekemättä muutoksia-->
            <form name="peruuta" action="logout.php">
                <div class="form-group">
                <button class="btn btn-warning" type="submit" value="muutokset">Poistu tallentamatta</button>
                </div>
            </form>

        </div>
        <div class="col-sm-5">
            <br>
            <img src="peguera_pieni.jpg" alt="Maali" class="img-thumbnail" id="bike">

            <br>

            <br>
        </div>

        <div class="col-sm-1">
        </div>

    </div>
</div>

<?php include("footer.php"); ?>