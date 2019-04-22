<?php include("head.php"); 


if (isset($_POST['email']) and isset($_POST['password'])) {
	include("conn.php");
	$user=$_POST['email'];
    $password=filter_var($_POST['password'], FILTER_SANITIZE_SPECIAL_CHARS);
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
 
	$ret=mysqli_query($conn, "SELECT Email,Passwrd FROM user WHERE Email='$user' AND Passwrd='$password'") or die("Could not execute query: " .mysqli_error($conn));
    $row = mysqli_fetch_assoc($ret);
    $email = $row['Email'];
    $hash = $row['Passwrd'];    

	if(!$row) {
        header("Location: muutokset.php");
        echo "Jokin meni vikaan. Yritä uudestaan.";
	}
	else {
        if (password_verify($hashed_password,$hash)) {
	    session_start();
	    $_SESSION['user']=$user;
		header('location: muutokset_second.php');
        } else {
            echo "Salasana on väärä.";
        }
    }
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
                    <li class="active"><a href="muutokset.php"><b>Muuta yhteystietojasi</b></a></li>
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
                <h3 class="oranssi">Muuta yhteystietojasi</h3>

            </div>
            <div class="col-sm-1">
            </div>

        </div>

        <div class="row">
            <div class="col-sm-1">
            </div>

            <div class="col-sm-5">

                <form name="checking" action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
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