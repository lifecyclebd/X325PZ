<?php
require_once("database_connect.php");

//User class
     class User{

          var $phone;
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
          
     }
$phone = $_POST['phone'];
$donorBlood = $_POST['donorBlood'];
$uDivision = $_POST['uDivision'];
$uDistrict = $_POST['uDistrict'];
$uThana = $_POST['uThana'];

// $phone = "01923589277";
// $donorBlood = "A+";
// $uDivision = "Dhaka";
// $uDistrict = "Dhaka";
// $uThana = "Dhamrai Upazila";

$query = "select * from donors where
                phone != '".$phone."' and
                pro_visible = 1 and
                user_type != 'doctor' and 
              user_type != 'admin' and 
               blood_group = '".$donorBlood."' and
               division = '".$uDivision."' and
               district = '".$uDistrict."' and
               upazila = '".$uThana."'"; 

$result = mysqli_query($conn,$query) or die(mysqli_error());

$all_user = array();
$i = 0;

while($rows = mysqli_fetch_assoc($result)) {
    //echo $rows['address']." > ".$rows['distance']*1.609344."<BR>";
          $user = new User;
          $user->phone = $rows['phone'];
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
          $user->upazila = $rows['upazila'];
          $user->address = $rows['address'];
          $user->latitude = $rows['latitude'];
          $user->longitude = $rows['longitude'];
     
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
          //$all_usr[$i] = $user;
          //echo json_encode($user);
          array_push($all_user, $user);
          $i++;
}

     echo json_encode($all_user);
     mysqli_close($conn);



?>