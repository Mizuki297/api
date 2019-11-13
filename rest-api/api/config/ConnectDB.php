<?php

$Host = "localhost";
$User = "id10688033_mizuki297";
$Pass = "s1234567890";
$DB = "id10688033_donor";

$conn = new mysqli($Host,$User,$Pass,$DB);
mysqli_set_charset($conn,'utf8_unicode_ci');

if($conn->connect_error){
    die("Connection fail: ".$conn->connect_error);
}

?>
