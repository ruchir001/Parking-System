<?php
include ("clone_user_session.php");
$newname = $_REQUEST['newname'];
$newlast = $_REQUEST['newlast'];
$newpassword = md5($_REQUEST['newpassword']);
$newphone = $_REQUEST['newphone'];
$newcountry = $_REQUEST['newcountry'];


mysqli_connect("localhost","root","") or die("Problem with connection...");

mysqli_select_db("parking");

mysqli_query("UPDATE users SET first_name='$newname', last_name='$newlast', password='$newpassword', contact=$newphone, country='$newcountry' WHERE email='$tmp_username' ");


echo "Your values have been updated succesfully!";
header("Refresh:2; url=profile.php");
mysqli_close();

?>
