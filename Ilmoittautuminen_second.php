<?php include("head.php");  

include("conn.php");
               
    $firstname = filter_var($_POST['fname'], FILTER_SANITIZE_STRING);
    $lastname = filter_var($_POST['lname'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $emailCheck = filter_var($_POST['emailx'], FILTER_SANITIZE_EMAIL);
    $phone = filter_var($_POST['phone'], FILTER_SANITIZE_NUMBER_INT);
    $password = filter_var($_POST['password'], FILTER_SANITIZE_SPECIAL_CHARS);
    $passwordCheck = filter_var($_POST['password2'], FILTER_SANITIZE_SPECIAL_CHARS);
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            /*Edellisellä sivulla annetut tiedot tallennetaan tietokantaan user-tauluun: etunimi, sukunimi, s-posti, puhelin ja salasana*/
    $sql = "INSERT INTO user (Fname,Lname,Email,Phone,Passwrd) VALUES ('$firstname','$lastname','$email','$phone','$hashed_password')";

        if ($conn->query($sql) == FALSE) {

            echo "0 results";
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
                <h3 class="turkoosi">Tallenetut tiedot</h3>

            </div>

            <div class="col-sm-1">
            </div>

        </div>
    </div>

<div class="row">
    <div class="col-sm-3">
    </div>

    <div class="col-sm-4">

    <!--Tallennetut tiedot näytetään käyttäjälle (ei voi enää muuttaa tässä) ja hän voi jatkaa varsinaiseen ilmoittautumiseen-->
        <form name="signin1" action="Ilmoittautuminen_third.php" method="post">
            <div class="form-group">
                <input type="text" class="form-control" name="fname" value=<?php echo $firstname ?> readonly>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="lname" value=<?php echo $lastname ?> readonly>
            </div>
            <div class="form-group">
                <input type="email" class="form-control" name="email" value=<?php echo $email ?> readonly>
            </div>
            <div class="form-group">
                <input type="tel" class="form-control" name="phone" value=<?php echo $phone ?> readonly>
            </div>
            <div class="form-group" style="display:none">
                <input type="password" class="form-control" name="password" value=<?php echo $hashed_password ?>>
            </div>
            <button type="submit" class="btn btn-primary">Jatka ilmoittautumiseen
            </button>
        </form>
    </div>

    <div class="col-sm-5">
    </div>
</div>

<?php include("footer.php"); ?>