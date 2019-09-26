<?php 
	//importing dbDetails file 
	require 'ConnectDB.php';

	$cat_id = $_POST['cat_id'];

	//this is our upload folder 
	$upload_path = 'cat_pic/';
	
	//creating the upload url 
	$upload_url = 'https://glyphographic-runwa.000webhostapp.com/'.$upload_path; 
	
	//response array 
	$response = array(); 
		
	if($_SERVER['REQUEST_METHOD']=='POST'){
		
		//checking the required parameters from the request 
		if(isset($_FILES['image'])){
			
			//getting file info from the request 
			$fileinfo = pathinfo($_FILES['image']);
			
			//getting the file extension 
			$extension = $fileinfo['extension'];
			
			//file url to store in the database 
			$file_url = $upload_url . getFileName() . '.' . $extension;
			
			//file path to upload in the server 
			$file_path = $upload_path . getFileName() . '.'. $extension; 
			
			//trying to save the file in the directory 
			try{
				//saving the file 
				move_uploaded_file($_FILES['image']['tmp_name'],$file_path);

				$sql = "UPDATE data_cat SET url_cat = '$file_url'
                where cat_id = '$cat_id';";
				
				//adding the path and name to database 
				if(mysqli_query($conn,$sql)){
					
					//filling response array with values 
					$response['error'] = false; 
					$response['url'] = $file_url; 
					// $response['name'] = $name;
				}
			//if some error occurred 
			}catch(Exception $e){
				$response['error']=true;
				$response['message']=$e->getMessage();
			}		
			//displaying the response 
			echo json_encode($response);
			
			//closing the connection 
			mysqli_close($conn);
		}else{
			$response['error']=true;
			$response['message']='Please choose a file';
		}
	}
	
	/*
		We are generating the file name 
		so this method will return a file name for the image to be upload 
	*/
	function getFileName(){
		$sql = "SELECT max(cat_id) as id FROM data_cat";
		$result = mysqli_fetch_array(mysqli_query($conn,$sql));
		
		mysqli_close($conn);
		if($result['id']==null)
			return 1; 
		else 
			return ++$result['id']; 
    }
?>