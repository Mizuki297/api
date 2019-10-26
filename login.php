<?php 
$response = array();
require 'ConnectDB.php';
require 'functions.php';

$username = $_POST['username'];
$password = $_POST['password'];

// $get_salt = $conn->query("select user_password,salt from user where user_username = '$username';")
// ->fetch_object()->salt;
$query = "select user_id,user_password,salt from user where user_username = ?";
if($stmt = $conn->prepare($query)){
    $stmt->bind_param("s",$username);
    $stmt->execute();
    $stmt->bind_result($user_id,$passwordHashDB,$salt);

    if($stmt->fetch()){
        if(password_verify(concatPasswordWithSalt($password,$salt),$passwordHashDB)){
            $response["status"] = 0;
            $response["description"] = "Login successful";
            $response["user_id"] = $user_id;
        }else{
            $response["status"] = 1;
            $response["description"] = "Invalid username and password combination";
        }
    }else{
        $response["status"] = 1;
        $response["description"] = "Invalid username and password combination";
    }
    $stmt->close();
}
echo json_encode($response);

// echo $get_salt;
// $passwordHash = password_verify(concatPasswordWithSalt($password,$get_salt),PASSWORD_DEFAULT);
// echo $passwordHash;

// $sql = "select user_id from user where 
// user_username = '$username' 
// and user_password = '$passwordHash';";
// $result = $conn->query($sql);
// if($result != null){

// $result = $conn->query($sql)->fetch_assoc();

// if($result == null){
//     $arr = array('user_id'=>'0');
//     echo json_encode($arr); 
// }else{
//    echo json_encode($result);
// }return http_response_code(200);
// }else{
//     return http_response_code(400);
// }

// $conn->close();

?>