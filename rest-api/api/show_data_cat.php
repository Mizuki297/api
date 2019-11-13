<?php
require 'ConnectDB.php';

$cat_id = $_POST["cat_id"];

$sql = "select  data_cat.cat_id, data_cat.cat_name, data_cat.url_cat, data_cat.blood_type, data_cat.cat_type
, data_cat.cat_weight, data_cat.cat_bd, data_cat.health_check_date
, data_cat.latest_donation, user.user_line_id, user.user_tel 
from data_cat 
inner join user on data_cat.user_id = user.user_id
 where cat_id = '$cat_id';";

$result = $conn->query($sql)->fetch_assoc();
echo json_encode($result,JSON_UNESCAPED_UNICODE);

?>