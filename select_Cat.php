<?php 
require 'ConnectDB.php';
$HPT_id = $_POST['htp_id'];
$blood_type = $_POST['blood_type'];

$sql = "select * from data_cat where 
blood_type = '$blood_type'
and htp_id = '$HPT_id';";

$result = $conn->query($sql);

if($result->num_rows==1){
    echo '1';

}else{
    echo '0';
}
$conn->close();

?>