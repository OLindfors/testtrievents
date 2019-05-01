<?php include("head.php"); 

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
                <h3 class="turkoosi">Ilmoittautuminen vaihe 1. OMAT TIEDOT</h3>
                <p style="text-align:center">Anna ensin yhteystietosi ja keksi itsellesi salasana. Kaikki kentät ovat
                    pakollisia.
                    <br>Tallenna tiedot, niin pääset jatkamaan ilmoittautumiseen.</p>

            </div>

            <div class="col-sm-1">
            </div>

        </div>

        <div class="row">
            <div class="col-sm-2">
            </div>

            <div class="col-sm-8">

<!--Käyttäjä syöttää etunimi, sukunimi, s-posti kahteen kertaan, puhelin ja keksii salasanan (syöttää kaksi kertaa)-->
                <form class="form-horizontal" name="signin1" action="Ilmoittautuminen_second.php" method="post">
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="fname">Etunimi:</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="fname" placeholder="Etunimi" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="lname">Sukunimi:</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="lname" placeholder="Sukunimi" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="email">Sähköposti:</label>
                        <div class="col-sm-7">
                            <input type="email" class="form-control" name="email" placeholder="Sähköposti" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="emailx">Toista sähköposti:</label>
                        <div class="col-sm-7">
                            <input type="email" class="form-control" name="emailx" placeholder="Toista sähköposti"
                                   required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="phone">Puhelinnumero:</label>
                        <div class="col-sm-7">
                            <input type="tel" minlength="10" class="form-control" name="phone" placeholder="Puhelinnumero" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-3" for="password">Salasana:</label>
                        <div class="col-sm-7">
                            <input type="password" minlength="8" class="form-control" name="password"
                                   placeholder="Keksi itsellesi salasana (min. pituus 8 merkkiä)" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-3" for="password2">Toista salasana:</label>
                        <div class="col-sm-7">
                            <input type="password" minlength="8" class="form-control" name="password2" placeholder="Toista salasana"
                                   required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-7">
                            <button class="btn btn-primary" type="submit" onclick="return validateForm()" name="register">Tallenna tiedot
                            </button>
                        </div>
                </form>

            </div>
            <div class="col-sm-2">

            </div>
        </div>

        <br>

    </div>

    </div>
    </div>

<?php include("footer.php"); ?>