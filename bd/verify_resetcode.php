<?php
require_once("database_connect.php");
$phone = $_POST['phone'];
//$phone = "01923589277";
$code = $_POST['code'];
//$code = "23456";

	$sql =  "select * from donors where 
				phone = '".$phone."' and 
				code = '".$code."' 
				;";

	$result = mysqli_query($conn,$sql);
	if(mysqli_num_rows($result) == 1){
		echo "found";
	
	}else{
		echo "not found";
	}

	mysqli_close($conn);


?>