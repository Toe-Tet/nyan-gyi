<!-- Username email password login တွေ format ကျမကျစစ်တဲ့page -->
<?php

require_once"sysgem/DB_Hacker.php";

function registerUser($username,$email,$password){
	if (usernameCheck($username) && emailCheck($email) && passwordCheck($password)) {

		//DB_Hacker.php ထဲကfunction
		return insertUser($username,$email,$password);
		
	}
	else{
		return "Fail";
		// echo "Fail";
	}
}

function loginUser($email,$password){
	if (emailCheck($email) && passwordCheck($password)) {
		return userLogin($email,$password);
	}else{
		return "Auth Fail";
	}
}

function usernameCheck($username){
	if (strlen($username) >= 6) {
		// $bol = preg_match('/^[\w]+$/',$username);
		return true;
	}else{
		return false;
	}
}


//" " ထည့်မရလို့ usernameCheck ကိုအသစ်ရေးလိုက်တယ်။
// function usernameCheck($username){
// 	if (strlen($username) >= 6) {
// 		$bol = preg_match('/^[\w]+$/',$username);
// 		return $bol ? true : false;
// 	}else{
// 		return false;
// 	}
// }



function emailCheck($email){
	if (strlen($email) >=10) {
		$bol = preg_match('/^[a-zA-Z0-9]+@[a-z]+\.[a-z]{2,4}+$/', $email);
		return $bol;
	}
	else{
		return false;
	}
} 

function passwordCheck($password){
	if (strlen($password)>=4) {
		$bol= preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*([_|^\w]))(?=.*\d).+$/', $password);
		return $bol;
	}
	else{
		return false;
	}
}

// $bol =passwordCheck("aA@2");
// echo $bol ? "True":"False";

?>