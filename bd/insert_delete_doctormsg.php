<?php

include("database_connect.php");



$request_from = $_POST['request_from'];
$request_type = $_POST['request_type'];
$id = $_POST['id'];

// $request_from = "doctor";
// $request_type = "update";
// $id = "na";


// $donor_phone = $_POST['donor_phone'];
// $donor_pic_path = $_POST['donor_pic_path'];
// $donor_name = $_POST['donor_name'];
// $donor_message = $_POST['donor_message'];
// $donor_message_time = date("Y-m-d H:i:s");
// $donor_fcm = $_POST['donor_fcm'];
// $donor_uid = $_POST['donor_uid'];
// $donor_token = $_POST['donor_token'];
// $donor_age = $_POST['donor_age'];
// $doctor_phone = $_POST['doctor_phone'];
// $doctor_pic_path = $_POST['doctor_pic_path'];
// $doctor_name = $_POST['doctor_name'];
// $doctor_reply = $_POST['doctor_reply'];
// $doctor_reply_time = date("Y-m-d H:i:s");
// $doctor_fcm = $_POST['doctor_fcm'];

// $doctor_uid = $_POST['doctor_uid'];
// $doctor_token = $_POST['doctor_token'];
// $doctor_deleted = $_POST['doctor_deleted'];
// $donor_deleted = $_POST['donor_deleted'];


// $request_from = "doctor";
// $request_type = "update";
// $phone = "01523589277";
// $id = "4";
// $reply = "Take Rest";
// $reply_time = "16-07-2017 09:22:09pm";


if($request_from == "both" && $request_type == "insert"){

$donor_phone = $_POST['donor_phone'];
$donor_pic_path = $_POST['donor_pic_path'];
$donor_name = $_POST['donor_name'];
$donor_message = $_POST['donor_message'];
$donor_message_time = date("Y-m-d H:i:s");
$donor_fcm = $_POST['donor_fcm'];
$donor_uid = $_POST['donor_uid'];
$donor_token = $_POST['donor_token'];
$donor_age = $_POST['donor_age'];
$doctor_phone = $_POST['doctor_phone'];
$doctor_pic_path = $_POST['doctor_pic_path'];
$doctor_name = $_POST['doctor_name'];
$doctor_reply = $_POST['doctor_reply'];
$doctor_reply_time = date("Y-m-d H:i:s");
$doctor_fcm = $_POST['doctor_fcm'];

$doctor_uid = $_POST['doctor_uid'];
$doctor_token = $_POST['doctor_token'];
$doctor_deleted = 0;
$donor_deleted = 0;

// $donor_phone = "01921111111";
// $donor_pic_path = "http://mizianis.com/BloodDonation/profileImages/trust20170725_203135.jpg";
// $donor_name = "trust me";
// $donor_message = "fggfh";
// $donor_message_time = date("Y-m-d H:i:s");
// $donor_fcm = "fggfh";
// $donor_uid = "na";
// $donor_token = "dGmtA7aSWZs:APA91bFK-AN7pBHggWZZfyKC345a6KYx2J5_EWdgoG4wPBg31osmCF1m_KFvFAnB2c0OvsAdLEsT6niLg2Z8fRju9JIW-IqkpH4BNFD-n2HuobuBPK4TDXPF6vHE5YGYAuAInSAwHkTz";
// $donor_age = 21;
// $doctor_phone = "01923589299";
// $doctor_pic_path = "http://mizianis.com/BloodDonation/profileImages/ahad20170724_175206.jpg";
// $doctor_name = "ahad mizi";
// $doctor_reply = "na";
// $doctor_reply_time = date("Y-m-d H:i:s");
// $doctor_fcm = "d@life.com";

// $doctor_uid = "qgqsmhJwSbMT52vwDcxLVp7V9662";
// $doctor_token = "cNkAlme5W30:APA91bHIWoqBbxywhWTqMQYN71rI4RJUcx8vFhuYaPF8L6roUvKzeOorwtGnMdQdWwsmjEoY4sqJKmkJVbK4pKMVAjMk6YJOta1tlq1mRPSkWOl8RLE5rOv5YU0tlbXNXQTag2dXQ0WH";
// $doctor_deleted = 0;
// $donor_deleted = 0;



// $query = "SELECT id,UNIX_TIMESTAMP(donor_message_time) AS last_message FROM doctor_message 
// where donor_phone = '".$donor_phone."' and
// doctor_phone = '".$doctor_phone."'
// order by last_message DESC;";

// $result = mysqli_query($conn,$query);
// $rows = mysqli_fetch_assoc($result);
// if($rows['doctor_reply'] == "na"){
//     	$sql = "update doctor_message set 
// 	patient_deleted = 1
// 	 where id = '".$id."' and 
// 	 donor_phone = '".$donor_phone."' and 
// 	 doctor_phone = '".$doctor_phone."';";
// }



	$sql = "insert into doctor_message(
	donor_phone,donor_pic_path,donor_name,donor_message,donor_message_time,
	donor_fcm,donor_uid,donor_token,donor_age,
	doctor_phone,doctor_pic_path,
	doctor_name,doctor_reply,doctor_reply_time,doctor_fcm,
	doctor_uid,doctor_token,doctor_deleted,donor_deleted)
	values(
		'".$donor_phone."',
		'".$donor_pic_path."',
		'".$donor_name."',
		'".$donor_message."',
		'".$donor_message_time."',

		'".$donor_fcm."',
		'".$donor_uid."',
		'".$donor_token."',
		'".$donor_age."',
		'".$doctor_phone."',

		'".$doctor_pic_path."',
		'".$doctor_name."',
		'".$doctor_reply."',
		'".$doctor_reply_time."',

		'".$doctor_fcm."',
		'".$doctor_uid."',
		'".$doctor_token."',
		'".$doctor_deleted."',
		'".$donor_deleted."');";
}else if($request_from == "patient" && $request_type == "update"){
	$donor_phone = $_POST['donor_phone'];
	$doctor_phone = $_POST['doctor_phone'];
	
// 	$donor_phone = "01721335585";
// 	$doctor_phone = "01923589299";


	$sql = "update doctor_message set 
	donor_deleted = 1
	 where donor_phone = '".$donor_phone."' and 
	 doctor_phone = '".$doctor_phone."';";

}/*else if($request_from == "doctor" && $request_type == "reply"){
// 	$donor_phone = $_POST['donor_phone'];
// 	$doctor_phone = $_POST['doctor_phone'];
// 	$doctor_reply_time = date("Y-m-d H:i:s");
// 	$doctor_reply = $_POST['doctor_reply'];
	
	$donor_phone = $_POST['donor_phone'];
$donor_pic_path = $_POST['donor_pic_path'];
$donor_name = $_POST['donor_name'];
$donor_message = $_POST['donor_message'];
$donor_message_time = date("Y-m-d H:i:s");
$donor_fcm = $_POST['donor_fcm'];
$donor_uid = $_POST['donor_uid'];
$donor_token = $_POST['donor_token'];
$donor_age = $_POST['donor_age'];
$doctor_phone = $_POST['doctor_phone'];
$doctor_pic_path = $_POST['doctor_pic_path'];
$doctor_name = $_POST['doctor_name'];
$doctor_reply = $_POST['doctor_reply'];
$doctor_reply_time = date("Y-m-d H:i:s");
$doctor_fcm = $_POST['doctor_fcm'];

$doctor_uid = $_POST['doctor_uid'];
$doctor_token = $_POST['doctor_token'];
$doctor_deleted = 0;
$donor_deleted = 0;

	$sql = "update doctor_message set 
	doctor_reply = '".$doctor_reply."',
	doctor_reply_time = '".$doctor_reply_time."'
	where id = '".$id."' and 
	 donor_phone = '".$donor_phone."' and 
	 doctor_phone = '".$doctor_phone."';";
}*/else if($request_from == "doctor" && $request_type == "update"){
	$donor_phone = $_POST['donor_phone'];
	$doctor_phone = $_POST['doctor_phone'];
	
// 	$donor_phone = "01922222222";
// 	$doctor_phone = "01523222222";

	$sql = "update doctor_message set 
	doctor_deleted = 1
	where donor_phone = '".$donor_phone."' and 
	 doctor_phone = '".$doctor_phone."';";
}

$success = 0;
	if(mysqli_query($conn, $sql)){
		if(mysqli_affected_rows($conn) >= 1)
			$success = 1;
		else
			echo "error";
	}

	if($success == 1 && $request_type != "insert"){
			$donor_phone = $_POST['donor_phone'];
			$doctor_phone = $_POST['doctor_phone'];
			
// 	$donor_phone = "01922222222";
// 	$doctor_phone = "01523222222";

		     $query = "select * from doctor_message where 
	 donor_phone = '".$donor_phone."' and 
	 doctor_phone = '".$doctor_phone."';";

                     $result = mysqli_query($conn,$query);

					if(mysqli_num_rows($result) != 0){
					     $rows = mysqli_fetch_assoc($result);
    
    					     if($rows['doctor_deleted'] == 1 && $rows['donor_deleted'] == 1 ){
    					     		$donor_phone = $_POST['donor_phone'];
    								$doctor_phone = $_POST['doctor_phone'];
    								// 	$donor_phone = "01922222222";
	           //                         $doctor_phone = "01523222222";
    
    					     	$query1 = "delete from doctor_message where 
    								 donor_phone = '".$donor_phone."' and 
    								 doctor_phone = '".$doctor_phone."';";
    
                         			mysqli_query($conn, $query1);
    
    					
    
    					     }
					     
					     echo "success";
					     
					}
	}else if($success == 1 && $request_type == "insert"){
		echo "success";
	}



	mysqli_close($conn);




?>
