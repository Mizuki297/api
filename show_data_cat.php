<?php
require 'ConnectDB.php';

// $user_id = $_POST["user_id"];
// $cat_id = $_POST["cat_id"];

$sql = "select url_cat, user_id, blood_type, cat_type, cat_weight, 
cat_bd, health_check_date, latest_donation, user_line_id, user_tel from data_cat 
join user on data_cat.user_id = user.user_id
 where user_id = 1 and 
cat_id = 1;";

$result = $conn->query($sql);

if($result->num_rows >= 1){
    while($row = $result->fetch_assoc()){
        $output[] = $row;
    }
}
echo json_encode($output);

?>