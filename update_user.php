<?php 
require 'ConnectDB.php';

$user_id = $_POST['user_id'];
$user_name = $_POST['user_name'];
$user_s_name = $_POST['user_s_name'];
$tel = $_POST['user_tel'];
$user_line_id = $_POST['user_line_id'];

$sql = "update user set user_name = '$user_name', user_s_name = '$user_s_name', user_tel = '$tel', user_line_id = '$user_line_id' where user.user_id = '$user_id'";

 if($result = $conn->query($sql)){
    return http_response_code(200);
    }
    else{echo 'Try Again';
    }
$conn->close();
?>