<?php
require_once("database_connect.php");

//Hospital class
     class Hospital{

          var $pic_path;
          var $name;
          var $address;
          var $speciality;
          var $phone;
          var $latitude;
          var $longitude;
          var $division;
          var $district; 
          var $thana;
          
     }

$division = $_POST['division'];
$district = $_POST['district'];
$thana = $_POST['thana'];

// $division = 'Dhaka';
// $district = 'Dhaka';
// $thana = 'Sher-e-Bangla Nagar';

$query = "select * from apphospitals where 
               division = '".$division."' and
               district = '".$district."' and
               thana = '".$thana."'"; 

$result = mysqli_query($conn,$query) or die(mysqli_error());

$all_hospital = array();
$i = 0;

while($rows = mysqli_fetch_assoc($result)) {
    //echo $rows['address']." > ".$rows['distance']*1.609344."<BR>";
          $hospital = new Hospital;
          $hospital->pic_path = $rows['pic_path'];
          $hospital->name = $rows['name'];
          $hospital->address = $rows['address'];
          $hospital->speciality = $rows['speciality'];
          $hospital->phone = $rows['phone'];
          $hospital->latitude = $rows['latitude'];
          $hospital->longitude = $rows['longitude'];
          $hospital->division = $rows['division'];
          $hospital->district = $rows['district'];
          $hospital->thana = $rows['thana'];
          
          
          //$all_usr[$i] = $user;
          //echo json_encode($user);
          array_push($all_hospital, $hospital);
          $i++;
}

     echo json_encode($all_hospital);
     mysqli_close($conn);



?>