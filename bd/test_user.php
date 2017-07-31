<?php
include("database_connect.php");

// $firstName = $_POST['firstName'];
// $lastName = $_POST['lastName'];
// $email = $_POST['email'];
// $phone = $_POST['phone'];
// $birthDate = $_POST['birthDate'];
// $donorBlood = $_POST['donorBlood'];
// $location = $_POST['location'];
// $latitude = $_POST['latitude'];
// $longitude = $_POST['longitude'];
$firstName = "hi";
$lastName = "hi";
$email = "hi";
$phone = "hi";
$birthDate = "hi";
$donorBlood = "hi";
$location = "hi";
$latitude = "hi";
$longitude = "hi";


//echo $success ? "uploaded" : 'Unable to save the file.';

$sql = "insert into user_test(fname,lname,email,phone,birthDate,bloodgroup,location,latitude,longitude)
values('".$firstName."','".$lastName."','".$email."','".$phone."','".$birthDate."','".$donorBlood."','".$location."','".$latitude."','".$longitude."');";

if(mysqli_query($conn,$sql)){
	echo "Successful";
}else{
	echo "Error";
}
mysqli_close($conn);



?>