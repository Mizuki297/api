<?php 
$response = array();
require 'ConnectDB.php';
require 'functions.php';

$username = $_POST['username'];
$password = $_POST['password'];

$query = "select user_id,user_password,salt from user where user_username = ?";
if($stmt = $conn->prepare($query)){
    $stmt->bind_param("s",$username);
    $stmt->execute();
    $stmt->bind_result($user_id,$passwordHashDB,$salt);

    if($stmt->fetch()){
        if(password_verify(concatPasswordWithSalt($password,$salt),$passwordHashDB)){
            $response["status"] = 0;
            $response["description"] = "Login สำเร็จ";
            $response["user_id"] = $user_id;
        }else{
            $response["status"] = 1;
            $response["description"] = "username และ password ไม่ตรงกัน";
        }
    }else{
        $response["status"] = 1;
        $response["description"] = "username และ password ไม่ตรงกัน";
    }
    $stmt->close();
}
echo json_encode($response);

?>