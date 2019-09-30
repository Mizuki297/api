<?php 
	//importing dbDetails file 
	require 'ConnectDB.php';

	$cat_id = $_POST['cat_id'];
	
    $fileupload = $_REQUEST['fileupload']; //รับค่าไฟล์จากฟอร์ม		
    $date = date("d-m-Y"); //กำหนดวันที่และเวลา
//เพิ่มไฟล์
    $upload=$_FILES['fileupload'];

if($upload <> '') {   //not select file
//โฟลเดอร์ที่จะ upload file เข้าไป 
$path="https://drive.google.com/drive/folders/1Iw-rI57zNQkCBbqakuwq9vUKp8vOMgcT";  
 
//เอาชื่อไฟล์ที่มีอักขระแปลกๆออก
	$remove_these = array(' ','`','"','\'','\\','/','_');
	$newname = str_replace($remove_these, '', $_FILES['fileupload']['name']);
 
	//ตั้งชื่อไฟล์ใหม่โดยเอาเวลาไว้หน้าชื่อไฟล์เดิม
	$newname = time().'-'.$newname;
$path_copy=$path.$newname;
$path_link="https://drive.google.com/drive/folders/1Iw-rI57zNQkCBbqakuwq9vUKp8vOMgcT".$newname;
 
//คัดลอกไฟล์ไปเก็บที่เว็บเซริ์ฟเวอร์
move_uploaded_file($_FILES['fileupload']['tmp_name'],$path_copy);  	
	}
	// เพิ่มไฟล์เข้าไปในตาราง uploadfile
	
		// $sql = "INSERT INTO uploadfile (fileupload) 
        // VALUES('$newname')";
        
        $sql = "UPDATE data_cat SET url_cat = ('$newname')
        where cat_id = '$cat_id';";
		
		$result = mysqli_query($conn, $sql) or die ("Error in query: $sql " . mysqli_error());
	
	mysqli_close($conn);
	// javascript แสดงการ upload file
	
	if($result){
	echo "<script type='text/javascript'>";
	echo "alert('Upload File Succesfuly');";
	// echo "window.location = 'uploadfile.php'; ";
	echo "</script>";
	}
	else{
	echo "<script type='text/javascript'>";
	echo "alert('Error back to upload again');";
	echo "</script>";
}

require_once 'Google/Client.php';
require_once 'Google/Service/Drive.php';

$client = new Google_Client();
// Get your credentials from the console
$client->setClientId('909123703115-91bros1mlsn666rusc7kff1b97e1ktit.apps.googleusercontent.com');
$client->setClientSecret('93wV9mjcbJW2-j0jSyhYpsFJ');
$client->setRedirectUri('urn:ietf:wg:oauth:2.0:oob');
$client->setScopes(array('https://www.googleapis.com/auth/drive.file'));

session_start();

if (isset($_GET['code']) || (isset($_SESSION['access_token']) && $_SESSION['access_token'])) {
    if (isset($_GET['code'])) {
        $client->authenticate($_GET['code']);
        $_SESSION['access_token'] = $client->getAccessToken();
    } else
        $client->setAccessToken($_SESSION['access_token']);

    $service = new Google_Service_Drive($client);

    //Insert a file
    $file = new Google_Service_Drive_DriveFile();
    $file->setName(uniqid().'.jpg');
    $file->setDescription('A test document');
    $file->setMimeType('image/jpeg');

    $data = file_get_contents('a.jpg');

    $createdFile = $service->files->create($file, array(
          'data' => $data,
          'mimeType' => 'image/jpeg',
          'uploadType' => 'multipart'
        ));

    print_r($createdFile);

} else {
    $authUrl = $client->createAuthUrl();
    header('Location: ' . $authUrl);
    exit();
}

?>