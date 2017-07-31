<?php
require_once("database_connect.php");

//DonorList class
     class DonorList{
          var $id;
          var $donor_phone;
          var $admin_phone;
          var $pic_path;
          var $name;
          var $address; 
          var $lastmsgtime;     
     }



$admin_phone = $_POST['admin_phone'];
// $admin_phone = "01923666666";

$query = "SELECT id,donor_phone,admin_phone,pic_path,name,address,UNIX_TIMESTAMP(lastmsgtime) AS position FROM adminchatlist where admin_phone = '".$admin_phone."' order by position DESC;";

$result = mysqli_query($conn,$query) or die(mysqli_error());

$donorlist = array();
$i = 0;

while($rows = mysqli_fetch_assoc($result)) {
    //echo $rows['address']." > ".$rows['distance']*1.609344."<BR>";
          $donor = new DonorList;
          $donor->id = $rows['id'];
          $donor->donor_phone = $rows['donor_phone'];
          $donor->admin_phone = $rows['admin_phone'];
          $donor->pic_path = $rows['pic_path'];
          $donor->name = $rows['name'];
          $donor->address = $rows['address'];
          $donor->lastmsgtime = $rows['position'];

          array_push($donorlist, $donor);
          $i++;
}

     echo json_encode($donorlist);
     mysqli_close($conn);



?>