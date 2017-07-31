<?php
include("database_connect.php");

// $imageEncoded = $_POST['imageEncoded'];
$pic_name = $_POST['pic_name'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$blood_group = $_POST['donorBlood'];
$phone = $_POST['phone'];
$birth_date = $_POST['birthDate'];
$age = $_POST['age'];
$last_donation = $_POST['last_donation'];
$new_donor = $_POST['new_donor'];
$email = $_POST['email'];
$password = $_POST['password'];
$division = $_POST['division'];
$district = $_POST['district'];
$upazila= $_POST['upazila'];
$address = $_POST['address'];
$latitude = $_POST['latitude'];
$longitude = $_POST['longitude'];
$gender = $_POST['gender'];
$singup_steps = '3';

//echo getcwd();

// $imageEncoded = "";
// $firstName = "ashik";
// $lastName = "mizi";
// $blood_group = "A positive (A+)";
// $phone = "01823555566";
// $birth_date = "27-05-2017";
// $age = "27";
// $last_donation = "27-05-2017";
// $new_donor = "1";
// $email = "fhjjgghn";
// $password = "anisur";
// $division = "Dhaka";
// $district = "Bagerhat";
// $thana = "thana";
// $address = "Mouchak";
// $latitude = "23.761226";
// $longitude = "90.420766"; 
// $gender = "Male";
// $singup_steps = '3';




//$code = "1345";
//$verification = 0;


$lastLat = $latitude;
$lastLng = $longitude;

$upload_dir = "http://mizianis.com/BloodDonation/profileImages/". $pic_name;
// $local_path = "/home/mizianis/public_html/BloodDonation/profileImages/". $pic_name;
 
// $img = str_replace('data:image/png;base64,', '', $imageEncoded);
// $img = str_replace(' ', '+', $img);
// $data = base64_decode($img);
// //$file = $UPLOAD_DIR . $firstName . '.jpg';
// $success = file_put_contents($local_path, $data);
// //echo $success ? "uploaded" : 'Unable to save the file.';
// if($success){
	// $sql = "insert into user_info(pic_path,fname,lname,email,phone,birthDate,bloodgroup,address,division,district,latitude,longitude,code,verification,lastLat,lastLng,profile_photo)
	// values('".$upload_dir."','".$firstName."','".$lastName."','".$email."','".$phone."','".$birthDate."','".$donorBlood."','".$address."','".$division."','".$district."','".$latitude."','".$longitude."','".$code."','".$verification."','".$lastLat."','".$lastLng."');";

		$sql = "update donors set 
					pic_path = '".$upload_dir."',
					fname = '".$firstName."',
					lname = '".$lastName."',
					blood_group = '".$blood_group."',
				
					birth_date = '".$birth_date."',
					age = '".$age."',
					last_donation = '".$last_donation."',
					new_donor = '".$new_donor."',
					
					email = '".$email."',
					password = '".$password."',
					division = '".$division."',
					district = '".$district."',
					upazila = '".$upazila."',
					address = '".$address."',
					latitude = '".$latitude."',
					longitude = '".$longitude."',
					lastLat = '".$lastLat."',
					lastLng = '".$lastLng."',
					gender = '".$gender."', 
					singup_steps = '".$singup_steps."',
					profile_photo = '".$upload_dir."'
					where phone = '".$phone."';";


	if(mysqli_query($conn,$sql)){
		if(mysqli_affected_rows($conn) == 1)
			echo "Successful";
	}else{
		echo "Error";
	}
	mysqli_close($conn);

// }else{
// 	echo "ImageError";
// }



?>