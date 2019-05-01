<?php include("head.php"); 

include("conn.php");

/*Tarkistetaan annettu s-posti ja salasana -> vastaavatko userID 1:n tietoja. 
*/
if (isset($_POST['email']) and isset($_POST['password'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];
	
    $sql = "SELECT Passwrd FROM user WHERE userID = '1'";

    $result = $conn->query($sql); 

   if ($result->num_rows > 0) {

        while ($row = $result->fetch_assoc()) {

        $hashed_password = $row['Passwrd']; 
        }

        if (password_verify ($password , $hashed_password) == TRUE) {
            session_start();
            $_SESSION['user']=$email;
            header('Location: peruutukset.php');

        } else {

            echo "Salasana oli väärä";

        }
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
                    <li><a href="Ilmoittautuminen.php"><b>Kisakalenteri ja ilmoittautuminen</b></a></li>
                    <li><a href="muutokset.php"><b>Muuta yhteystietojasi</b></a></li>
                    <li><a href="tulokset.php"><b>Tulokset</b></a></li>
                </ul>
                
            </div>
        </div>
    </nav>

    <div class="container">

        <div class="row">
            <div class="col-sm-1">
            </div>

            <div class="col-sm-10">
                <h3 class="oranssi">Admin login page</h3>

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