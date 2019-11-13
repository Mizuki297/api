<?php
$random_salt = 5;
function getSalt(){
	global $random_salt;
	return bin2hex(openssl_random_pseudo_bytes($random_salt));
}
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