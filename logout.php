<?php include("head.php"); 

    session_start();
    if(isset($_SESSION['user'])) {
        session_unset();
        session_destroy(); 
    }

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
                    <li><a href="kalenteri.php"><b>Kisakalenteri ja ilmoittautuminen</b></a></li>
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
                <h3 class="oranssi">Uloskirjautuminen</h3>
            </div>
            <div class="col-sm-1">
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
            <?php 
           
                echo '<h4>You have been successfully logout</h4>';

                ?>

            </div>
            
        </div>
    </div>

<?php include("footer.php"); ?>