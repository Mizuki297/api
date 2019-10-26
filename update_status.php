<?php
require 'ConnectDB.php';

$cat_id = $_POST['cat_id'];
$status = $_POST['status_cat'];

$sql = "UPDATE data_cat SET status_cat = '$status' where data_cat.cat_id = '$cat_id'";

$result = $conn->query($sql);

if($result = $conn->query($sql)){
    return http_response_code(200);
       }
       else{echo 'Try Again';
       }
   $conn->close();

?>
