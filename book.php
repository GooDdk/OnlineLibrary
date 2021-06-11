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
  		<a href="index.php" class="logo"><img src="icon/logo.png" alt="logo" />   OnlineLibrary</a>
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

<?php
if (!isset($_SESSION['lang']))
{
	$_SESSION['lang'] = "en";
}
else if (isset($_GET['lang']) && $_SESSION['lang'] != $_GET['lang'] && !empty($_GET['lang']))
{
	if ($_GET['lang'] == "ee")
	{
		$_SESSION['lang'] = "ee";
	}
	else if ($_GET['lang'] == "en") 
	{
		$_SESSION['lang'] = "en";
	}
	else if ($_GET['lang'] == "ru") 
	{
		$_SESSION['lang'] = "ru";
	}

}
require "lang/" . $_SESSION['lang'] . ".php";
?>

	<div class="left-block">
		<div class="bookcover">
			<img alt="" src="">
		</div>
		<h1>Title</h1>
		<h3 style="color: #728091;">Author</h3>

		<div class="rating-mini">
			<span class="active"></span>	
			<span class="active"></span>    
			<span class="active"></span>  
			<span></span>    
			<span></span>
		</div>
		<br>
		<button name="submit" type="submit">Want to read</button>
		<a href="read.php" class="button" style="color: white; background-color: #728091;">Read</a>

		<div class="lang">
			<p style="color: #728091;">
				<a style="color: #728091;" href="book.php?lang=en">EN</a> /
				<a style="color: #728091;" href="book.php?lang=ru">RU</a> /
				<a style="color: #728091;" href="book.php?lang=ee">EE</a>
			</p>
		</div>
	</div>

	<div class="right-block">
		<div class="textdescription">
			<h1><?php echo $language['pd'];?></h1>
			<p><?php echo $language['description_id01'];?></p>
		</div>
	</div>

	<footer>

  	</footer>
</body>
</html>