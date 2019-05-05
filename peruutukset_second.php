<?php include("head.php");

    include("conn.php");

    session_start();
    
    $userid = $_POST['userid'];

    if (isset($_POST['userid']) && !empty($_POST['userid'])) {

        $sql = "SELECT user.UserID,user.Fname,user.Lname,participation.RaceID FROM user INNER JOIN participation ON user.UserID = participation.UserID WHERE user.UserID = '$userid' ";

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
  
    </div>
</nav>

<div class="container">

    <div class="row">
        <div class="col-sm-1">
        </div>

        <div class="col-sm-10">
            <h3 class="oranssi">Henkilön tiedot tietokannassa</h3>
            <br>
        </div>
        <div class="col-sm-1">
        </div>

    </div>

    <div class="row">
        <div class="col-sm-1">
        </div>

        <div class="col-sm-10">
           
        <!--tässä näytetään tietokantahaun tulokset-->
<?php
        
            if ($result->num_rows > 0) {
    
            while ($row = $result->fetch_array()) {

            $userid = $row['UserID'];
            $fname =  $row['Fname'];
            $lname = $row['Lname'];
            $raceid = $row['RaceID'];
        
            echo $userid . "-". $fname . "-" . $lname . "-" . $raceid . "<br>";

            } 
            
        } else {
            echo "Ei henkilöä tällä ID:llä tietokannassa.";
        }

$conn->close();

?>

        </div>
        <div class="col-sm-1">
        </div>

    </div>

    <div class="row">
        <div class="col-sm-1">
        </div>

        <div class="col-sm-5">

            <form name="deleting" action="deletes.php" method="post">
                <div class="form-group">

                    <label for="userid">User ID</label>
                    <input type="text" class="form-control" name="userid" value=<?php echo $_POST['userid'] ?> readonly>

                    <label for="raceid">Race ID</label>
                    <input type="text" class="form-control" name="raceid" value="">
                  
                    <br>

                    <button class="btn btn-primary" type="submit" value="muutokset">Poista osallistuminen kisaan</button>
        
                </div>
            </form>

            <form name="peruuta" action="logout.php">
                <div class="form-group">
                <button class="btn btn-warning" type="submit" value="muutokset">Kirjaudu ulos poistamatta</button>
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