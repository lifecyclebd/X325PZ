<?php
include("database_connect.php");

$fcm_token = $_POST['fcm_token'];
//$fcm_token = "Hello";

$sql = "insert into fcm_info values('".$fcm_token."');";
mysqli_query($conn,$sql);
mysqli_close($conn);
?>


