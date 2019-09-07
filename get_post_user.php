<?php
require 'ConnectDB.php';

$user_id = $_POST['user_id'];

$sql = "select * from user
where user_id = '$user_id';";

$result = $conn->query($sql);

if($result->num_rows >= 1){
    while($row = $result->fetch_assoc()){
        $output[] = $row;
    }
}echo json_encode($output);

?>