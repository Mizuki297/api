<?php 
require 'ConnectDB.php';

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

$sql = "insert into user (user_id, user_name, user_s_name, user_tel, user_email, user_username,
 user_password, user_line_id, HPT_id, money_coin) 
VALUES (NULL, '$user_name', '$user_s_name', '$tel', '$email',
 '$username', '$password', '$user_line_id', '$get_hpt_id', '50');";

$result = $conn->query($sql);

if($result->num_rows==1){
    echo '1';

}else{
    echo '0';
}
$conn->close();

?>