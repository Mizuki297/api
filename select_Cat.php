<?php 
require 'ConnectDB.php';

$HPT_id = $_POST['HPT_id'];
$blood_type = $_POST['blood_type'];

$sql = "select cat_id, cat_name,url_cat,blood_type,cat_type,
cat_weight,cat_bd,health_check_date,latest_donation,status_cat from data_cat 
where blood_type = '$blood_type' and HPT_id = '$HPT_id';";

$result = $conn->query($sql);

if($result->num_rows >= 1){
    while($row = $result->fetch_assoc()){
        $output[] = $row;
    }
}
echo json_encode($output,JSON_UNESCAPED_UNICODE);
$conn->close();

?>