
<html>
<?php
//$link = mysqli_connect($_SERVER['RDS_HOSTNAME'], $_SERVER['RDS_USERNAME'], $_SERVER['RDS_PASSWORD'], $_SERVER['RDS_DB_NAME'], $_SERVER['RDS_PORT']);
$link = mysqli_connect("aavj4l123o7mv1.cl7ycbbt20fx.us-west-2.rds.amazonaws.com", "test", "testtest", "ebdb", 3306);						

if (!$link) {
die('Could not connect: ' . mysql_error());
}
/*
// echo 'Connected successfully';
$sql = ("SELECT Team FROM Players WHERE Players 
(Name,Age,Height,Weight, SkillLevel, MVPCount, Team) VALUES('$name', '$age', '$height', '$weight', 0, 0, '$team') ");
$success = 0;
if ($link->query($sql) === TRUE) {
	$success = 1;
 //   echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $link->error;
}
*/

mysql_close($link);
?>
	<head>
			<title>Jintro's Basketball Camp</title>
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
			        <li class="inactive"><a href="Players.php">Players <span class="sr-only">(current)</span></a></li>
			        <li><a href="Teams.php">Teams</a></li>
			        <li><a href="Coaches.php">Coaches</a></li>
			        <li><a href="register.php">Register a Player</a></li>
			      </ul>

			    </div><!-- /.navbar-collapse -->
			  </div><!-- /.container-fluid -->
			
			</div>
			<div class="jumbotron">
			<div class="container">
			  	<h1>Jintro's Basketball Camp</h1>
			  	<p>Welcome to Jintro's Basketball Camp!  Click on any of the tabs above to find out more information about the camp members.<br><br>
			  	  <!-- Add text for description here -->
			  	<a class="btn btn-success btn-lg" href="Coaches.php" role="button">Find out about the staff</a>
			  	</p>
			</div>
			</div>
		</header>
		<header>
			<div class="container">
			<div class ="row">
			<div class="col-sm-4"><a href="Players.php" style="width:360px;height:500px"><img src="players1.jpg" alt="Players" style="width:360px;height:500px;"></div>
			<div class="col-sm-4"><a href="Teams.php" style="width:360px;height:500px"><img src="Court1.png" alt="Teams" style="width:360px;height:500px;"></div>
			<div class="col-sm-4"><a href="Coaches.php" style="width:360px;height:500px"><img src="coach1.png" alt="Coaches" style="width:360px;height:500px;"></div>
			</div>
			</div>
			</header>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	</body>





	