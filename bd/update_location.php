<?php
require_once("database_connect.php");
$phone = $_POST['phone'];
$latitude = $_POST['latitude'];
$longitude = $_POST['longitude'];
$address = $_POST['address'];

// if($phone == "na"){
// 	$phone = "0123";
// }

 // $phone = "01923589277";
 // $latitude = "23.7663034";
 // $longitude = "90.416605";
 // $address = "Mohanagar Middle Road 2";

	$sql = "update donors 
			set lastLat = '".$latitude."',
			lastLng = '".$longitude."'
			where phone = '".$phone."'";
	if(mysqli_query($conn, $sql)){
		echo "updated";
	}
	mysqli_close($conn);



?>