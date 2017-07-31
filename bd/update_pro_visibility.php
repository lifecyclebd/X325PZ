<?php
require_once("database_connect.php");
$phone = $_POST['phone'];
$autopro_visible = $_POST['autopro_visible'];

// $phone = "01922222222";
// $autopro_visible = "22-10-2017";

$sql_check = "select * from donors where phone = '".$phone."';";
$result = mysqli_query($conn,$sql_check);
if(mysqli_num_rows($result)>=1){
	$rows = mysqli_fetch_assoc($result);
	$visibledate = $rows['autopro_visible'];

	$visibledate = strtotime($visibledate);
	$autopro_visible = strtotime($autopro_visible);

	if($autopro_visible >= $visibledate){
			$sql = "update donors set 
			autopro_visible = '".$autopro_visible."',
			pro_visible = 1 
			where phone = '".$phone."'";
			if(mysqli_query($conn, $sql)){
				if(mysqli_affected_rows($conn) == 1)
					echo "updated";
				else
					echo "error";
			}
	}
	
}

mysqli_close($conn);



?>