<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>

	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100;300;500;700&display=swap" rel="stylesheet">
	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>

	<nav class="topnav">
  		<a href="index.php" class="logo"><img src="icon/logo.png" alt="logo" />   OnlineLibrary</a>
	</nav>

	<?php
			if (isset($_GET['error']))
			{
    			if ($_GET['error'] == "emptyinputslogin")
    			{
        			echo '<div class="alert alert-danger">Заполните пустые поля!</div>';
    			}
			}
	?>

	<div class="block">
		<h2>Log in</h2>
		<form class="center" action="includes/login.inc.php" method="POST">
			<input name="username" placeholder="Login" type="text">
			<input name="password" placeholder="Password" type="password">
			<button name="submit" type="submit">Log in</button>
			<a href="register.php" class="button">Register</a>
		</form>
	</div>

	<footer>

  	</footer>
</body>
</html>