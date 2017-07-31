<?php
require_once("database_connect.php");

$phone = '0'.$_POST['phone'];
$pro_visible = $_POST['pro_visible'];
$last_donation = $_POST['last_donation'];

// $phone = "01923589277";
// $fcm_email = "test@gmail.com";
// $fcm_uid = "12345678";


	$sql = "update donors set 
	pro_visible = '".$pro_visible."',
	last_donation = '".$last_donation."'
	 where phone = '".$phone."'";
	if(mysqli_query($conn, $sql)){
		echo "updated";
	}


?>