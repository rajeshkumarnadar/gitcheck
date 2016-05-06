<?php
/*echo phpinfo();
exit;*/
	// Authorisation details.

function sendsms()
{
	$username = "rajeshkumar.nadar@inscripts.com";
	$hash = "87e467abef2bdaf7a4bf088799240deb794cace0";

	// Config variables. Consult http://api.textlocal.in/docs for more info.
	$test = "1";
	$custom = "MCts1";
	// Amol - 918796881501
	// Data for text message. This is the text message data.
	$sender = "TXTLCL"; // This is who the message appears to be from.
	$numbers = "919773353778"; // A single number or a comma-seperated list of numbers
	$message = "This is a test message from the PHP API script.";
	// 612 chars or less
	// A single number or a comma-seperated list of numbers
	$message = urlencode($message);
	$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
	$ch = curl_init('http://api.textlocal.in/send/?');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch); // This is the result from the API
	curl_close($ch);
	print_r(json_decode($result,true));
}

 sendsms();

function capturerecipt()
{
	$number   = $_POST['number'];
	$status   = $_POST['status'];
	$customID = $_POST['customID'];
	$datetime = $_POST['datetime'];
}


?> 