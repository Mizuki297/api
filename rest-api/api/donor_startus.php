<?php
require 'ConnectDB.php';

$sql = "UPDATE data_cat set status_cat = '1' where DATE_ADD(latest_donation,INTERVAL 3 MONTH) <= SYSDATE() and status_cat = '0'";

if($result = $conn->query($sql)){
    return http_response_code(200);
       }
       else{echo 'Try Again';
       }
   $conn->close();
?>
