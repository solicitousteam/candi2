<?php
   $filePath = $_FILES['resume']['tmp_name'];
$type=$_FILES['resume']['type'];
$fileName = $_FILES['resume']['name'];
    
$data = array('resume' => curl_file_create($filePath, $type, $fileName));

$ch = curl_init();     
curl_setopt($ch, CURLOPT_URL, 'https://resumeparser.py.solicitous.cloud/');
curl_setopt($ch, CURLOPT_HTTPHEADER,array('Content-Type: multipart/form-data'));
curl_setopt($ch, CURLOPT_POST, 1);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
$response = curl_exec($ch);

$output=json_decode($response, true);
curl_close($ch);
echo json_encode($output);
?>
