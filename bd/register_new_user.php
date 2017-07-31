<?php
// Require the bundled autoload file - the path may need to change
// based on where you downloaded and unzipped the SDK
// require __DIR__ . '/twilio-php-master/Twilio/autoload.php';

// // Use the REST API Client to make requests to the Twilio REST API
// use Twilio\Rest\Client;

include("database_connect.php");

//$phone = "01523666666";

$phone = $_POST['phone'];
$password = "na";
$pic_path = "na";
$fname = "na";
$lname = "na";
$blood_group = "na";
$birth_date = "2017-07-14";
$age = 0;
$last_donation = "na";
$new_donor = 1;
$email = "na";
$division = "na";
$district = "na";
$upazila = "na";
$address = "na";
$latitude = "na";
$longitude = "na";


$code = $_POST['code'];
//$code = "43923";

$verification = "na";
$lastLat = "na";
$lastLng = "na";
$fcm_email = "na";
$fcm_uid = "na";
$fcm_token = "na";


$pro_visible = 1;
$called_date = "na";
$called_today = 0;
$donations_number = 0;
$user_type = "donor";
$gender = "na";
$already_donated = 0;
$autopro_visible = "na";
$singup_steps = 1;

$post_code = "na";

$imageEncoded = "na";
$post_code = "na";
$rank = 1;
$web_url = "na";
$fb_url = "na";
$profile_photo = "na";
$religion = "na";
$is_physically_disble = "na";
$nationality = "na";
$nid = "na";
$status = "na";

$d=mktime(11, 14, 54, 8, 12, 2014);
$d = date("Y-m-d h:i:s", $d);

$updated_at = $d;
$created_at = $d;
$updated_by = 1;
$created_by  = 1;


$sql_check = "select * from donors where phone = '".$phone."';";
$result = mysqli_query($conn,$sql_check);
if(mysqli_num_rows($result)>=1){

	$rows = mysqli_fetch_assoc($result);
	$singup_steps = $rows['singup_steps'];
	$verification = $rows['verification'];

	if($singup_steps == 1 && $verification == 0){

		$sql = "update donors set 
				code = '".$code."'
				where phone = '".$phone."';";
		if(mysqli_query($conn, $sql)){
			if(mysqli_affected_rows($conn) == 1)
				echo "inserted";
			else
				echo "error";
		}

	}else if($singup_steps == 2 &&  $verification == 1){
		echo "basicinfo";
	}else if($singup_steps == 3 &&  $verification == 1){
		echo "login";
	}

	//echo "exist";
	mysqli_close($conn);
}else{
	//send_sms();
//post_code,rank,web_url,fb_url,profile_photo,religion,is_physically_disble,nationality,nid,status,
	/*echo $sql = "insert into user_info(pic_path,fname,lname,email,phone,birthDate,bloodgroup,location,latitude,longitude,code,verification)
	values('".$pic_path."','".$firstName."','".$lastName."','".$email."','".$phone."','".$birthDate."','".$donorBlood."','".$location."','".$latitude."','".$longitude."','".$code."','0');";*/

	$sql = "insert into donors(phone,password,pic_path,fname,lname,blood_group,birth_date,age,last_donation,new_donor,email,division,district,upazila,address,
	latitude,longitude,code,verification,lastLat,lastLng,fcm_email,fcm_uid,fcm_token,pro_visible,called_date,called_today,donations_number,user_type,gender,
	already_donated,autopro_visible,singup_steps,post_code,rank,web_url,fb_url,profile_photo,religion,is_physically_disble,nationality,nid,status,
	updated_at,created_at,updated_by,created_by)
	values('".$phone."','".$password."','".$pic_path."','".$fname."','".$lname."','".$blood_group."','".$birth_date."','".$age."','".$last_donation."',
	'".$new_donor."','".$email."','".$division."','".$district."','".$upazila."','".$address."','".$latitude."','".$longitude."',
	'".$code."','".$verification."','".$lastLat."','".$lastLng."','".$fcm_email."','".$fcm_uid."','".$fcm_token."','".$pro_visible."',
	'".$called_date."','".$called_today."','".$donations_number."','".$user_type."','".$gender."','".$already_donated."',
	'".$autopro_visible."',
	'".$singup_steps."',
	'".$post_code."',
	'".$rank."',
	'".$web_url."',
	'".$fb_url."',
	'".$profile_photo."',
	'".$religion."',
	'".$is_physically_disble."',
	'".$nationality."',
	'".$nid."',
	'".$status."',
	'".$updated_at."',
	'".$created_at."',
	'".$updated_by."',
	'".$created_by."'
	);";
	

	
	if(mysqli_query($conn,$sql)){
		echo "inserted";
		
		// if(send_sms()){
		// 	echo "inserted";
		// }
		mysqli_close($conn);
	}

}

// function send_sms(){

// 		// Your Account SID and Auth Token from twilio.com/console
// 		$sid = 'ACe105d31e2dfc6cdfbf77d2a0e27c66c5';
// 		$token = 'b8ad5bdc8a7285263a2be9c32500b624';
// 		$client = new Client($sid, $token);
// 		global $phone,$code;
// 		try{
// 			// Use the client to do fun stuff like send text messages!
// 			$client->messages->create(
// 			    // the number you'd like to send the message to
// 			    //'+8801923589277',
// 			    "+88".$phone,
// 			    array(
// 			        // A Twilio phone number you purchased at twilio.com/console
// 			        'from' => '+18318244985',
// 			        // the body of the text message you'd like to send
// 			        'body' => "Blood Donation Verification Code: ".$code
// 			    )
// 			);
// 		}catch(Exception $e){
// 			//return false;
// 		}

		//return true;

//}

?>
