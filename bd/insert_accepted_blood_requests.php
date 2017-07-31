<?php

include("database_connect.php");



$request_phone = $_POST['request_phone'];
$request_blood = $_POST['request_blood'];
$accepted_phone = $_POST['accepted_phone'];
$accepted_time = date("Y-m-d H:i:s");


// $request_phone = "01923666666";
// $request_blood = "A+";
// $accepted_phone = "01923111111";
// $request_address = "Dhaka - Sylhet Hwy, Dhaka, Bangladesh";
// $accepted_time = date("Y-m-d H:i:s");

$d=mktime(11, 14, 54, 8, 12, 2014);
$d = date("Y-m-d h:i:s", $d);

$updated_at = $d;
$created_at = $d;
$updated_by = 1;
$created_by  = 1;

   $sql = "insert into accepted_blood_requests(
	request_phone,request_blood,accepted_phone,accepted_time,updated_at,created_at,updated_by,created_by)
	values(
		'".$request_phone."',
		'".$request_blood."',
		'".$accepted_phone."',
		'".$accepted_time."',
		'".$updated_at."',
		'".$created_at."',
		'".$updated_by."',
		'".$created_by."');";

	if(mysqli_query($conn, $sql)){
		if(mysqli_affected_rows($conn) == 1)
			echo "success";
		else
			echo "error";
	}


?>