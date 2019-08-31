<?php
require 'ConnectDB.php';


$HPT_name = $_POST['HPT_name'];
$Blood_type = $_POST['Blood_type'];

$user_id = $_POST['user_id'];

$date = mysql_query("select sysdate();");
$got_date = mysql_fetch_array($date);

$get_id = mysql_query("select max(request_id) from request;");
$got = mysql_fetch_array($get_id);
$next_id = $got['MAX(request_id)'] + 1;

$get_hpt_id = mysql_query("select hpt_id from hpt_pet where hpt_name = '$HPT_name';");

"insert into request (request_id, blood_type, date_request, HPT_id, user_id)
values ('$next_id', '$Blood_type','$got_date' ,'$get_hpt_id', '$user_id');";

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
?>