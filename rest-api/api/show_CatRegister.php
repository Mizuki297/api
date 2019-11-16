<?php
require 'ConnectDB.php';

$user_id = $_POST['user_id'];

$sql = "select cat_id, cat_name, url_cat, status_cat, Datediff(DATE_ADD(latest_donation,INTERVAL 3 MONTH), SYSDATE()) as countdown from data_cat 
where user_id = '$user_id' and status_cat != '2';";

$result = $conn->query($sql);

if($result->num_rows >= 1){
    while($row = $result->fetch_assoc()){
        $output[] = $row;
    }
}
echo json_encode($output);

?>