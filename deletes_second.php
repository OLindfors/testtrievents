<?php include("head.php"); 

      include("conn.php");

      session_start();
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
                    <!--li><a href="kalenteri.php"><b>Kisakalenteri ja ilmoittautuminen</b></a></li>
                    <li><a href="muutokset.php"><b>Muuta yhteystietojasi</b></a></li>
                    <li><a href="tulokset.php"><b>Tulokset</b></a></li-->

                </ul>
            </div>
        </div>

    </nav>

    <div class="container">

        <div class="row">
            <div class="col-sm-1">
            </div>
            <div class="col-sm-10">
                <h3 class="oranssi">Peruutukset</h3>
            </div>
            <div class="col-sm-1">
            </div>
        </div>

        <div class="row">
            <div class="col-sm-1">
            </div>

            <div class="col-sm-10">

                <?php 

                    $userid = $_POST['userid'];

                    $sql = "DELETE FROM user WHERE UserID = '$userid'";

                    if ($conn->query($sql) == TRUE) {
                        echo "<h3>Henkilön tiedot poistettu</h3>";
                    } else {
                        echo "Error deleting record: ";
                    }
                    
                    $conn->close();
                ?>

                </form>

                <form name="logout" action="logout.php">
                    <div class="form-group">
                    <button class="btn btn-warning" type="submit" value="">Kirjaudu ulos</button>
                    </div>
                </form>

            </div>

            <div class="col-sm-1">
            </div>
            
        </div>
    </div>

<?php include("footer.php"); ?>