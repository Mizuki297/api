<?php
require 'ConnectDB.php';
$sql = "select * from data_cat;";
//เอา user ค้น id line
$result = $conn->query($sql);

if($result->num_rows >= 1){
    while($row = $result->fetch_assoc()){
        $output[] = $row;
    }
}echo json_encode($output);

?>