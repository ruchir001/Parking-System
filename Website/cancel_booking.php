<?php
include("clone_user_session.php");
$day=$_REQUEST['day'];
$venue=$_REQUEST['venue'];
$slot=$_REQUEST['slot'];
/*echo $tmp_username;
echo $day;
echo $venue;
echo $slot;*/
$sql=mysqli_connect("localhost","root","","parking") or die("Problem with connection...");





mysqli_query($sql,"DELETE FROM booking WHERE day='$day' and venue='$venue' and slot='$slot' and email='$tmp_username'");


echo "Your booking has been cancelled!";
header("Refresh:2; url=cancellation.php");


?>
