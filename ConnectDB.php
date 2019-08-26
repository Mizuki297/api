<?php
$Host = "localhost";
$User = "root";
$Pass = "";
$DB = "donor_app";

$conn = new mysqli($Host,$User,$Pass,$DB);
mysqli_set_charset($conn,'utf8_unicode_ci');

if($conn->connect_error){
    die("Connection fail: ".$conn->connect_error);
}

?>
