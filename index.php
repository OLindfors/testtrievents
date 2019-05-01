<?php include("head.php"); ?>

    <body>

    <nav class="navbar navbar-inverse">
        <div id="testi" class="container">
            <div class="navbar-header">
                <a class="navbar-brand">TestTriClub</a>

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigaatio">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

            </div>

            <div id="navigaatio" class="collapse navbar-collapse">

                <ul class="nav navbar-nav">
                    <li class="active"><a href="index.php"><span class="glyphicon glyphicon-home"></span></a></li>
                    <li><a href="kalenteri.php"><b>Kisakalenteri ja ilmoittautuminen</b></a></li>
                    <li><a href="muutokset.php"><b>Muuta yhteystietojasi</b></a></li>
                    <li><a href="tulokset.php"><b>Tulokset</b></a></li>

                </ul>
                
            </div>
        </div>
    </nav>


    <div class="container">

        <div class="row">
            <div class="col-sm-12" style="text-align:center">
                <h3><b>Tervetuloa mukaan TestTriClubin kisoihin!</b></h3>
                <p>TestTriClub tarjoaa triathlon kisoja eri paikkakunnilla läpi kesän.
                    Matkoina jokaisessa kisassa on tarjolla aina pikasprint, sprint, perus- ja puolimatka. </p>
                <br>
            </div>
        </div>

        <div class="row">
            <div id="uinti" class="col-sm-4">
                <img src="swim.png" alt="Swim" class="img-thumbnail">
                <br>
                <!--pikalinkki ilmoittautumislomakkeelle-->
                <a href="Ilmoittautuminen.php">
                    <button class="btn btn-default"><b>Ilmoittaudu kisoihin</b></button>
                </a>
                <br>
                <br>
            </div>

            <div id="fillari" class="col-sm-4">
                <img src="bike.png" alt="Bike" class="img-thumbnail">
                <br>
                 <!--pikalinkki yhteystietojen muuttamiseen-->
                <a href="muutokset.php">
                    <button class="btn btn-default"><b>Muuta yhteystietojasi</b></button>
                </a>
                <br>
                <br>
            </div>

            <div id="juoksu" class="col-sm-4">
                <img src="run.png" alt="Run" class="img-thumbnail">
                <br>
                 <!--pikalinkki tulokset sivulle-->
                <a href="tulokset.php">
                    <button class="btn btn-default" id="tulos"><b>Katso tulokset</b></button>
                </a>
                <br>
                <br>
            </div>

        </div>


        <div class="row">
            <div class="col-sm-12">

                <div class="jumbotron">

                    <p>TestTrin kisoihin ovat tervetulleita kaikki niin ensikertalaiset kuin konkaritkin: Rohkeasti
                        mukaan!</p>
                    <p>MATKAVAIHTOEHDOT JOKA KISASSA</p>
                    <p>Pikasprint (300m/10km/3km) - Sprint (750m/20km/5km) -</p>
                    <p>Perusmatka (1500m/40km/10km) - Puolimatka (1900m/90km/21km)</p>
                </div>

            </div>
        </div>


    </div>
<?php include("footer.php"); ?>