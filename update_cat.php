<?php
require 'ConnectDB.php';

    $cat_id = $_POST['cat_id'];
    $cat_name = $_POST['cat_name'];
	$cat_type = $_POST['cat_type'];
	$blood_type = $_POST['blood_type'];
	$cat_bd = $_POST['cat_bd'];
	$cat_weight = $_POST['cat_weight'];
	$health_check_date = $_POST['health_check_date'];
	$latest_donation = $_POST['latest_donation'];
    
$sql = "UPDATE data_cat SET cat_name = '$cat_name', cat_type = '$cat_type', blood_type = '$blood_type', cat_bd = '$cat_bd', cat_weight = '$cat_weight', health_check_date = '$health_check_date', latest_donation = '$latest_donation' where data_cat.cat_id = '$cat_id'";

if($result = $conn->query($sql)){
 return http_response_code(200);
    }
    else{echo 'Try Again';
    }
$conn->close();

?>