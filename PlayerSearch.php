<!doctype html>
<html>
	<head>
		<title>Coaches</title>
		<link rel="stylesheet" href="main.css"
			<!-- Latest compiled and minified CSS -->
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

			<!-- Optional theme -->
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
	</head>

	<body>
		<script src="https://code.jquery.com/jquery.js"></script>
		<header class ="navbar-inverse" role="navigation">
			<div class="container">
			  <div class="container-fluid">
			    <!-- Brand and toggle get grouped for better mobile display -->
			    <div class="navbar-header">
			      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>
			      <a class="navbar-brand" href="index.php">Home</a>
			    </div>

			    <!-- Collect the nav links, forms, and other content for toggling -->
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			      <ul class="nav navbar-nav">
  				    <li class = "inactive"><a href="About.php">About</a></li>
			        <li class="active"><a href="Players.php">Players <span class="sr-only">(current)</span></a></li>
			        <li class="inactive"><a href="Teams.php">Teams <span class="sr-only">(current)</span></a></li>
			        <li class="inactive"><a href="Coaches.php">Coaches <span class="sr-only">(current)</span></a></li>
			        <li class="inactive"><a href="register.php">Register a Player</a></li>
			      </ul>
			      
			    </div><!-- /.navbar-collapse -->
			  </div><!-- /.container-fluid -->
			</div>
			</header>



			<div class="jumbotron">
			<div class="container">
			<H1>Player Search</h1>

			</div>
			</div>
			<div class="container">
<body><b><h2>

<?php

$link = mysqli_connect("aavj4l123o7mv1.cl7ycbbt20fx.us-west-2.rds.amazonaws.com", "test", "testtest", "ebdb", 3306);						
if (!$link) {
die('Could not connect: ' . mysql_error());
}

//echo 'Connected successfully';

$fname = strtolower($_POST["name"]);
$sql = "SELECT * FROM Players";
$result = mysqli_query($link, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        if ($fname == strtolower($row["Name"])) {
			echo "Congratulations, Player Found! View their stats below.<br><br>";
			echo "Name: " . $row["Name"]. "<br>Age: " . $row["Age"]. "<br>Height: " . $row["Height"]. "<br>Weight: " . $row["Weight"]. "<br>Skill Level: " . $row["SkillLevel"]. "<br>MVP Count: " . $row["MVPCount"]. "<br>Team: " . $row["Team"]. "<br>";
		}
    }
} else {
    echo "0 results";
}


mysql_close($link);
?>
</h2>
</b>
<br><h3>Search Another Player</h3>
		<form  method="post" action="PlayerSearch.php?go"  id="searchform"> 
	      <input  type="text" name="name"> 
	      <input  type="submit" class="btn btn-default" name="submit" value="Search"> 
	    </form> 
</div>
	</body>





