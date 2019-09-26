<?php 
require 'ConnectDB.php';

$user_id = $_POST['user_id'];
$user_name = $_POST['user_name'];
$user_s_name = $_POST['user_s_name'];
$email = $_POST['user_email'];
$tel = $_POST['user_tel'];
$user_line_id = $_POST['user_line_id'];
$HPT_name = $_POST['HPT_name'];

$get_hpt_id = $conn->query("select HPT_id from hpt_pet where HPT_name = '$HPT_name';")
->fetch_object()->HPT_id;

$sql = "UPDATE user SET user_name = '$user_name', user_s_name = '$user_s_name',
user_tel = '$tel', user_email = '$email', user_line_id = '$user_line_id',
HPT_id = '$get_hpt_id'
where user_id = '$user_id' ;";

 if($result = $conn->query($sql)){
    return http_response_code(200);
    }
    else{echo 'Try Again';
    }
$conn->close();
?>