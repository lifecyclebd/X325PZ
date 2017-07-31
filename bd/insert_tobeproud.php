<?php

include("database_connect.php");

//$phone = "01923589279";

$phone = $_POST['phone'];
$comment = $_POST['comment'];

//$share_date = $_POST['share_date'];

//$imageEncoded = $_POST['imageEncoded'];
$pic_name = $_POST['pic_name'];

//$local_path = "/home/mizianis/public_html/BloodDonation/proudImages/". $pic_name;
$pic_path = "http://mizianis.com/BloodDonation/proudImages/". $pic_name;

//$pic_path = "proudImages/". $pic_name;

// $img = str_replace('data:image/png;base64,', '', $imageEncoded);
// $img = str_replace(' ', '+', $img);
// $data = base64_decode($img);
// //$file = $UPLOAD_DIR . $firstName . '.jpg';
// $success = file_put_contents($local_path, $data);

// if($success){

	$sql = "insert into tobeproud(phone,comment,pic_path,share_date)
	values('".$phone."','".$comment."','".$pic_path."','".date("Y-m-d H:i:s")."');";
	if(mysqli_query($conn,$sql)){
		//echo "inserted";
		if(mysqli_affected_rows($conn) == 1)
			echo "inserted";
		else
			echo "error";
	}
	mysqli_close($conn);

// }else
// 	echo "error";


?>
