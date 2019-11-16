<?php 
require 'ConnectDB.php';

$HPT_name = $_POST['HPT_name'];
$blood_type = $_POST['blood_type'];
$user_id = $_POST['user_id'];

$get_hpt_id = $conn->query("select HPT_id from hpt_pet where HPT_name = '$HPT_name';")
->fetch_object()->HPT_id;

$sql = "select * from data_cat 
where blood_type = '$blood_type' and HPT_id = '$get_hpt_id' and status_cat = '1'
and user_id != '$user_id';";

$result = $conn->query($sql);
if($result->num_rows >= 1){
    while($row = $result->fetch_assoc()){
        $output[] = $row;
    }
}
echo json_encode($output,JSON_UNESCAPED_UNICODE);
$conn->close();

?>