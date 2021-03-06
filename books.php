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
include("includes/db.inc.php");

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
	<form method="POST">
		<div class="left-block">
			<h1>Rating</h1>
			<div class="rating-area">
				<input type="radio" id="star-5" name="rating" value="5">
				<label for="star-5" title="Оценка «5»"></label>	
				<input type="radio" id="star-4" name="rating" value="4">
				<label for="star-4" title="Оценка «4»"></label>    
				<input type="radio" id="star-3" name="rating" value="3">
				<label for="star-3" title="Оценка «3»"></label>  
				<input type="radio" id="star-2" name="rating" value="2">
				<label for="star-2" title="Оценка «2»"></label>    
				<input type="radio" id="star-1" name="rating" value="1">
				<label for="star-1" title="Оценка «1»"></label>
			</div>
			<button name="submit" type="submit">Apply</button>
		</div>
	</form>

	<div class="right-block">
		<?php
			$sql2 = 'SELECT * FROM books;';
			$result2 = mysqli_query($connection, $sql2);
			//$rows = mysqli_fetch_all($result2, MYSQLI_ASSOC);
if(mysqli_num_rows($result2) > 0){


    		while ($row = mysqli_fetch_assoc($result2))
    		{
        		echo '<a href="book.php">';
        		echo '<div class="book">';
        		echo '<img src="'.$row["picture"].'" alt="picture" width="170" height="250">';
        		echo '</div>';
        		echo '<h2 style="color: #728091;">'.$row["title"].'</h2>';
        		echo '</a>';
    		}
    	}
		?>
	</div>
	<footer>

  	</footer>
</body>
</html>