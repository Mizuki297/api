<?php

require 'ConnectDB.php';

$cat_name = $_POST['cat_name'];
$cat_type = $_POST['cat_type'];
$blood_type = $_POST['blood_type'];
$cat_bd = $_POST['cat_bd'];
$cat_weight = $_POST['cat_weight'];
$health_check_date = $_POST['health_check_date'];
$latest_donation = $_POST['latest_donation'];
$HPT_id = $_POST['HPT_id'];
$user_id = $_POST['user_id'];

$sql = "INSERT INTO data_cat (cat_id, cat_name, 'user_id',
blood_type, cat_type, cat_weight, cat_bd, health_check_date, latest_donation,
status_cat, HPT_id )
VALUES (NULL, '$cat_name', '$user_id', '$blood_type', 
'$cat_type', '$cat_weight', '$cat_bd', '$health_check_date', 
'$latest_donation', 0, '$HPT_id');";

if($result = $conn->query($sql)){
 
    return http_response_code(200);
    
    }
    else{
    
    echo 'Try Again';
    
    }
$conn->close();