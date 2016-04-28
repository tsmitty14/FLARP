<?php

$link = mysqli_connect("aavj4l123o7mv1.cl7ycbbt20fx.us-west-2.rds.amazonaws.com", "test", "testtest", "ebdb", 3306);						
if (!$link) {
die('Could not connect: ' . mysql_error());
}

echo 'Connected successfully';

$fid = $_POST["PlayerId"];

$sql = "SELECT * FROM Players";
$result = mysqli_query($link, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        if ($fid == $row["PlayerId"]) {
			echo "Name: " . $row["Name"]. " - ID: " . $row["PlayerId"]. " - age: " . $row["Age"]. " - Height: " . $row["Height"]. " - Weight: " . $row["Weight"]. " - Skill Level: " . $row["SkillLevel"]. " - MVP Count: " . $row["MVPCount"]. " - Team: " . $row["Team"]. "<br>";
		}
    }
} else {
    echo "0 results";
}


mysql_close($link);
?>