<?php 
$response = array();
require 'ConnectDB.php';
include 'functions.php';
 
$user_name = $_POST['user_name'];
$user_s_name = $_POST['user_s_name'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['user_email'];
$tel = $_POST['user_tel'];
$user_line_id = $_POST['user_line_id'];
$HPT_name = $_POST['HPT_name'];

$get_hpt_id = $conn->query("select HPT_id from hpt_pet where HPT_name = '$HPT_name';")
->fetch_object()->HPT_id;

$salt = getSalt();
$passwordHash = password_hash(concatPasswordWithSalt($password,$salt),PASSWORD_DEFAULT);

$User_count =$conn->query("select count(user_id) as user from user where 
user_username = '$username';")->fetch_object();

if($User_count->user ==1){
    $response["status"] = 0;
    $response["description"] = "Username is used แล้ว";
    echo json_encode([$User_count]);
    
}else{
    $sql = "insert into user (user_id, user_name, user_s_name, user_tel, user_email, user_username,
 user_password,salt, user_line_id, HPT_id, money_coin) 
VALUES (NULL, '$user_name', '$user_s_name', '$tel', '$email',
 '$username', '$passwordHash', '$salt', '$user_line_id', '$get_hpt_id', '50');";
 $response["status"] = 1;
$response["description"] = "Register successful";

if($result = $conn->query($sql)){
    echo json_encode($result);

}else{
    echo json_encode(0);
}
}
$conn->close();

?>