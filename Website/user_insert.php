
<?php

$name = $_POST['name'];
$last = $_POST['last'];
$email = $_POST['email'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];
$contact = $_POST['contact'];
$country = $_POST['country'];


$f=0;
$sql=mysqli_connect("localhost","root","","parking") or die("Problem with connection...");


/*$query = mysql_query("SELECT * FROM users");
while($row=mysql_fetch_assoc($query))
{
	$user_email=$row['email'];
	if($email==$user_email)
	{

		echo "This Email has already taken<br />
		Please enter another valid Email<br />";
		$f=1;
	}
}*/

if ($name && $last && $password && $cpassword && $email && $contact && $country && $f==0) {

if (preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i", $email)) {

	if(preg_match("/^[0-9]{10}$/", $contact)){

		if (strlen($password) > 5) {

			if ($password == $cpassword) {

            $sql=mysqli_connect("localhost", "root", "","parking") or die("We couldn't connect!");

            $username = mysqli_query($sql,"SELECT contact FROM users WHERE contact=$contact");
            $count = mysqli_num_rows($username);
            $remail = mysqli_query($sql,"SELECT email FROM users WHERE email='$email'");
            $checkemail = mysqli_num_rows($remail);

            if ($checkemail != 0) {

                echo "This email is already registered! Please type another email...";
            } else {


                if ($count != 0) {

                    echo "This phone number is already registered! Please type another number";
                } else {



						$passwordmd5 = md5($password);
						mysqli_query($sql,"INSERT INTO users VALUES('$name','$last','$email','$password','$contact','$country')");

						mysqli_close();
						echo "<h1><center>You have succefully registered!<a href='index.php'>Login now!</a></center></h1>";



					}
                }
            }
			else {
            echo "Your passwords don't match!";
			}
    } else {

        echo "Your password is too short! You need to type a password between 4 and 15 charachters!";
    }

	}else
	{
		echo "Please type a valid phone number!";
	}

	}else{
			echo "Please type a valid email!";
	}
} else {
    echo "you have to complete the form!";
}


//include("cust_reg_link.php");

?>
