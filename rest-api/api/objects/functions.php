<?php
$random_salt = 5;

// function userExists($username){
// 	$query = "SELECT user_username FROM user WHERE user_username = ?";
// 	global $con;
// 	if($stmt = $con->prepare($query)){
// 		$stmt->bind_param("s",$username);
// 		$stmt->execute();
// 		$stmt->store_result();
// 		$stmt->fetch();
// 		if($stmt->num_rows == 1){
// 			$stmt->close();
// 			return true;
// 		}
// 		$stmt->close();
// 	}
 
// 	return false;
// }
 
// /**
// * Creates a unique Salt for hashing the password
// * 
// * @return
// */
function getSalt(){
	global $random_salt;
	return bin2hex(openssl_random_pseudo_bytes($random_salt));
}
 
// /**
// * Creates password hash using the Salt and the password
// * 
// * @param $password
// * @param $salt
// * 
// * @return
// */
function concatPasswordWithSalt($password,$salt){
	global $random_salt;
	if($random_salt % 2 == 0){
		$mid = $random_salt / 2;
	}
	else{
		$mid = ($random_salt - 1) / 2;
	}
 
	return
	substr($salt,0,$mid - 1).$password.substr($salt,$mid,$random_salt - 1);
 
}
?>