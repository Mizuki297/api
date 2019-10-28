<?php 
$response = array();
require 'ConnectDB.php';
require 'functions.php';

$user_id = $_POST['user_id'];
$old_pass = $_POST['old_pass'];
$password = $_POST['password'];

$query = "select user_password,salt from user where user_id = ?";
if($stmt = $conn->prepare($query)){
    $stmt->bind_param("s",$user_id);
    $stmt->execute();
    $stmt->bind_result($passwordHashDB,$salt);
    if($stmt->fetch()){
        if(password_verify(concatPasswordWithSalt($old_pass,$salt),$passwordHashDB)){
            $passwordHash = password_hash(concatPasswordWithSalt($password,$salt),PASSWORD_DEFAULT);

            // $sql = $conn->query("UPDATE user SET user_password = '$passwordHash' where user.user_id = '$user_id'");
            // $result = $conn->query($sql);
                $response["status"] = 0;
                $response["description"] = "Update successful";
                $stmt->close();
            
        }else{
            $response["status"] = 1;
            $response["description"] = "Invalid old password combination";
        }
    }else{
        $response["status"] = 1;
        $response["description"] = "Invalid old password combination";
    }
}
echo json_encode($response);

$sql = "UPDATE user SET user_password = '$passwordHash' where user.user_id = '$user_id'";
// $sql = "UPDATE user SET user_password = '$passwordHash' where user.user_id = '$user_id' AND user.user_password = '$old_pass'";

 if($result = $conn->query($sql)){
    return http_response_code(200);
    }
    else{echo 'Try Again';
    }
$conn->close();
?>