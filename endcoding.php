<?php
// ไม่ใช้
require 'ConnectDB.php';
require 'functions.php';

$user_id = $_POST['user_id'];

$query = "select user_username,user_password,salt from user where user_id = ?";
if($stmt = $conn->prepare($query)){
    $stmt->bind_param("s",$user_id);
    $stmt->execute();
    $stmt->bind_result($username,$passwordHashDB,$salt);
    if($stmt->fetch()){
        $password = crypt($passwordHashDB,$salt);

        $response["username"] = $username;
        $response["password"] = $password;

    }else{
        $response["status"] = 1;
        $response["description"] = "error";
    }
}
echo json_encode($response);