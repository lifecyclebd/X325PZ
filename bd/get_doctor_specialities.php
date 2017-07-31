<?php
include("database_connect.php");

     class Speciality{
          var $name;
     }

 		$sql = "select * from doctor_specialities;";

		$all_specialities = array();
		
        $result = mysqli_query($conn,$sql) or die(mysqli_error());
		while ( $rows = mysqli_fetch_assoc($result)) {
	      $specility = new Speciality;
	       $specility->name = $rows['name'];
	     

	      array_push($all_specialities, $specility); 
	    }     
	         
	     echo json_encode($all_specialities);
	     
	mysqli_close($conn);



?>