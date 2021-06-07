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

	<nav class="topnav">
  		<a href="./index.php" class="logo"><img src="img/logo.png" alt="logo" />   OnlineLibrary</a>
  		<div class="search">
			<form>
  				<input type="text" placeholder="">
  				<button type="submit"></button>
			</form>
		</div>
  		<a href="./login.php" class="buttonnav">Log in</a>
	</nav>

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
		<h1>Language</h1>

		<div class="select select--multiple">
  			<select id="multi-select" multiple>
    			<option value="Option 1">Estonian</option>
    			<option value="Option 2">Russian</option>
    			<option value="Option 3">English</option>
  			</select>
  			<span class="focus"></span>
		</div>

		<button name="submit" type="submit">Apply</button>
	</div>

	<div class="content">
		<a href="./book.php">
			<div class="book">
			<img alt="" src="">
		</div>
		</a>
		<div class="book">
			<img alt="" src="">
		</div>
		<h2>
		<div class="book">
			<img alt="" src="">
		</div>
		<div class="book">
			<img alt="" src="">
		</div>
		<div class="book">
			<img alt="" src="">
		</div>
		<div class="book">
			<img alt="" src="">
		</div>
		<div class="book">
			<img alt="" src="">
		</div>
	</div>

</body>
</html>