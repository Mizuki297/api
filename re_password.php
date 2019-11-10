<?php

require 'ConnectDB.php';
include 'functions.php';

$username = $_POST['username'];
$new_pass = $_POST['password'];

$salt = getSalt();
$passwordHash = password_hash(concatPasswordWithSalt($new_pass,$salt),PASSWORD_DEFAULT);

$sql = "UPDATE user SET user_password = '$passwordHash',salt = '$salt' where user_username = '$username'";

if($result = $conn->query($sql)){
    return http_response_code(200);
    }
    else{echo 'Try Again';
    }
$conn->close();
?>