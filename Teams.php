
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
			        <li class="active"><a href="Teams.php">Teams <span class="sr-only">(current)</span></a></li>
			        <li class="inactive"><a href="Coaches.php">Coaches <span class="sr-only">(current)</span></a></li>
			        <li><a href="register.php">Register a Player</a></li>
			       
			      </ul>
			      <!-- <form class="navbar-form navbar-left" role="search">
			        <div class="form-group">
					    <form action="tyreg.php" method="post">
							<p>Player name: <input type = "text" name="name"></p>
							<p>Age: <input type = "number" name="age"></p>          im not sure if this stuff works yet, may need to format some of the lines in this div
							<p>Height: <input type = "number" name="height" ></p>
							<p>Weight: <input type = "number" name="weight" ></p>
							<p>Preferred Team: <input type = "text" name="team" ></p>
							<input type="submit">
						</form>
			        </div>
			        <button type="submit" class="btn btn-default">Submit</button>
			      </form> -->
			      
			    </div><!-- /.navbar-collapse -->
			</div>
			</header>
			  </div><!-- /.container-fluid -->
			 <div class="jumbotron">
                         <div class="container">
			 	<form action="compare.php" method="post">
			 	<h4>Compare Team Matchups</h4>
				<h4>First Team: <input type = "text" name="cmp1"></h4>
				<h4>Second Team: <input type = "text" name="cmp2"></h4>
				<input type="submit">
		</form>
		</div>
		<div class="container">
				<div class="panel panel-default">
				  <div class="panel-heading">
				    <h3 class="panel-title"><img src="beef.png" alt="Bhagi" style="width:128px;height:128px;"> Bhagi's Beefers</h3>
				  </div>
				  <div class="panel-body">
				   <?php
                                        $link = mysqli_connect("aavj4l123o7mv1.cl7ycbbt20fx.us-west-2.rds.amazonaws.com", "test", "testtest", "ebdb", 3306);                                                

                                        if (!$link) {
                                        die('Could not connect: ' . mysql_error());
                                        }

                                        //echo 'Connected successfully';
                                        $sql = "SELECT * FROM Players Where Team = 'Bhagi\'s Beefers'";
                                        $result = mysqli_query($link, $sql);
                                        
                                        if (mysqli_num_rows($result) > 0) {
                                                // output data of each row
                                                while($row = mysqli_fetch_assoc($result)) {
                                                        echo "Player: " . $row["Name"]. 
                                                        " - ID: " . $row["PlayerId"]. 
                                                        " - Age: " . $row["Age"]. 
                                                        " - Height: " . $row["Height"]. 
                                                        " - Weight: " . $row["Weight"].
                                                        " - Skill Level: " . $row["SkillLevel"]. 
                                                        " - MVP Awards: " . $row["MVPCount"]. "<br>";
                                                }
                                        } else {
                                                echo "0 results";
                                        }

                                        mysql_close($link);
                                        
                                        ?>
				  </div>
				</div>
			</div>
			<div class ="container">
				<div class="panel panel-default">
				  <div class="panel-heading">
				    <h3 class="panel-title"><img src="question.png" alt="Greg" style="width:128px;height:128px;"> Greg's Kulczyczkis</h3>
				  </div>
				  <div class="panel-body">
				   <?php
                                        $link = mysqli_connect("aavj4l123o7mv1.cl7ycbbt20fx.us-west-2.rds.amazonaws.com", "test", "testtest", "ebdb", 3306);                                                

                                        if (!$link) {
                                        die('Could not connect: ' . mysql_error());
                                        }

                                        //echo 'Connected successfully';
                                        $sql = "SELECT * FROM Players Where Team = 'Greg\'s Kulczyczkis'";
                                        $result = mysqli_query($link, $sql);
                                        
                                        if (mysqli_num_rows($result) > 0) {
                                                // output data of each row
                                                while($row = mysqli_fetch_assoc($result)) {
                                                        echo "Player: " . $row["Name"]. 
                                                        " - ID: " . $row["PlayerId"]. 
                                                        " - Age: " . $row["Age"]. 
                                                        " - Height: " . $row["Height"]. 
                                                        " - Weight: " . $row["Weight"].
                                                        " - Skill Level: " . $row["SkillLevel"]. 
                                                        " - MVP Awards: " . $row["MVPCount"]. "<br>";
                                                }
                                        } else {
                                                echo "0 results";
                                        }

                                        mysql_close($link);
                                        
                                        ?>
				  </div>
				</div>
			</div>
			<div class ="container">
				<div class="panel panel-default">
				  <div class="panel-heading">
				    <h3 class="panel-title"><img src="milk.png" alt="Greg" style="width:128px;height:128px;"> Bari's Bandits</h3>
				  </div>
				  <div class="panel-body">
				    <?php
                                        $link = mysqli_connect("aavj4l123o7mv1.cl7ycbbt20fx.us-west-2.rds.amazonaws.com", "test", "testtest", "ebdb", 3306);                                                

                                        if (!$link) {
                                        die('Could not connect: ' . mysql_error());
                                        }

                                        //echo 'Connected successfully';
                                        $sql = "SELECT * FROM Players Where Team = 'Bari\'s Bandits'";
                                        $result = mysqli_query($link, $sql);
                                        
                                        if (mysqli_num_rows($result) > 0) {
                                                // output data of each row
                                                while($row = mysqli_fetch_assoc($result)) {
                                                        echo "Player: " . $row["Name"]. 
                                                        " - ID: " . $row["PlayerId"]. 
                                                        " - Age: " . $row["Age"]. 
                                                        " - Height: " . $row["Height"]. 
                                                        " - Weight: " . $row["Weight"].
                                                        " - Skill Level: " . $row["SkillLevel"]. 
                                                        " - MVP Awards: " . $row["MVPCount"]. "<br>";
                                                }
                                        } else {
                                                echo "0 results";
                                        }

                                        mysql_close($link);
                                        
                                        ?>
				  </div>
				</div>
			</div>
			<div class ="container">
				<div class="panel panel-default">
				  <div class="panel-heading">
				    <h3 class="panel-title"><img src="parmesan.jpg" alt="Greg" style="width:128px;height:128px;"> Gabe Parmesaniers</h3>
				  </div>
				  <div class="panel-body">
				    <?php
                                        $link = mysqli_connect("aavj4l123o7mv1.cl7ycbbt20fx.us-west-2.rds.amazonaws.com", "test", "testtest", "ebdb", 3306);                                                

                                        if (!$link) {
                                        die('Could not connect: ' . mysql_error());
                                        }

                                        //echo 'Connected successfully';
                                        $sql = "SELECT * FROM Players Where Team = 'Gabe Parmesaniers'";
                                        $result = mysqli_query($link, $sql);
                                        
                                        if (mysqli_num_rows($result) > 0) {
                                                // output data of each row
                                                while($row = mysqli_fetch_assoc($result)) {
                                                        echo "Player: " . $row["Name"]. 
                                                        " - ID: " . $row["PlayerId"]. 
                                                        " - Age: " . $row["Age"]. 
                                                        " - Height: " . $row["Height"]. 
                                                        " - Weight: " . $row["Weight"].
                                                        " - Skill Level: " . $row["SkillLevel"]. 
                                                        " - MVP Awards: " . $row["MVPCount"]. "<br>";
                                                }
                                        } else {
                                                echo "0 results";
                                        }

                                        mysql_close($link);
                                        
                                        ?>

				  </div>
				</div>
			</div>
			<div class ="container">
				<div class="panel panel-default">
				  <div class="panel-heading">
				    <h3 class="panel-title"><img src="punishers.png" alt="Greg" style="width:128px;height:128px;"> Poorvi's Punishers</h3>
				  </div>
				  <div class="panel-body">
				    <?php
                                        $link = mysqli_connect("aavj4l123o7mv1.cl7ycbbt20fx.us-west-2.rds.amazonaws.com", "test", "testtest", "ebdb", 3306);                                                

                                        if (!$link) {
                                        die('Could not connect: ' . mysql_error());
                                        }

                                        //echo 'Connected successfully';
                                        $sql = "SELECT * FROM Players Where Team = 'Poorvi\'s Punishers'";
                                        $result = mysqli_query($link, $sql);
                                        
                                        if (mysqli_num_rows($result) > 0) {
                                                // output data of each row
                                                while($row = mysqli_fetch_assoc($result)) {
                                                        echo "Player: " . $row["Name"]. 
                                                        " - ID: " . $row["PlayerId"]. 
                                                        " - Age: " . $row["Age"]. 
                                                        " - Height: " . $row["Height"]. 
                                                        " - Weight: " . $row["Weight"].
                                                        " - Skill Level: " . $row["SkillLevel"]. 
                                                        " - MVP Awards: " . $row["MVPCount"]. "<br>";
                                                }
                                        } else {
                                                echo "0 results";
                                        }

                                        mysql_close($link);
                                        
                                        ?>

				  </div>
				</div>
			</div>
			<div class ="container">
				<div class="panel panel-default">
				  <div class="panel-heading">
				    <h3 class="panel-title"><img src="babies.png" alt="Greg" style="width:128px;height:128px;"> Norman Brenner-Babies</h3>
				  </div>
				  <div class="panel-body">
				    <?php
                                        $link = mysqli_connect("aavj4l123o7mv1.cl7ycbbt20fx.us-west-2.rds.amazonaws.com", "test", "testtest", "ebdb", 3306);                                                

                                        if (!$link) {
                                        die('Could not connect: ' . mysql_error());
                                        }

                                        //echo 'Connected successfully';
                                        $sql = "SELECT * FROM Players Where Team = 'Norman Brenner-Babies'";
                                        $result = mysqli_query($link, $sql);
                                        
                                        if (mysqli_num_rows($result) > 0) {
                                                // output data of each row
                                                while($row = mysqli_fetch_assoc($result)) {
                                                        echo "Player: " . $row["Name"]. 
                                                        " - ID: " . $row["PlayerId"]. 
                                                        " - Age: " . $row["Age"]. 
                                                        " - Height: " . $row["Height"]. 
                                                        " - Weight: " . $row["Weight"].
                                                        " - Skill Level: " . $row["SkillLevel"]. 
                                                        " - MVP Awards: " . $row["MVPCount"]. "<br>";
                                                }
                                        } else {
                                                echo "0 results";
                                        }

                                        mysql_close($link);
                                        
                                        ?>
				  </div>
				</div>
			</div>

 
	</body>