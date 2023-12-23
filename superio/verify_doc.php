<?php
   $filePath = $_FILES['image']['tmp_name'];
$type=$_FILES['image']['type'];
$fileName = $_FILES['image']['name'];
    
$data = array('image' => curl_file_create($filePath, $type, $fileName));

$ch = curl_init();     
curl_setopt($ch, CURLOPT_URL, 'http://5-180-182-28.cloud-xip.io/checkexpiry');
curl_setopt($ch, CURLOPT_HTTPHEADER,array('Content-Type: multipart/form-data'));
curl_setopt($ch, CURLOPT_POST, 1);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
$response = curl_exec($ch);

$output=json_decode($response, true);
curl_close($ch);
echo json_encode($output);
?>
