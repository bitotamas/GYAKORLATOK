<?php
session_start();
include_once "config.php";
?>
<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Autójavítás</title>
	<link rel="stylesheet" href="bootstrap/bootstrap.min.css" />
	<script src="menu.js"></script>
	<link rel="stylesheet" href="style.css">            
</head>

<body>
<div class="container ">

<nav class="navbar navbar-expand-lg navbar-light bg-secondary border border-danger">
  <a class="navbar-brand text-light active" href="index.php?page=fooldal.php">Autójavítás</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarNav">
		<ul class="navbar-nav">
			<li class="nav-item active ">
				<a class="nav-link text-light" href="index.php?page=osszesJavitas.php">Javítások-összes</a>
			</li>
            <li class="nav-item active ">
				<a class="nav-link text-light" href="index.php?page=javitottTipusok.php">Javított típusok</a>
			</li>
            <li class="nav-item active ">
				<a class="nav-link text-light" href="index.php?page=javitasiIdok.php">Javítási idők</a>
			</li>
            <li class="nav-item active ">
				<a class="nav-link text-light" href="index.php?page=ujAutoTipus.php">Új autó típus</a>
			</li>
			</li>
		</ul>
  </div>

</nav>


    <div class="tartalom">
		<?php
			if(isset($_GET['page'])){
				include $_GET['page'];
			}else include "fooldal.php"

		?>
	</div>	
           
	<script src="bootstrap/jquery.min.js"></script>
	<script src="bootstrap/bootstrap.min.js"></script>  
</body>
</html>            