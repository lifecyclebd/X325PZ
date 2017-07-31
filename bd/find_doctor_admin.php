<?php
require_once("database_connect.php");

//User class
     class User{
          var $phone;
          var $password;
          var $pic_path;
          var $fname;
          var $lname;
          var $blood_group;
          var $birth_date;
          var $age;
          var $last_donation;
          var $new_donor; 
          var $email;
          var $division;
          var $district;
          var $upazila;
          var $address;
          var $latitude;
          var $longitude;
          var $code;
          var $verification;
          var $lastLat;
          var $lastLng;
          var $fcm_email;
          var $fcm_uid;
          var $fcm_token;
          var $pro_visible;
          var $called_date;
          var $called_today;
          var $donations_number;
          var $user_type;
          var $gender;
          var $already_donated;
          var $autopro_visible;
          var $singup_steps;
          var $post_code;
        var $rank;
        var $web_url;
        var $fb_url;
        var $religion;
        var $is_physically_disble;
        var $nationality;
        var $nid;
        var $status;
          
     }

 $phone = $_POST['phone'];
 $request_for = $_POST['request_for'];

//   $phone = "01923888888";
//  $request_for = "doctor";







// if( $request_for == "admin"){
     $query = "select * from donors where 
               phone = '".$phone."' and 
               user_type = 'donor' and 
               singup_steps = '3';"; 
// }else if( $request_for == "doctor" ){
//       echo $query = "select * from donors where 
//               phone = '".$phone."' and 
//               user_type = 'doctor' and 
//               singup_steps = '3';"; 
// }

$result = mysqli_query($conn,$query) or die(mysqli_error());

if(mysqli_num_rows($result) == 0){
     echo "na";
     mysqli_close($conn);
}else{

     $all_user = array();
     $i = 0;

     while($rows = mysqli_fetch_assoc($result)) {
         //echo $rows['address']." > ".$rows['distance']*1.609344."<BR>";
               $user = new User;
               $user->phone = $rows['phone'];
               $user->password = $rows['password'];
               $user->pic_path = $rows['pic_path'];
               $user->fname = $rows['fname'];
               $user->lname = $rows['lname'];
               $user->blood_group = $rows['blood_group'];
               $user->birth_date = $rows['birth_date'];
               $user->age = $rows['age'];
               $user->last_donation = $rows['last_donation'];
               $user->new_donor = $rows['new_donor'];
               $user->email = $rows['email'];

               $user->division = $rows['division'];
               $user->district = $rows['district'];
               $user->address = $rows['address'];
               $user->upazila = $rows['upazila'];
               $user->latitude = $rows['latitude'];
               $user->longitude = $rows['longitude'];
               $user->code = $rows['code'];
               $user->verification = $rows['verification'];
               $user->lastLat = $rows['lastLat'];
               $user->lastLng = $rows['lastLng'];
               $user->fcm_email = $rows['fcm_email'];
               $user->fcm_uid = $rows['fcm_uid'];
               $user->fcm_token = $rows['fcm_token'];
               
               $user->pro_visible = $rows['pro_visible'];
               $user->called_date = $rows['called_date'];
               $user->called_today = $rows['called_today'];
               $user->donations_number = $rows['donations_number'];
               $user->user_type = $rows['user_type'];
               $user->gender = $rows['gender'];
               $user->already_donated = $rows['already_donated'];
               $user->autopro_visible = $rows['autopro_visible'];
               $user->singup_steps = $rows['singup_steps'];
               
               $user->post_code = $rows['post_code'];
               $user->rank = $rows['rank'];
               $user->web_url = $rows['web_url'];
               $user->fb_url = $rows['fb_url'];
               $user->religion = $rows['religion'];
               $user->is_physically_disble = $rows['is_physically_disble'];
               $user->nationality = $rows['nationality'];
               $user->nid = $rows['nid'];
               $user->status = $rows['status'];
               
               //$all_usr[$i] = $user;
               //echo json_encode($user);
               array_push($all_user, $user);
               $i++;
     }

     	if( $request_for == "admin"){
    	$sql = "update donors set 
			user_type = 'admin'
			where phone = '".$phone."' and user_type = 'donor';";
		} else if( $request_for == "doctor"){
    	$sql = "update donors set 
			user_type = 'doctor'
			where phone = '".$phone."' and user_type = 'donor';";
		}
		if(mysqli_query($conn, $sql)){
			if(mysqli_affected_rows($conn) == 1)
				echo json_encode($all_user);
			else
				echo "error";
		}

       
         mysqli_close($conn);

}

?>