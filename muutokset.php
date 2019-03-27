<?php include ("head.php"); 

include ("conn.php");

$email = $_POST['email'];
$password = $_POST['password'];

if (isset($_POST['email']) && isset($_POST['password'])) {

$sql = "SELECT Fname,Lname,Phone
FROM user 
WHERE Email = '$email' AND Password = '$password'";

$result = $conn->query($sql);

$row = mysql_fetch_array

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
<div id="navi7" class="collapse navbar-collapse">
<ul class="nav navbar-nav">
<li><a href="index.php"><b>Etusivu</b></a></li>
<li><a href="kalenteri.php"><b>Kisakalenteri ja ilmoittautuminen</b></a></li>
<li class="active"><a href="run.php"><b>Muuta yhteystietojasi</b></a></li>
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
<h3 class="oranssi">Muuta yhteystietojasi</h3>

</div>
<div class="col-sm-1">
</div>

</div>

<div class="row">
<div class="col-sm-1">
</div>

<div class="col-sm-5">

<form name="checking" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
  <div class="form-group">

    <label for="email">Sähköposti</label>
    <input type="email" class="form-control" name="email" placeholder="Sähköposti">
    <label for="password">Salasana</label>
    <input type="userid" class="form-control" name="email" placeholder="Sähköposti" style="display:none">
    <input type="password" class="form-control" name="userid" placeholder="Salasana">
  	<label for="fname">Etunimi</label>
    <input type="text" class="form-control" name="fname" placeholder="Etunimi">
    <label for="Sukunimi">Sukunimi</label>
    <input type="text" class="form-control" name="lname" placeholder="Sukunimi">
    <label for="phone">Puhelinnumero</label>
    <input type="number" class="form-control" name="phone" placeholder="Puhelin">
	
	<br>
  
  <button class="btn btn-primary" type="submit" value="Hae tiedot" onclick="tarkistus()">Teksti</button>
  <button type="button" class="btn btn-secondary" id="empty2">Tyhjennä lomake</button>
  </div>
</form>

</div>
<div class="col-sm-5">
<br>
<img src="peguera_pieni.jpg" alt="Maali" class="img-thumbnail" id="bike"> 

<br>

<form name="tarkistus" action="tuoTiedot.php" method="post">
Email: <input type="text" name="email"> <br/>
<input type="submit" value="Tarkista tiedot">

</form>
<br>
</div>

<div class="col-sm-1">
</div>

</div>
</div>

<?php include ("footer.php"); ?>