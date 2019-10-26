<?php
// ไม่ใช้
$file = $_FILES['file'];
$filename = $_FILES['file']['name'];
$filedata = $_FILES['file']['tmp_name'];
// $filesize = $_FILES['file']['size'];

$url = 'https://upload.uploadcare.com/base/';

// $myvars = array(
//     'UPLOADCARE_PUB_KEY' => '92f32da1d27ff7f9dd3e',
//     'UPLOADCARE_STORE' => '1',
//     'file' => $file
// );
// if (function_exists('curl_file_create')) {
//     $File = curl_file_create($file_name_with_full_path);
//   } else { // 
//     $File = '@' . realpath($file_name_with_full_path);
//   }

$post = array('UPLOADCARE_PUB_KEY' => '92f32da1d27ff7f9dd3e','UPLOADCARE_STORE' => '1','file' => $file);
// echo $file;

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt( $ch, CURLOPT_POST, 1);
curl_setopt( $ch, CURLOPT_POSTFIELDS, $post);
curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt( $ch, CURLOPT_HEADER, 0);
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);

$response = curl_exec( $ch );
echo $response;


//   $ch = curl_init();
//   curl_setopt($ch, CURLOPT_URL,$target_url);
//   curl_setopt($ch, CURLOPT_POST,1);
//   curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
//   $result=curl_exec ($ch);
//   curl_close ($ch);