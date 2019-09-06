<?php 
require 'ConnectDB.php';
$HPT_id = $_POST['HPT_id'];
$blood_type = $_POST['blood_type'];

$sql = "select * from data_cat where 
blood_type = '$blood_type'
and HPT_id = '$HPT_id';";

$result = $conn->query($sql);

if($result->num_rows >= 1){
    while($row = $result->fetch_assoc()){
        $output[] = $row;
    }
}echo json_encode($output);
$conn->close();

?>