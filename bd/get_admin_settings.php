<?php
require_once("database_connect.php");

//User class
     class AdminSetting{
          var $hotline_phone;
          var $ambulance_phone;
          var $last_updated_at;
          var $last_updated_by;
          
     }

    $request_type = $_POST['request_type'];
    $update_hotline = $_POST['update_hotline'];
    $update_ambulance = $_POST['update_ambulance'];
    $last_updated_at = date("Y-m-d H:i:s");
    
    // $request_type = "update";
    // $update_hotline = "01923565656";
    // $update_ambulance = "na";
    // $last_updated_at = date("Y-m-d H:i:s");

    if($request_type == "read" && $update_hotline == "na" && $update_ambulance == "na"){

	    $query = "select * from admin_settings;"; 

	    $result = mysqli_query($conn,$query) or die(mysqli_error());

	    $settings_data = array();

	     $rows = mysqli_fetch_assoc($result);

	   $settings = new AdminSetting;
	   //echo $rows['hotline_phone']." ".$rows['ambulance_phone']." ".$rows['last_updated_at']." ".$rows['last_updated_by'];
	   $settings->hotline_phone = $rows['hotline_phone'];
	   $settings->ambulance_phone = $rows['ambulance_phone'];
	   $settings->last_updated_at = $rows['last_updated_at'];
	   $settings->last_updated_by = $rows['last_updated_by'];

	   array_push($settings_data, $settings);
		echo json_encode($settings_data);


	}else if($request_type == "update" && $update_hotline != "na"){
		$hotline_phone = $_POST['update_hotline'];
    $last_updated_by = $_POST['last_updated_by'];
		
          $sql = "update admin_settings 
          set hotline_phone = '".$hotline_phone."',
          last_updated_at = '".$last_updated_at."',
          last_updated_by = '".$last_updated_by."';";
		if(mysqli_query($conn,$sql)){
			if(mysqli_affected_rows($conn) == 1)
				echo "hotlineupdated";
		}else{
			echo "Error";
		}
	}else if($request_type == "update" && $update_ambulance != "na"){
		$ambulance_phone = $_POST['update_ambulance'];
		$last_updated_by = $_POST['last_updated_by'];
          $sql = "update admin_settings 
          set ambulance_phone = '".$ambulance_phone."',
          last_updated_at = '".$last_updated_at."',
          last_updated_by = '".$last_updated_by."';";
		if(mysqli_query($conn,$sql)){
			if(mysqli_affected_rows($conn) == 1)
				echo "ambulanceupdated";
		}else{
			echo "Error";
		}
	}else if($request_type == "doctor_remove"){
		$doctor_phone = $_POST['doctor_phone'];
          $sql = "update donors 
          set user_type = 'donor' 
          where phone = '".$doctor_phone."';";
		if(mysqli_query($conn,$sql)){
			if(mysqli_affected_rows($conn) == 1)
				echo "doctor_removed";
		}else{
			echo "Error";
		}
	}else if($request_type == "admin_remove"){
		$admin_phone = $_POST['admin_phone'];
          $sql = "update donors 
          set user_type = 'donor' 
          where phone = '".$admin_phone."';";
		if(mysqli_query($conn,$sql)){
			if(mysqli_affected_rows($conn) == 1)
				echo "admin_removed";
		}else{
			echo "Error";
		}
	}
    mysqli_close($conn);

?>