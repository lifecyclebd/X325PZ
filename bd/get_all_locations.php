<?php
include("database_connect.php");

//User class
     class Locations_Info{
          var $division;
          var $district;
          var $thana;
     }

    $division = $_POST['division'];
 	$district = $_POST['district'];

 	// $division = "Dhaka";
 	// $district = "na";

 	if($district == "na"){
 		$query = "select * from locations where 
               division = '".$division."' group by district;";
 	}else{
 		$query = "select * from locations where 
               division = '".$division."' and
               district = '".$district."';";
 	}
	//$query = "select * from locations"; 

	$result = mysqli_query($conn,$query) or die(mysqli_error());
	$total = mysqli_num_rows($result);
	// if($total == 0){
	// 	echo "na";
	// }else{
		$all_locations = array();
		

		while ( $rows = mysqli_fetch_assoc($result)) {
		  $Locations_Info = new Locations_Info;
	      $Locations_Info->division = $rows['division'];
	      $Locations_Info->district = $rows['district'];
	      $Locations_Info->thana = $rows['thana'];

	      array_push($all_locations, $Locations_Info); 
	    }     
	         
	     echo json_encode($all_locations);
	     
	//}
	mysqli_close($conn);



?>