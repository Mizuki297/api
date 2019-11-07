<?php
require 'ConnectDB.php';

$cat_id = $_POST['cat_id'];
$status = $_POST['status_cat'];
$health_check_date = date("Y/m/d");
$latest_donation = date("Y/m/d");

$sql = "UPDATE data_cat SET status_cat = '$status' , health_check_date = '$health_check_date' , latest_donation = '$latest_donation' where data_cat.cat_id = '$cat_id'";

$result = $conn->query($sql);

if($result = $conn->query($sql)){
    return http_response_code(200);
       }
       else{echo 'Try Again';
       }
   $conn->close();

?>
