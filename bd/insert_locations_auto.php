<?php
require_once("database_connect.php");

$sql = "select division_name,district_name,upazila_name from divisions inner join districts inner join upazilas where 
    division_name = 'Dhaka' and 
	district_name = 'Shariatpur' and 
	district_row_id = 15 
	group by upazila_name;";

	$result = mysqli_query($conn,$sql) or die(mysqli_error());
	$total = mysqli_num_rows($result);
    $i = 0;
	while($rows = mysqli_fetch_assoc($result)) {
     $query = "insert into locations(division,district,thana) values(
     '".$rows['division_name']."',
     '".$rows['district_name']."',
     '".$rows['upazila_name']."');"; 
     //mysqli_query($conn,$query);
     		if(mysqli_query($conn, $query)){
				if(mysqli_affected_rows($conn) == 1)
					$i++;

			}
	}
	echo $total." ".$i."</br>";
	if($total == $i){
	    echo "Success";
	}

	mysqli_close($conn);

?>