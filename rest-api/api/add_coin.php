<?php
require 'ConnectDB.php';

$user_id = $_POST['user_id'];
$money = $_POST['coin'];

$coin = $conn->query("select money_coin from user where user_id = '$user_id';")
->fetch_object()->money_coin;

$money_coin = $coin + $money;

$sql = "update user set money_coin = '$money_coin' where user.user_id = '$user_id'";

if($result = $conn->query($sql)){
    return http_response_code(200);
    }
    else{echo 'Try Again';
    }
$conn->close();
?>