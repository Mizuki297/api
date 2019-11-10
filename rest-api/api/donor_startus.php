<?php
require 'ConnectDB.php';

// $sql = "select latest_donation from data_cat;";

$sql = "UPDATE data_cat set status_cat = '1' where DATE_ADD(latest_donation,INTERVAL 3 MONTH) <= SYSDATE() and status_cat = '0'";
// select cat_id, DATE_ADD(latest_donation,INTERVAL 3 MONTH) from data_cat

if($result = $conn->query($sql)){
    return http_response_code(200);
       }
       else{echo 'Try Again';
       }
   $conn->close();
?>
