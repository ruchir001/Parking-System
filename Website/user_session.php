<?php

//$date = date('F d, Y, g:i:s a');
//echo "Today " .$date."<br />";

if(!isset($_SESSION['username']))
{
	echo "Not a session";
}
else
{

	$temp_username = $_SESSION['username'];
	echo $temp_username;

	$sql=mysqli_connect("localhost", "root", "","parking") or die("We couldn't connect!");
	$name = mysqli_query($sql,"SELECT first_name FROM users WHERE email=$temp_username");
	$first = "";


	/*while($row = mysqli_fetch_assoc($name)){
		$first= $row['first_name'];
	}
		echo $first;*/

	include("type.php");
}

?>
