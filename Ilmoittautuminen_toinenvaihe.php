
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
    </div>
  <div class="form-group">
    <label for="valitseTapahtuma">Ilmoittaudun tapahtumaan</label>
    <select class="form-control" name="event" id="eventlist">
	    <option>Valitse tapahtuma</option>
      <option name="Helsinki" disabled>Helsinki 15.6.2019</option>
      <option name="Turku">Turku 30.6.2019</option>
      <option name="Lahti">Lahti 5.7.2019</option>
      <option name="Kuopio" disabled>Kuopio 17.7.2019</option>
      <option name="Jyväskylä" disabled>Jyväskylä 29.7.2019</option>
	    <option name="Oulu" disabled>Oulu 13.8.2019</option>
    </select>
  </div>
  <div class="form-group">
    <label for="valitseMatka">Osallistun matkalle</label>
    <select class="form-control" name="distance">
	  <option id="matkavalinta">Valitse matka</option>
      <option name="Pikasprint">Pikasprintti (300 / 10 / 3)</option>
      <option name="Sprint">Sprintti (750 / 20 / 5)</option>
      <option name="Perusmatka">Perusmatka (1500 / 40 /10)</option>
      <option name="Puolimatka">Puolimatka (1900 / 90 / 21)</option>
    </select>
  </div>
  <input class="btn btn-primary" type="submit" value="Ilmoittaudu" onclick="myFunction()"> 
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