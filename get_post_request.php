<?php
require 'ConnectDB.php';
$HPT_name = $_POST['HPT_name'];
$Blood_type = $_POST['Blood_type'];

$sql = "select * from data_cat where 
HPT_name = '$HPT_name' 
and Blood_type = '$Blood_type'
and status_cat = 0;";
$result = $conn->query($sql);

if($result->num_rows==1){
    echo '1';

}else{
    echo '0';
}
$conn->close();

?>
?>