<?php
require 'ConnectDB.php';


$HPT_name = $_POST['HPT_name'];
$Blood_type = $_POST['Blood_type'];

$user_id = $_POST['user_id'];

//yyyy-mm-dd
$date = date('y/m/d',time());

$get_id = $conn->query("select max(request_id) from request;");
$got = $get_id->fetch_assoc();
$next_id = $got['MAX(request_id)'] + 1;

$get_hpt_id = $conn->query("select HPT_id from hpt_pet where HPT_name = '$HPT_name';");

$sql = "insert into request (request_id, blood_type, date_request, HPT_id, user_id)
values ('$next_id', '$Blood_type','$date' ,'$get_hpt_id', '$user_id');";

// $sql = "select * from data_cat where 
// Blood_type = 'O'
// and status_cat = 0
// and ";

// $sql = "select * from data_cat where 
// Blood_type = '$Blood_type'
// and status_cat = 0
// and HPT_id = (select HTP_id
// from htp_pet where HPT_name = '$HPT_name' );";

$result = $conn->query($sql);

if($result->num_rows==1){
    echo '1';

}else{
    echo '0';
}
$conn->close();

?>