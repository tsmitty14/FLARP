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
			        <li class="inactive"><a href="Players.php">Players <span class="sr-only">(current)</span></a></li>
			        <li class="inactive"><a href="Teams.php">Teams <span class="sr-only">(current)</span></a></li>
			        <li class="inactive"><a href="Coaches.php">Coaches <span class="sr-only">(current)</span></a></li>
			        <li class="active"><a href="register.php">Register a Player</a></li>
			      </ul>
			      <form class="navbar-form navbar-left" role="search">
			        <div class="form-group">
			          <input type="text" class="form-control" placeholder="Search">
			        </div>
			        <button type="submit" class="btn btn-default">Submit</button>
			      </form>
			      
			    </div><!-- /.navbar-collapse -->
			  </div><!-- /.container-fluid -->
			</div>
			</header>


<?php
//$link = mysqli_connect($_SERVER['RDS_HOSTNAME'], $_SERVER['RDS_USERNAME'], $_SERVER['RDS_PASSWORD'], $_SERVER['RDS_DB_NAME'], $_SERVER['RDS_PORT']);
$link = new mysqli("aavj4l123o7mv1.cl7ycbbt20fx.us-west-2.rds.amazonaws.com", "test", "testtest", "ebdb", 3306);						

if ($link->connect_errno > 0) {
die('Could not connect: ' . mysql_error());
}

//echo 'Connected successfully';

$name = $_POST["name"];
$age = $_POST["age"];
$height = $_POST["height"];
$weight = $_POST["weight"];
$team = $_POST["team"];

$sql = ("INSERT INTO Players 
(Name,Age,Height,Weight, SkillLevel, MVPCount, Team) VALUES('$name', '$age', '$height', '$weight', 0, 0, '$team') ");
$success = 0;
if ($link->query($sql) === TRUE) {
	$success = 1;
 //   echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $link->error;
}

mysql_close($link);
?>



			<div class="jumbotron">
			<div class="container">
			  <?php if($success == 1) {
				  echo "<h1>Registration Successful!</h1><br><h3>Thank you for registering your child, <b>$name</b>, for Jintro's Basketball Camp.</h3>";
				}
				else {
				  echo "<h1>Registration Failed</h1><br>Please try again.";
				}
			?>

			</div>
			</div>
			<div class="container">
<h3>Congratulations! Your child <?php echo "<b>$name</b> has been registered to play for <b>$team</b>. Get Hyped for the new season!<br><br>";?></h3>
<body>
		<div align="center"><iframe width="854" height="510" src="//www.youtube.com/embed/Q2oGd7RbkWY?rel=0&autoplay=1" frameborder="0" allowfullscreen></iframe></div>

</div>
	</body>


