<?php
require "database_connect.php";
$message = $_POST['message'];
$title = $_POST['title'];
$path_to_from = 'https://fcm.googleapis.com/fcm/send';
$server_key = 'AAAAzs9BEB0:APA91bH0OpqxafoO9JK8OLq58Q36Z2rhDNWveo9K51aYV4opUPbf-MwyHjO5xi5ZvP8onxr1Pm7Q_xPkF9A4RA4I16Ksu8PTiNsm4eeiPwrsYmdUOjaV4ca2FiZ9qVDftxKkGjq0LyFf';
$sql = "select fcm_token from fcm_info";
echo $sql;
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_row($result);
$key = $row[0];

$headers = array(
		'Authorization:key=' .$server_key,
		'Content-Type:application/json'
	);
$fields = array('to'=>$key,
				'notification'=>array('title'=>$title,
					'text'=> 'data!',
					'body'=>$message)
	);
$payload = json_encode($fields);

$curl_session = curl_init();
curl_setopt($curl_session, CURLOPT_URL, $path_to_from);
curl_setopt($curl_session, CURLOPT_POST, true);
curl_setopt($curl_session, CURLOPT_HTTPHEADER, $headers);
curl_setopt($curl_session, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl_session, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl_session, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);
curl_setopt($curl_session, CURLOPT_POSTFIELDS, $payload);

$result = curl_exec($curl_session);

?>