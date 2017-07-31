<?php

include("database_connect.php");
// $imageEncoded = "";
                                           
// $pic_name = "uradura.jpg";

$phone = $_POST['phone'];
$imageEncoded = $_POST['imageEncoded'];
$pic_name = $_POST['pic_name'];
$new_pic_name = $_POST['new_pic_name'];

// $phone = "01855666666";
// $imageEncoded = "";
// $pic_name = "http://mizianis.com/BloodDonation/profileImages/teletalk20170722_175350.jpg";
// $new_pic_name = "teletalkil20170722_175904.jpg";

if($new_pic_name == "na"){
    $upload_dir = "http://mizianis.com/BloodDonation/profileImages/". $pic_name;
    $local_path = "/home/mizianis/public_html/BloodDonation/profileImages/". $pic_name;
}else{
    $upload_dir = "http://mizianis.com/BloodDonation/profileImages/". $new_pic_name;
    $local_path = "/home/mizianis/public_html/BloodDonation/profileImages/". $new_pic_name;
}
 
$img = str_replace('data:image/png;base64,', '', $imageEncoded);
$img = str_replace(' ', '+', $img);
$data = base64_decode($img);
//$file = $UPLOAD_DIR . $firstName . '.jpg';
$success = file_put_contents($local_path, $data);
//echo $success ? "uploaded" : 'Unable to save the file.';
if($success ===  FALSE ){
	echo "error";
}else{
    if($new_pic_name != "na"){
        $success = file_put_contents($local_path, $data);
        if($success ===  FALSE ){
        	echo "error";
        }else{
            echo $sql = "update donors set 
			pic_path = '".$upload_dir."'
			where phone = '".$phone."';";
        	if(mysqli_query($conn, $sql)){
        		if(mysqli_affected_rows($conn) == 1){
        		    $old_pic = "/home/mizianis/public_html/BloodDonation/profileImages/".filePath($pic_name)["basename"];
        		    //old_pic_local_path = filePath($pic_name);
        			  if (file_exists($old_pic)) {
                        if(unlink($old_pic))
                            echo 'updated';
                      } else {
                        echo 'updateerror';
                      }
        		}
        		else
        			echo "insideerror";
        	}
        }
    }else{
	    echo "uploaded";
    }
}

function filePath($filePath)
{
    $fileParts = pathinfo($filePath);
    
    if(!isset($fileParts['filename']))
    {$fileParts['filename'] = substr($fileParts['basename'], 0, strrpos($fileParts['basename'], '.'));}
     
    return $fileParts;
}

                    // if (file_exists("/home/mizianis/public_html/BloodDonation/profileImages/teleta20170722_173212.jpg")) {
                    //     if(unlink("/home/mizianis/public_html/BloodDonation/profileImages/teleta20170722_173212.jpg"))
                    //         echo 'updated';
                    //   } else {
                    //     echo 'updateerror';
                    //   }

// $old_pic_local_path = filePath("http://mizianis.com/BloodDonation/profileImages/tele20170722_161545.jpg");
// echo $old_pic_local_path["basename"];

?>