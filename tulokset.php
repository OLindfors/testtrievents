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
<li><a href="index.php"><b>Etusivu</b></a></li>
<li><a href="kalenteri.php"><b>Kisakalenteri ja ilmoittautuminen</b></a></li>
<li><a href="muutokset.php"><b>Muuta yhteystietojasi</b></a></li>
<li class="active"><a href="tuloslista.php"><b>Tulokset</b></a></li>

</ul>
</div>
</div>

</nav>

<div class="container">

<div class="row">
<div class="col-sm-1">
</div>
<div class="col-sm-10">
<h3 class="lila">TULOKSET</h3>
</div>
<div class="col-sm-1">
</div>
</div>

<div class="row">
<div class="col-sm-2">
</div>

<div class="col-sm-3">


<form name="results" action="raceresults.php" method="post">

  <div class="form-group">
    <label for="valitseTapahtuma">Valitse tapahtuma</label>
    <select class="form-control" name="event">
      <option name="Helsinki">Helsinki TestTri</option>
      <option name="Turku">Turku TestTri</option>
      <option name="Lahti" disabled>Lahti TestTri</option>
      <option name="Kuopio" disabled>Kuopio TestTri</option>
      <option name="Jyväskylä" disabled>Jyväskylä TestTri</option>
	    <option name="Oulu" disabled>Oulu TestTri</option>
    </select>
  </div>
  <div class="form-group">
    <label for="valitseMatka">Valitse matka</label>
    <select class="form-control" name="distance">
      <option name="Pikasprint">Pikasprint</option>
      <option name="Sprint">Sprint</option>
      <option name="Perusmatka">Perusmatka</option>
      <option name="Puolimatka">Puolimatka</option>
    </select>
  </div>
  <input class="btn btn-primary" type="submit" value="Näytä tulokset">

</form>

</div>

<div class="col-sm-1">

</div>

<div class="col-sm-4">
<br>
<img src="maali.jpg" alt="Maali" class="img-thumbnail" id="maali">

</div>

<div class="col-sm-2">
</div>
</div>
</div>

<?php include ("footer.php"); ?>