<?php
require 'ConnectDB.php';

$user_id = $_POST['user_id'];

$sql = "select * from user
where user_id = '$user_id';";

$result = $conn->query($sql)->fetch_assoc();
echo json_encode($result);

?>