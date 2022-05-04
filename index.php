<html lang="en-ca">
	<head>
		<!-- Meta Data -->
		<meta charset="utf-8" />
	    <meta name="description" content="Movie rating" />
	    <meta name="keywords" content="immaculata, ics2o" />
	    <meta name="author" content="Angelo Pintilie" />
	    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<!-- Favicon -->
	    <link rel="apple-touch-icon" sizes="180x180" href="./fav_index/apple-touch-icon.png" />
	    <link rel="icon" type="image/png" sizes="32x32" href="./fav_index/favicon-32x32.png" />
	    <link rel="icon" type="image/png" sizes="16x16" href="./fav_index/favicon-16x16.png" />
	    <link rel="manifest" href="./fav_index/site.webmanifest" />
		<!-- Css style sheet -->
		<link rel="stylesheet"dfghj href="./css/style.css" />
		<title>Movie Eligibility Site</title>
	</head>
	<body>
		<!-- Title, Info and image -->
		<center><?php 
			echo '<h1>Movie Eligiblity Calculator</h1>';
			echo '<td><img src="./images/rating.png" width="60%"/></td>';
			echo "<h3>Enter your age below:</h3>"; 
		?>
		<!-- Textfield -->
		<form method = "post">   
			<p>Age: <input type="number" name="age" step="1" min="0">   
			<br><br>   
		<!-- Button -->
		<input type = "submit" name = "enter" value="Submit">    
		<br><br>
		<!-- Variables and Calculations -->
		<?php  
			if(isset($_POST['enter'])) {  
				$userAge = $_POST['age'];   
				// If statement for user age, what age category of movies they can see
				if ($userAge == "") {
					//Nothing was inputted
					echo"<br>You need to input your age";
				} else if ($userAge >= 18) {
					//User can see a R rated movie 
					echo"<br>You are eligible to see an R rated film by yourself!";
				} else if ($userAge >= 13) {
					//User can see a PG-13 movie 
					echo"<br>You are eligible to see a PG-13 movie by yourself!";
				} else if ($userAge >=11) {
					//User can see a PG or G movie 
					echo"<br>You are eligible to see a PG rated movie by yourself! However, you need to be supervised to see a PG-13 film.";
				} else {
					//User needs supervision
					echo"<br>You are eligible to see a G rated movie with the company of a parent or gaurdian!";
				} 
			}
		?>
	</body>
</html>