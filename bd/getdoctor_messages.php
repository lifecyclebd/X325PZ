<?php
require_once("database_connect.php");

//Hospital class
     class Message{
          var $id;
          var $donor_phone;
          var $donor_pic_path;
          var $donor_name;
          var $donor_message;
          var $donor_message_time;
          var $donor_fcm;
          var $donor_uid;
          var $donor_token;
          var $donor_age;
          var $doctor_phone;
          var $doctor_pic_path;
          var $doctor_name;
          var $doctor_reply;
          var $doctor_reply_time;
          var $doctor_fcm;
          var $doctor_uid;
          var $doctor_token;
          var $doctor_deleted; 
          var $donor_deleted;  
          
     }

$request_from = $_POST['request_from'];
$donor_phone = $_POST['donor_phone'];
$doctor_phone = $_POST['doctor_phone'];

// $request_from = "doctor";
// $donor_phone = "01922222222";
// $doctor_phone = "01523222222";

if($request_from == "doctor" && $donor_phone == "na"){
     $query = "select id,donor_phone,donor_pic_path,donor_name,donor_message,UNIX_TIMESTAMP(donor_message_time) AS donor_message_time,donor_fcm,donor_uid,
     donor_token,donor_age,doctor_phone,doctor_pic_path,doctor_name,doctor_reply,UNIX_TIMESTAMP(doctor_reply_time) AS doctor_reply_time,doctor_fcm,doctor_uid,
     doctor_token,doctor_deleted,donor_deleted
     from doctor_message where 
                    doctor_deleted = 0 group by donor_phone;";
}else if($request_from == "doctor" && $donor_phone != "na"){
     $query = "select id,donor_phone,donor_pic_path,donor_name,donor_message,UNIX_TIMESTAMP(donor_message_time) AS donor_message_time,donor_fcm,donor_uid,
     donor_token,donor_age,doctor_phone,doctor_pic_path,doctor_name,doctor_reply,UNIX_TIMESTAMP(doctor_reply_time) AS doctor_reply_time,doctor_fcm,doctor_uid,
     doctor_token,doctor_deleted,donor_deleted from doctor_message where 
                    doctor_deleted = 0 and
                    doctor_phone = '".$doctor_phone."' and
                    donor_phone = '".$donor_phone."' order by id ASC;";
}else if($request_from == "patient" && $donor_phone != "na"){
     $query = "select id,donor_phone,donor_pic_path,donor_name,donor_message,UNIX_TIMESTAMP(donor_message_time) AS donor_message_time,donor_fcm,donor_uid,
     donor_token,donor_age,doctor_phone,doctor_pic_path,doctor_name,doctor_reply,UNIX_TIMESTAMP(doctor_reply_time) AS doctor_reply_time,doctor_fcm,doctor_uid,
     doctor_token,doctor_deleted,donor_deleted from doctor_message where 
                    donor_deleted = 0 and
                    doctor_phone = '".$doctor_phone."' and
                    donor_phone = '".$donor_phone."' order by id ASC;";
}

 

$result = mysqli_query($conn,$query) or die(mysqli_error());

$all_messages = array();
$i = 0;

while($rows = mysqli_fetch_assoc($result)) {
    //echo $rows['address']." > ".$rows['distance']*1.609344."<BR>";
          $message = new Message;
          $message->id = $rows['id'];
          $message->donor_phone = $rows['donor_phone'];
          $message->donor_pic_path = $rows['donor_pic_path'];
          $message->donor_name = $rows['donor_name'];
          $message->donor_message = $rows['donor_message'];
          $message->donor_message_time = $rows['donor_message_time'];
          $message->donor_fcm = $rows['donor_fcm'];
          $message->donor_uid = $rows['donor_uid'];
          $message->donor_token = $rows['donor_token'];
          $message->donor_age = $rows['donor_age'];

          $message->doctor_phone = $rows['doctor_phone'];
          $message->doctor_pic_path = $rows['doctor_pic_path'];
          $message->doctor_name = $rows['doctor_name'];
          $message->doctor_reply = $rows['doctor_reply'];
          $message->doctor_reply_time = $rows['doctor_reply_time'];
          $message->doctor_fcm = $rows['doctor_fcm'];
          $message->doctor_uid = $rows['doctor_uid'];
          $message->doctor_token = $rows['doctor_token'];
          $message->doctor_deleted = $rows['doctor_deleted'];
          $message->donor_deleted = $rows['donor_deleted'];
          
          
          //$all_usr[$i] = $user;
          //echo json_encode($user);
          array_push($all_messages, $message);
          $i++;
}

     echo json_encode($all_messages);
     mysqli_close($conn);



?>