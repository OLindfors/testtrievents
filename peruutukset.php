<?php include("head.php");

    include("conn.php");

    session_start();

    $conn->close();

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
            <h3 class="oranssi">Osallistumisen peruminen</h3>
            <br>
        </div>
        <div class="col-sm-1">
        </div>

    </div>

    <div class="row">
        <div class="col-sm-1">
        </div>

        <div class="col-sm-5">
           <p>Tarkista henkilön ilmoittautumiset</P>

            <form name="changes" action="peruutukset_second.php" method="post">
                <div class="form-group">

                    <label for="userid">Henkilön UserID</label>
                    <input type="text" class="form-control" name="userid" value="">

                    <br>

                    <button class="btn btn-primary" type="submit" value="muutokset">Näytä henkilön tiedot</button>
        
                </div>
            </form>

            <form name="peruuta" action="logout.php">
                <div class="form-group">
                <button class="btn btn-warning" type="submit" value="muutokset">Keskeytys: Kirjaudu ulos</button>
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