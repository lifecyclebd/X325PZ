<?php
require_once("database_connect.php");

$phone = $_POST['phone'];
$pro_visible = $_POST['pro_visible'];
$autopro_visible = $_POST['autopro_visible'];
$already_donated = $_POST['already_donated'];
$donations_number = $_POST['donations_number'];

// $phone = $_POST['phone'];
// $pro_visible = $_POST['pro_visible'];
// $autopro_visible = $_POST['autopro_visible'];

	$sql = "update donors set 
			pro_visible = '".$pro_visible."',
			autopro_visible = '".$autopro_visible."',
			already_donated = '".$already_donated."',
			donations_number = '".$donations_number."'
			where phone = '".$phone."';";
	if(mysqli_query($conn, $sql)){
		if(mysqli_affected_rows($conn) == 1)
			echo "updated";
		else
			echo "error";
	}


?>