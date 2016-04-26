<html>
<?php
//$link = mysqli_connect($_SERVER['RDS_HOSTNAME'], $_SERVER['RDS_USERNAME'], $_SERVER['RDS_PASSWORD'], $_SERVER['RDS_DB_NAME'], $_SERVER['RDS_PORT']);
$link = mysqli_connect("aavj4l123o7mv1.cl7ycbbt20fx.us-west-2.rds.amazonaws.com", "test", "testtest", "ebdb", 3306);						

if (!$link) {
die('Could not connect: ' . mysql_error());
}

echo 'Connected successfully';
/*
$sql = "CREATE DATABASE myDB";
if ($link->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $link->error;
} 

$sql = ("CREATE TABLE test2(
 name VARCHAR(30), 
 age INT)");  

if ($link->query($sql) === TRUE) {
    echo "Table test2 created successfully";
} else {
    echo "Error creating table: " . $link->error;
}
*/
$name = $_POST["name"];
$age = $_POST["age"];
$height = $_POST["height"];
$weight = $_POST["weight"];
$team = $_POST["team"];

$sql = ("INSERT INTO Players 
(Name, PlayerID,Age,Height,Weight, `Skill level`, MVPCount, Team) VALUES('$name', 0, '$age', '$height', '$weight', 0, 0, '$team') ");

if ($link->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $link->error;
}

/*
$sql = "SELECT * FROM test2";
$result = mysqli_query($link, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "name: " . $row["name"]. " - age: " . $row["age"]. "<br>";
    }
} else {
    echo "0 results";
} 
*/

mysql_close($link);
?>
Thank you for registering! Your child [name] has been registered to play for [team name]

Link to go back to previous page
<body>



</html>