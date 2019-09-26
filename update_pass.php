<?php 
require 'ConnectDB.php';

$user_id = $_POST['user_id'];
$password = $_POST['password'];

$sql = "UPDATE user SET user_password = '$password'
where user_id = '$user_id';";

 if($result = $conn->query($sql)){
    return http_response_code(200);
    }
    else{echo 'Try Again';
    }
$conn->close();
?>