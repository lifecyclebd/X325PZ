<?php
// Require the bundled autoload file - the path may need to change
// based on where you downloaded and unzipped the SDK
require __DIR__ . '/twilio-php-master/Twilio/autoload.php';

// Use the REST API Client to make requests to the Twilio REST API
use Twilio\Rest\Client;

include("database_connect.php");


$phone = $_POST['phone'];
//$phone = "01923589277";
$code = $_POST['code'];
//$code = "23456";

		// Your Account SID and Auth Token from twilio.com/console
		$sid = 'ACe105d31e2dfc6cdfbf77d2a0e27c66c5';
		$token = 'b8ad5bdc8a7285263a2be9c32500b624';
		$client = new Client($sid, $token);
		global $phone,$code;
		try{
			// Use the client to do fun stuff like send text messages!
			$client->messages->create(
			    // the number you'd like to send the message to
			    //'+8801923589277',
			    "+88".$phone,
			    array(
			        // A Twilio phone number you purchased at twilio.com/console
			        'from' => '+18318244985',
			        // the body of the text message you'd like to send
			        'body' => "Blood Donation Verification Code: ".$code
			    )
			);
		}catch(Exception $e){
			
		}

		


?>
