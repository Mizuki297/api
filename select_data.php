<?PHP
require 'ConnectDB.php';

$sql = "select count(cat_id) from data cat 
where HPT_id = 1
Blood_type = A;";

$result = $conn->query($sql);

if($result->num_rows >= 1){
    while($row = $result->fetch_assoc()){
        $output[] = $row;
    }
}echo json_encode($output);

?>