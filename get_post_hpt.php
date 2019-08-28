<?php
require 'ConnectDB.php';
$sql = "select * from hpt_pet;";
$result = $conn->query($sql);

if($result->num_rows >= 1){
    while($row = $result->fetch_assoc()){
        $output[] = $row;
    }
}echo json_encode($output,JSON_UNESCAPED_UNICODE);

?>