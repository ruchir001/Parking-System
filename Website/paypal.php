<?php
include("user_booking_detail.php");
mysqli_connect("localhost","root","","parking");


//Set useful variables for paypal form
$paypalURL = 'https://www.sandbox.paypal.com/cgi-bin/webscr'; //Test PayPal API URL
$paypalID = 'chachan.aayush529-facilitator@gmail.com'; //Business Email

?>
<?php
    //Fetch products from the database
	echo "<br />";
echo "<br />";
echo "<br />";
echo "<br />";
echo "<br />";
echo "<br />";
echo "<br />";

	echo "<center><h1> ORDER DETAILS </h1></center>";

    if($tmp_slot<41)
	{
		$amount=50;
	}
	else
	{
		$amount=25;
	}
	?>
    <center> Venue: <?php echo $tmp_building; ?>
	<center> Day: <?php echo $tmp_day; ?>
	<center> Slot: <?php echo $tmp_slot; ?>
    <center> Price: <?php echo $amount; ?>
    <form action="<?php echo $paypalURL; ?>" method="post">
        <!-- Identify your business so that you can collect the payments. -->
        <input type="hidden" name="business" value="<?php echo $paypalID; ?>">


        <!-- Specify details about the item that buyers will purchase. -->
        <input type="hidden" name="cmd" value="_cart">
        <input type="hidden" name="upload" value="1">
        <input type="hidden" name="message" value="<?php echo $tmp_username; ?>">
        <input type="hidden" name="item_name_1" value="<?php echo $tmp_day; ?>">
        <input type="hidden" name="amount_1" value="<?php echo $amount; ?>">
        <input type="hidden" name="quantity_1" value="1">

        <!-- Specify URLs -->
        <input type='hidden' name='cancel_return' value='http://localhost/software1/success.php'>
        <input type='hidden' name='return' value='http://localhost/software1/cancel.php'>

        <!-- Display the payment button. -->
		<br />
        <input type="submit" name="submit" border="0" value="PAY by PayPal">

    </form>
