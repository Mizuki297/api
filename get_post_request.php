<?php
require 'ConnectDB.php';

$HPT_name = $_POST['HPT_name'];
$Blood_type = $_POST['Blood_type'];

$user_id = $_POST['user_id'];

$get_hpt_id = $conn->query("select HPT_id from hpt_pet where HPT_name = '$HPT_name';")
->fetch_object()->HPT_id;

$sql = "insert into request (request_id ,blood_type, HPT_id, user_id)
values (NULL,'$Blood_type', $get_hpt_id, $user_id);";

if($result = $conn->query($sql)){
 
    return http_response_code(200);
    
    }
    else{
    
    echo 'Try Again';
    
    
    }
$conn->close();

?>