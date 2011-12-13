<?php
if(isset($_POST['email']) && isset($_POST['password'])){
	$email = $_POST['email'];
	$password = $_POST['password'];
	$con = mysql_connect("localhost","hsp");
	echo var_dump($con);
	if (!$con){
	  die('Could not connect: ' . mysql_error());
	}
	mysql_select_db("HSPC", $con);

	$result = mysql_query("SELECT * FROM coaches");

	while($row = mysql_fetch_array($result))
	  {
	  echo $row['FirstName'] . " " . $row['LastName'];
	  echo "<br />";
	  }

	mysql_close($con);
}
?>

111101010111101010111101
