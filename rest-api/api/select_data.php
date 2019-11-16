<?PHP
require 'ConnectDB.php';

$HPT_name = $_POST['HPT_name'];
$Blood_type = $_POST['Blood_type'];
$user_id = $_POST['user_id'];

$get_hpt_id = $conn->query("select HPT_id from hpt_pet where HPT_name = '$HPT_name';")
->fetch_object()->HPT_id;

$sql = "select count(cat_id) as numCat from data_cat 
where blood_type = '$Blood_type' and HPT_id = '$get_hpt_id' and status_cat = '1'
and user_id != '$user_id';";

$result = $conn->query($sql)->fetch_assoc();
echo json_encode($result);

?>