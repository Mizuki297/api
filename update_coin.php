<?php
require 'ConnectDB.php';

$user_id = $_POST['user_id'];
$user_Money_coin = $_POST['user_Money_coin'];

$sql = "";

if($result = $conn->query($sql)){
 
    return http_response_code(200);
    
    }
    else{
    
    echo 'Try Again';
    
    
    }
$conn->close();



?>