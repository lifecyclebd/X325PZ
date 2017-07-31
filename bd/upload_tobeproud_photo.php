<?php

include("database_connect.php");



$imageEncoded = $_POST['imageEncoded'];
$pic_name = $_POST['pic_name'];

$local_path = "/home/mizianis/public_html/BloodDonation/proudImages/". $pic_name;


$img = str_replace('data:image/png;base64,', '', $imageEncoded);
$img = str_replace(' ', '+', $img);
$data = base64_decode($img);

file_put_contents($local_path, $data);



?>
