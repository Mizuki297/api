<?php 
require 'ConnectDB.php';
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "select user_id from user where 
user_username = '$username' 
and user_password = '$password';";
$result = $conn->query($sql);

if($result->num_rows==1){
    echo '1';
    while($row = $result->fetch_assoc()){
        $output[] = $row;
    }echo json_encode($output);

}else{
    echo '0';
}
$conn->close();

?>