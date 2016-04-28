<html>
	<head>
		<title>Register</title>
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
			        <li class="active"><a href="register.php">Register a Player <span class="sr-only">(current)</span></a></li>
			      </ul>
			     </div>
			    </div>
			 </div>
		</header>
		<div class="jumbotron">
		<div class="container">
		<h1>Register For Jintro's Basketball Camp</h1>
	 	<h3><form action="tyreg.php" method="post">
				<h4>Player name: <input type = "text"  name="name"></h4>
				<h4>Age: <input type = "number" min="0" name="age"></h4>
				<h4>Height: <input type = "number" min="0" name="height" ></h4>
				<h4>Weight: <input type = "number" min="0" name="weight" ></h4>
				<h4>Preferred Team: <input type = "text" name="team" ></h4>
				<input type="submit">
		</form> 
		</h3>
		</div>
		</div>
	</body>
</html>