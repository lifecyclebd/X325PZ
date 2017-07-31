<?php
include("database_connect.php");

// $imageEncoded = $_POST['imageEncoded'];
//$pic_name = $_POST['pic_name'];

$phone = $_POST['phone'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$blood_group = $_POST['donorBlood'];
$birth_date = $_POST['birthDate'];
$age = $_POST['age'];
$last_donation = $_POST['last_donation'];
$new_donor = $_POST['new_donor'];
$gender = $_POST['gender'];
//$email = $_POST['email'];
$nationality = $_POST['nationality'];
$religion = $_POST['religion'];
$is_physically_disble = $_POST['is_physically_disble'];
$nid = $_POST['nid'];
$post_code = $_POST['post_code'];

$division = $_POST['division'];
$district = $_POST['district'];
$thana = $_POST['thana'];
$address = $_POST['address'];
$latitude = $_POST['latitude'];
$longitude = $_POST['longitude'];

// $phone = "01923999999";
// $firstName = "donor";
// $lastName = "two";
// $blood_group = "A+";
// $birth_date = "1989-07-29";
// $age = "28";
// $last_donation = "na";
// $new_donor = "1";
// $gender = "Male";
// //$email = "svg";
// $nationality = "na";
// $religion = "na";
// $is_physically_disble = "na";
// $nid = "na";
// $post_code = "na";
// $division = "Dhaka";
// $district = "Dhaka";
// $thana = "Dhamrai Upazila";
// $address = "Mohanagar Middle Road 2";
// $latitude = "23.7663848";
// $longitude = "90.4166142";


		$sql = "update donors set 
					fname = '".$firstName."',
					lname = '".$lastName."',
					blood_group = '".$blood_group."',
				
					birth_date = '".$birth_date."',
					age = '".$age."',
					last_donation = '".$last_donation."',
					new_donor = '".$new_donor."',
					gender = '".$gender."', 
					nationality = '".$nationality."',
					religion = '".$religion."',
					is_physically_disble = '".$is_physically_disble."',
					nid = '".$nid."',
					post_code = '".$post_code."',

					
					division = '".$division."',
					district = '".$district."',
					upazila = '".$thana."',
					address = '".$address."',
					latitude = '".$latitude."',
					longitude = '".$longitude."',
					lastLat = '".$latitude."',
					lastLng = '".$longitude."'
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