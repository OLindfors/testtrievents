<?php include("head.php"); 

    include("conn.php");

    /*Henkilön sisäänkirjautuesssa tarkistetaan, että kyseinen s-posti ja salasana löytyvät "parina" tietokannasta user-taulusta. 
    Sähköpostin perusteella haetaan hashattu muoto salasanasta ja verrataan sitä annettuun salasanaan.
    */
if (!empty($_POST['email']) && !empty($_POST['password'])) {
	
    $email=$_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT Passwrd FROM user WHERE Email = '$email'";

    $result = $conn->query($sql); 

   if ($result->num_rows > 0) {

        while ($row = $result->fetch_assoc()) {

        $hashed_password= $row['Passwrd']; 
        }
    }
        /*Aloitetaan sessio, jos s-posti ja salasana ovat ok. Ja siirytään seuraavalle "muutokset_second.php" sivulle.
        Henkilön s-posti sijoitetaan session muuttujaan.    
        */

        if (password_verify ($password , $hashed_password) == TRUE) {
            session_start();
            $_SESSION['user']=$email;
            header('Location: muutokset_second.php');

        } else {

            $ilmoitus = 'Tarkista salasana';

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
                    <li><a href="kalenteri.php"><b>Kisakalenteri ja ilmoittautuminen</b></a></li>
                    <li class="active"><a href="muutokset.php"><b>Muuta yhteystietojasi</b></a></li>
                    <li><a href="tulokset.php"><b>Tulokset</b></a></li>

                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <!--Admin kirjautuminen löytyy vain tämän sivun headerista oikealta-->
                    <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Admin login</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">

        <div class="row">
            <div class="col-sm-1">
            </div>

            <div class="col-sm-10">
                <h3 class="oranssi">Muuta yhteystietojasi</h3>

            </div>
            <div class="col-sm-1">
            </div>

        </div>

        <div class="row">
            <div class="col-sm-1">
            </div>

            <div class="col-sm-5">

                <form name="checking" action="" method="post">
                    <div class="form-group">
                        <!--Henkilö syöttää sähköpostin ja salasanan-> kirjautuu sisään-->
                        <label for="email">Sähköposti</label>
                        <input type="email" class="form-control" name="email" placeholder="Sähköposti">
                        <label for="password">Salasana</label>
                        <input type="password" class="form-control" name="password" placeholder="Salasana">

                        <br>

                        <button class="btn btn-primary" type="submit">Kirjaudu sisään</button>

                    </div>
                </form>

            </div>

            <div class="col-sm-5">
                <br>
                <img src="peguera_pieni.jpg" alt="Maali" class="img-thumbnail">

            </div>

            <div class="col-sm-1">
            </div>

        </div>
    </div>
   
<?php include("footer.php"); ?>