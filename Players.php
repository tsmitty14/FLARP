
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
  				    <li><a href="About.php">About</a></li>
			        <li class="active"><a href="Players.php">Players <span class="sr-only">(current)</span></a></li>
			        <li><a href="Teams.php">Teams</a></li>
			        <li class="inactive"><a href="Coaches.php">Coaches <span class="sr-only">(current)</span></a></li>
			        <li><a href="register.php">Register a Player</a></li>
			       
			      </ul>
				</div>
				  	<div class="jumbotron">
					<div class="container">
					<h1>Search for a Player</h1>
				  		<form  method="post" action="PlayerSearch.php?go"  id="searchform"> 
						  <input  type="text" name="name"> 
						  <input  type="submit" name="submit" value="Player Search"> 
						</form> 
					</div>
					</div>
					</div>
					<div class="col-sm-4"><a href="Players.php" style="width:360px;height:500px" align="center"><img src="players2.jpg" alt="Players" style="width:600px;height:600px;"></div>

</div>		
	</body>