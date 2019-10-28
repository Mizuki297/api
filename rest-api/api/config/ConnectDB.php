<?php
//for online

$Host = "localhost";
$User = "id10688033_mizuki297";
$Pass = "s1234567890";
$DB = "id10688033_donor";

//for offline
// $Host = "localhost";
// $User = "root";
// $Pass = "";
// $DB = "donor_app";

$conn = new mysqli($Host,$User,$Pass,$DB);
mysqli_set_charset($conn,'utf8_unicode_ci');

if($conn->connect_error){
    die("Connection fail: ".$conn->connect_error);
}
// class Database{

// private $Host = "localhost";
// private $User = "id10688033_mizuki297";
// private $Pass = "s1234567890";
// private $DB = "id10688033_donor";

// public $conn;

//     public function getConnection(){

//         $this->conn = null;
    
//         try{
//             $this->conn = new PDO("mysql:Host = " . $this->host . ";DBname = " . $this->dbname);
//         }catch(PDOException $exception){
//             echo "Connection error: " . $exception->getMessage();
//         }
//     return $this->conn;
//     }
// }
?>
