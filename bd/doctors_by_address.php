<?php
require_once("database_connect.php");

//User class
     class Doctor{
		  var $id;
          var $name;
          var $designation;
          var $hospital;
          var $speacilist;
          var $division;
          var $district;
          var $upazila;
          var $phone;
          var $email; 
          var $gender;
          var $profile_photo;
          var $preasent_address;
          var $doctor_detail;
          var $chamber_address;
          
     }

// $phone = $_POST['phone'];
$speacilist = $_POST['speacilist'];
$division = $_POST['division'];
$district = $_POST['district'];
$upazila = $_POST['upazila'];

// $speacilist = "Neurology";
// $division = "Dhaka";
// $district = "Dhaka";
// $upazila = "Adabor";


    $query = "select * from doctors where 
               speacilist = '".$speacilist."' and
               division = '".$division."' and
               district = '".$district."' and
               upazila = '".$upazila."';"; 

$result = mysqli_query($conn,$query) or die(mysqli_error());

$all_doctor = array();
$i = 0;

while($rows = mysqli_fetch_assoc($result)) {
    //echo $rows['address']." > ".$rows['distance']*1.609344."<BR>";
          $doctor = new Doctor;
          $doctor->id = $rows['id'];
          $doctor->name = $rows['name'];
          $doctor->designation = $rows['designation'];
          $doctor->hospital = $rows['hospital'];
          $doctor->speacilist = $rows['speacilist'];
          $doctor->division = $rows['division'];
          $doctor->district = $rows['district'];
          $doctor->upazila = $rows['upazila'];
          $doctor->phone = $rows['phone'];
          $doctor->email = $rows['email'];
          
          $doctor->gender = $rows['gender'];
          $doctor->profile_photo = $rows['profile_photo'];
          $doctor->preasent_address = $rows['preasent_address'];
          $doctor->doctor_detail = $rows['doctor_detail'];
          $doctor->chamber_address = $rows['chamber_address'];
          
          array_push($all_doctor, $doctor);
          $i++;
}

     echo json_encode($all_doctor);
     mysqli_close($conn);



?>