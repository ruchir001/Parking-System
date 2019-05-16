<?php
session_start();

if(!isset($_SESSION['username']))
{
	echo "Access Denied!";
	exit;
}
else
{
	//echo "AAyush";
	$tmp_username = $_SESSION['username'];
	//echo $tmp_username;
	//echo "<br />";
	$tmp_building = $_SESSION['building'];
	//echo $tmp_building;
	//echo "<br />";
	$tmp_day = $_SESSION['day'];
	//echo $tmp_day;
	//echo "<br />";
	$slot=$_REQUEST['Slot'];
	//echo $slot;
	$_SESSION['slot'] = $slot;

		if($tmp_username && $tmp_building && $tmp_day && $slot)
		{
			$sql=mysqli_connect("localhost","root","","parking") or die("Problem with connection...");

			$query = mysqli_query($sql,"SELECT * FROM booking WHERE venue='$tmp_building' and day='$tmp_day' and slot='$slot' ");
			$numrows = mysqli_num_rows($query);
			//echo $numrows;

			if ($numrows != 0)
			{
				echo "<br /><br /><br /><br /><br /><center><h1>This slot is already booked</h1></center>";
				echo "<br />";
				echo "<a href=clone_pre_slot.php?day=$tmp_day&slot=$slot>Choose another Slot</a> ";

			}
			else
			{
				include ("payment.php");
			}
		}


	/*else
	{
		mysqli_query("INSERT INTO booking(email,venue,day,slot) VALUES('$tmp_username','$tmp_building','$tmp_day','$slot')");
		include ("payment.php");
	}*/

}




	/*mysqli_connect("localhost","root","") or die("Problem with connection...");
	mysqli_select_db("parking");

	$query = mysqli_query("SELECT * FROM users WHERE email='".$_SESSION['username']."'");
	$numrows = mysqli_num_rows($query);

	if($numrows != 0)
	{
		while($row = mysqli_fetch_assoc($query))
		{
			$dbusername = $row['email'];
			$dbpassword = $row['password'];

		}
		if($_SESSION['username']==$dbusername)
		{
			if($_SESSION['password']==$dbpassword)
			{
				header("location: user_users.php");
			}
			else
			{
				echo "Your password is incorrect!";
			}
		}
		else
		{
			echo "Your username is incorrect!";
		}
	}
	else
	{
		echo "This username is not registered!";
	}
}
else
{
	echo "You have to type a name and password!";
}
}
else
{
	echo "Access denied!";
	exit;
}*/

?>
