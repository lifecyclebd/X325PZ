<?php
require_once("database_connect.php");
	
	$all_user = array();
	$i = 0;
//pic_path,fname,lname,email,phone,birthDate,bloodgroup,location,latitude,longitude
	$sql = "select * from donors";
	$total = mysqli_query($conn, $sql);
	if(mysqli_num_rows($total)>=1){
		while($rows = mysqli_fetch_assoc($total)){
/*				$all_user[$i][0] = $rows['pic_path'];
				$all_user[$i][1] = $rows['fname'];
				$all_user[$i][2] = $rows['lname'];
				$all_user[$i][3] = $rows['email'];
				$all_user[$i][4] = $rows['phone'];
				$all_user[$i][5] = $rows['birthDate'];
				$all_user[$i][6] = $rows['bloodgroup'];
				$all_user[$i][7] = $rows['location'];
				$all_user[$i][8] = $rows['latitude'];
				$all_user[$i][9] = $rows['longitude'];*/
				$user = new User;
				$user->pic_path = $rows['pic_path'];
				$user->fname = $rows['fname'];
				$user->lname = $rows['lname'];
				$user->email = $rows['email'];
				$user->phone = $rows['phone'];
				$user->birthDate = $rows['birthDate'];
				$user->bloodgroup = $rows['bloodgroup'];
				$user->location = $rows['location'];
				$user->latitude = $rows['latitude'];
				$user->longitude = $rows['longitude'];
				//$all_usr[$i] = $user;
				//echo json_encode($user);
				array_push($all_user, $user);
			$i++;
		}

	}

	echo json_encode($all_user);

	mysqli_close($conn);

	class User{
		var $pic_path;
		var $fname;
		var $lname;
		var $email;
		var $phone;
		var $birthDate;
		var $bloodgroup;
		var $location;
		var $latitude;
		var $longitude;
	}



?>