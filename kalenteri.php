<?php include("head.php"); ?>

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
                    <li class="active"><a href="kalenteri.php"><b>Kisakalenteri ja ilmoittautuminen</b></a></li>
                    <li><a href="muutokset.php"><b>Muuta yhteystietojasi</b></a></li>
                    <li><a href="tulokset.php"><b>Tulokset</b></a></li>


                </ul>
            </div>
        </div>

    </nav>


    <div class="container">

        <div class="row">
            <div class="col-sm-12">
                <h3 class="turkoosi">Kisakalenteri</h3>

            </div>
        </div>

        <div class="row">
            <div class="col-sm-4" style="text-align:center">
                <br>
                <br>
                <img src="1helsinki.jpg" alt="kisa" class="img-thumbnail">
                <br>
                <a href="Ilmoittautuminen.php">
                    <button class="btn btn-md" disabled>Ilmoittaudu Helsinkiin!</button>
                </a>

            </div>


            <div class="col-sm-4" style="text-align:center">
                <br>
                <br>
                <img src="2turku.jpg" alt="kisa" class="img-thumbnail">
                <br>
                <a href="Ilmoittautuminen.php">
                    <button class="btn btn-md" disabled>Ilmoittaudu Turkuun!</button>
                </a>
                <br>
                <br>
            </div>
            <div class="col-sm-4" style="text-align:center">
                <br>
                <br>
                <img src="3lahti.jpg" alt="kisa" class="img-thumbnail">
                <br>
                <a href="Ilmoittautuminen.php">
                    <button class="btn btn-md" onclick="oletus3()">Ilmoittaudu Lahteen!</button>
                </a>
                <br>
                <br>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-4" style="text-align:center">
                <br>
                <br>
                <img src="4kuopio.jpg" alt="kisa" class="img-thumbnail">
                <br>
                <a href="Ilmoittautuminen.php">
                    <button class="btn btn-md">Ilmoittaudu Kuopioon!</button>
                </a>

                <br>
                <br>
            </div>


            <div class="col-sm-4" style="text-align:center">
                <br>
                <br>
                <img src="5jyvaskyla.jpg" alt="kisa" class="img-thumbnail">
                <br>
                <a href="Ilmoittautuminen.php">
                    <button class="btn btn-md">Ilmoittaudu Jyväskylään!</button>
                </a>
                <br>
                <br>
            </div>

            <div class="col-sm-4" style="text-align:center">
                <br>
                <br>
                <img src="6oulu.jpg" alt="kisa" class="img-thumbnail">
                <br>
                <a href="Ilmoittautuminen.php">
                    <button class="btn btn-md">Ilmoittaudu Ouluun!</button>
                </a>
                <br>
                <br>
            </div>
        </div>

    </div>

<?php include("footer.php"); ?>