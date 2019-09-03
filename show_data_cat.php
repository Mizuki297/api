<?php
require 'ConnectDB.php';

$user_id = $_POST["user_id"];

$sql = "select url_cat, user_id, blood_type, cat_type, cat_weight, 
cat_bd, health_check_date, latest_donation from data_cat where user_id = '$user_id';";

$result = $conn->query($sql);

if($result->num_rows >= 1){
    while($row = $result->fetch_assoc()){
        $output[] = $row;
    }
}echo json_encode($output);

?>