<?php
session_start();
require_once "database/config.php";
?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css" />
                                                          
    <script src="menu.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>Diakkönyvtár</title>

    <style>body {
        min-height: 75rem;
        padding-top: 4.5rem;
        }
    </style>

</head>
<body>

	<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark" role="navigation">    
		<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#menuid" aria-controls="menuid" aria-expanded="false" aria-label="Toggle navigation">    
			<span class="navbar-toggler-icon"></span>    
		</button>    
		<span class="navbar-brand">Diákkönyvtár</span>
	<div class="navbar-collapse collapse " id="menuid">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item"><a class="nav-link" href="index_.php?page=fooldal.php">Főoldal</a></li>
			<li class="nav-item"><a class="nav-link" href="index_.php?page=konyvek.php">Könyvek</a></li>
			<li class="nav-item"><a class="nav-link" href="index_.php?page=kotelezo.php">Kötelező olvasmányok</a></li>
			<li class="nav-item"><a class="nav-link" href="index_.php?page=kolcsonzes.php">Kölcsönzések</a></li>
			<li class="nav-item"><a class="nav-link" href="index_.php">Új könyv</a></li>
			<li class="nav-item"><a class="nav-link" href="index_.php">Évfolyam módosítás</a></li>
		</ul>
	</div>
</nav>  

<main role="main" class="container p-2">
	<div class="jumbotron">
		<?php
			if(isset($_GET["page"])){
				include  $_GET['page'];
			}	
			else include("fooldal.php");
		?>
    </div>
</main>
	 <script src="bootstrap/jquery.min.js"></script>
	 <script src="bootstrap/bootstrap.min.js"></script>
</body>
</html>