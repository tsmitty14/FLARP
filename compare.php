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
			        <li class="inactive"><a href="Players.php">Players <span class="sr-only">(current)</span></a></li>
			        <li><a href="Teams.php">Teams</a></li>
			        <li class="inactive"><a href="Coaches.php">Coaches <span class="sr-only">(current)</span></a></li>
			       
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

			<div class="jumbotron">
			<div class="container">
			  	<h1>Matchups</h1>

			</div>
			</div>
			<div class="container">

<?php
//$link = mysqli_connect($_SERVER['RDS_HOSTNAME'], $_SERVER['RDS_USERNAME'], $_SERVER['RDS_PASSWORD'], $_SERVER['RDS_DB_NAME'], $_SERVER['RDS_PORT']);
$link = new mysqli("aavj4l123o7mv1.cl7ycbbt20fx.us-west-2.rds.amazonaws.com", "test", "testtest", "ebdb", 3306);						

if ($link->connect_errno > 0) {
die('Could not connect: ' . mysql_error());
}

//echo 'Connected successfully';

$cmp1 = $_POST["cmp1"];
$cmp2 = $_POST["cmp2"];
?>

<h2>You chose to compare <b><?php echo $cmp1 ?></b> and <b><?php echo $cmp2 ?></b> <br><br></h2>
<h4>
<?php



$sql = "SELECT * FROM Team";
$result = mysqli_query($link, $sql);
$rating1 = 0;
$wins1 = 0;
$rating2 = 0;
$wins2 = 0;
$winner = "asdf";
$team1exists = 0;
$team2exists = 0;
if ($cmp1 == "Greg's Kulczyczkis") {
	$team1exists = 1;
}
if ($cmp2 == "Greg's Kulczyczkis") {
	$team2exists = 1;
}
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
	if ($cmp1 == $row["Name"]) {
		$rating1 = $row["TeamRating"];
		$wins1 = $row["Wins"];
		$team1exists = 1;
		echo $cmp1;
	}
	if ($cmp2 == $row["Name"]) {
		$rating2 = $row["TeamRating"];
		$wins2 = $row["Wins"];
		$team2exists = 1;
		echo $cmp2;
	}
//        echo "name: " . $row["Name"]. " - age: " . $row["TeamRating"]. "<br>";
    }
} else {
    echo "0 results";
}

if ($team1exists == 0 || $team2exists == 0) {
	echo "You have entered one or more incorrect team names. Please return to the previous page and try again.";
}
else if ($rating1 > $rating2) {
	$winner = $cmp1;
		echo "With a team rating of ";
		echo $rating1;
		echo ", "; 
		echo $cmp1;
		echo " is the better team in this matchup.<br>";
	if (($wins2-$wins1) > 1) {
		echo "However, $cmp2 has a greater win rate.<br>";
	}
}
else if ($rating2 > $rating1) {
	$winner = $cmp2;
		echo "With a team rating of ";
		echo $rating2;
		echo ", "; 
		echo $cmp2;
		echo " is the better team in this matchup.<br>";
	if (($wins1-$wins2) > 1) {
		echo "However, $cmp1 has a greater win rate.<br>";
	}
}
else {
	echo "Team Rating is the same.";
	if ($wins1 > $wins2) {
		echo "With ";
		echo $wins1;
		echo ", "; 
		echo $cmp1;
		echo " is the better team in this matchup.<br>";
	}
	else if ($wins1 > $wins2) {
		echo "With ";
		echo $wins1;
		echo ", "; 
		echo $cmp1;
		echo " is the better team in this matchup.<br>";
	}
	else {
		echo " Number of wins is the same.";
	}
}
?>
</h4>
<?php
if ($team1exists == 1 && $team2exists == 1) {
echo "<br><h2>Statistics for $cmp1</h2>";

$sql = "SELECT * FROM Players";
$result = mysqli_query($link, $sql);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
	if ($row["Team"] == $cmp1) {
		echo $row["Name"]. " - Age: " . $row["Age"]. " - Skill Level: " . $row["SkillLevel"]. " - MVPCount: ". $row["MVPCount"]. "<br>";
	}	
    }
}
?>
<br><h2>Statistics for <?php echo $cmp2	 ?></h2>
<?php
$sql = "SELECT * FROM Players";
$result = mysqli_query($link, $sql);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
	if ($row["Team"] == $cmp2) {
		echo $row["Name"]. " - Age: " . $row["Age"]. " - Skill Level: " . $row["SkillLevel"]. " - MVPCount: ". $row["MVPCount"]. "<br>";

	}	
    }
}
}
else {
	echo "<br><h2>No Statistics Available for this matchup</h2>";
}
mysql_close($link);
?>

</div>
	</body>