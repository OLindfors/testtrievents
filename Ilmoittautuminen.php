
<?php include ("head.php"); ?>


<body>

<nav class="navbar navbar-inverse">
 <div class="container">
  <div class="navbar-header">
   <a class="navbar-brand" href="index.php">TestTriClub</a>
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navi5">
   	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
</button>

</div>

<div id="navi5" class="collapse navbar-collapse">

<ul class="nav navbar-nav">
<!--li><a href="index.php">Etusivu</a></li>
<li class="active"><a href="bike.php">Kisakalenteri ja ilmoittautuminen</a></li-->
<li><a href="kalenteri.php">Takaisin kalenteriin</a></li>
</ul>

</div>
</div>

</nav>

<div class="container">

<div class="row">
<div class="col-sm-1">
</div>

<div class="col-sm-10">
<h3 class="turkoosi">Ilmoittautumislomake: Täytä tietosi, valitse tapahtuma ja matka</h3>

</div>

<div class="col-sm-1">
</div>

</div>

<div class="row">
<div class="col-sm-3">
</div>

<div class="col-sm-6">


<form name="signin" action="signIn.php" method="post">
  <div class="form-group">
    <br>
    <input type="text" class="form-control" name="fname" placeholder="Etunimi">
    <br>
    <input type="text" class="form-control" name="lname" placeholder="Sukunimi">
    <br>
    <input type="email" class="form-control" name="email" placeholder="Sähköposti">
    <br>
    <input type="text" class="form-control" name="phone" placeholder="Puhelinnumero">
    <br>
    <input type="password" class="form-control" name="password" placeholder="Keksi itsellesi salasana (max 10 merkkiä)">
    <br>
    <input type="password" class="form-control" name="password" placeholder="Toista salasana">
    </div>
  <br>    
  <div class="form-group">
    <label for="valitseTapahtuma" name="event" id="eventlist">Ilmoittaudun tapahtumaan</label>
    <br>
    <label class="checkbox-inline"><input type="checkbox" value="">Helsinki TestTri 15.6.2019</label> <br>
    <label class="checkbox-inline"><input type="checkbox" value="">Turku TestTri 30.6.2019</label> <br>
    <label class="checkbox-inline"><input type="checkbox" value="">Lahti TestTri 5.7.2019</label><br>
    <label class="checkbox-inline"><input type="checkbox" value="">Kuopio TestTri 17.7.2019</label> <br>
    <label class="checkbox-inline"><input type="checkbox" value="">Jyväskylä TestTri 29.7.2019</label> <br>
    <label class="checkbox-inline"><input type="checkbox" value="">Oulu TestTri 13.8.2019</label>
  </div>
  <div class="form-group">
    <label id="matka" for="valitseMatka">Osallistun matkalle</label>
    <br>
    <label class="checkbox-inline"><input type="checkbox" value="" name="Pikasprint">Pikasprint (300 / 10 / 3)</label><br>
    <label class="checkbox-inline"><input type="checkbox" value="" name="Sprint">Sprint (750 / 20 / 5)</label><br>
    <label class="checkbox-inline"><input type="checkbox" value="" name="Perusmatka">Perusmatka (1500 / 40 /10)</label><br>
    <label class="checkbox-inline"><input type="checkbox" value="" name="Puolimatka">Puolimatka (1900 / 90 / 21)</label>
    </div>
  <button class="btn btn-primary" type="submit" value="Ilmoittaudu" onclick="myFunction()">Ilmoittaudu</button>
  <button type="button" class="btn btn-secondary" id="empty" onclick="emptyForm()" style="display:none">Tyhjennä lomake</button>
</form>

</div>
<div class="col-sm-3">

</div>
</div>

<br>

</div>

</div>
</div>

<?php include ("footer.php"); ?>