<?php include("head.php"); ?>

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

                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php"><span class="glyphicon glyphicon-log-ou"></span> Logout</a></li>
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

                <form name="checking" action="peruutukset.php" method="post">
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