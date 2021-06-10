<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>OnlineLibrary</title>

	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100;300;500;700&display=swap" rel="stylesheet">
	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">

</head>
<body>

<?php
session_start();

if (isset($_SESSION["id"]))
{
?>
	<nav class="topnav">
  		<a href="index.php" class="logo"><img src="img/logo.png" alt="logo" />   OnlineLibrary</a>
  		<div class="search">
			<form>
  				<input type="text" placeholder="">
  				<button type="submit"></button>
			</form>
		</div>
  		<a href="profile.php" class="buttonnav">Profile</a>
	</nav>

<?php
}
else
{
?>

	<nav class="topnav">
  		<a href="index.php" class="logo"><img src="img/logo.png" alt="logo" />   OnlineLibrary</a>
  		<div class="search">
			<form>
  				<input type="text" placeholder="">
  				<button type="submit"></button>
			</form>
		</div>
  		<a href="login.php" class="buttonnav">Log in</a>
	</nav>

<?php   
}
?>

	<div class="genres">
		<h1>Genres</h1>
	</div>

	<div class="content">
		<div class="book">
			<img src="">
			<a href="books.php">
			<div class="title">
				<h2>test</h2>
			</div>
			</a>
		</div>
		<div class="book">
			<img src="">
			<div class="title">
				<h2>test</h2>
			</div>
		</div>
		<div class="book">
			<img src="">
			<div class="title">
				<h2>test</h2>
			</div>
		</div>
		<div class="book">
			<img src="">
			<div class="title">
				<h2>test</h2>
			</div>
		</div>
		<div class="book">
			<img src="">
			<div class="title">
				<h2>test</h2>
			</div>
		</div>
		<div class="book">
			<img src="">
			<div class="title">
				<h2>test</h2>
			</div>
		</div>
	</div>

	<footer>
		
  	</footer>
</body>
</html>