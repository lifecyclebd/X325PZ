<?php

include("database_connect.php");


$request_type = $_POST['request_type'];
//$request_type = "insert";

if($request_type == "insert"){
	$donor_phone = $_POST['donor_phone'];
	$admin_phone = $_POST['admin_phone'];
	$pic_path = $_POST['pic_path'];
	$name = $_POST['name'];
	$address = $_POST['address'];

	// $pic_path = "http://mizianis.com/BloodDonation/profileImages/ssd20170717_220256.jpg";
	// $name = "Ayesha Shiddik";
	// $phone = "01925823563";
	// $address = "Mohanagar Middle Rd 2, Dhaka 1212, Bangladesh";

    $sql_check = "select * from adminchatlist where donor_phone = '".$donor_phone."' and admin_phone = '".$admin_phone."';";
	$result = mysqli_query($conn,$sql_check);
	if(mysqli_num_rows($result)>=1){
		echo "exist";
	}else{

		// $pic_path = "http://mizianis.com/BloodDonation/profileImages/ssd20170717_220256.jpg";
		// $name = "Ayesha Shiddik";
		// $phone = "01925823563";
		// $address = "Mohanagar Middle Rd 2, Dhaka 1212, Bangladesh";


		$sql = "insert into adminchatlist(donor_phone,admin_phone,pic_path,name,address,lastmsgtime)
		values(
			'".$donor_phone."',
			'".$admin_phone."',
			'".$pic_path."',
			'".$name."',
			'".$address."',
			'".date("Y-m-d H:i:s")."');";

		if(mysqli_query($conn, $sql)){
			if(mysqli_affected_rows($conn) == 1)
				echo "inserted";
			else
				echo "error";
		}
	}
}else if($request_type == "delete"){
	$id = $_POST['id'];
	//$id = 1;

	$sql = "delete from adminchatlist where id = '".$id."';";

	if(mysqli_query($conn, $sql)){
		if(mysqli_affected_rows($conn) == 1)
			echo "deleted";
		else
			echo "error";
	}

}else if($request_type == "update"){
	$donor_phone = $_POST['donor_phone'];
	$admin_phone = $_POST['admin_phone'];

	$sql = "update adminchatlist set 
			lastmsgtime = '".date("Y-m-d H:i:s")."'
			where donor_phone = '".$donor_phone."' and 
			admin_phone = '".$admin_phone."';";

	if(mysqli_query($conn, $sql)){
		if(mysqli_affected_rows($conn) == 1)
			echo "updated";
		else
			echo "error";
	}

}


mysqli_close($conn);




?>
