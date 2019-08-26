<?php 
require 'ConnectDB.php';
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "select * from user where 
user_username = '$username' 
and user_password = '$password';";
$result = $conn->query($sql);

if($result->num_rows==1){
    echo '1';

}else{
    echo '0';
}
$conn->close();

?>