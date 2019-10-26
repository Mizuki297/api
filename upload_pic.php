<?php 
// ไม่ใช้
	require 'ConnectDB.php';

	$cat_id = $_POST['cat_id'];
	$url_image = $_POST['Url'];

	// $url_image = "https://ucarecdn.com/".$file."/";
	
        $sql = "UPDATE data_cat SET url_cat = ('$url_image')
        where cat_id = '$cat_id';";
		
		if($result = $conn->query($sql)){
 
			return http_response_code(200);
			
			}
			else{
			
			echo 'Try Again';
			
			}
		$conn->close();
		
?>