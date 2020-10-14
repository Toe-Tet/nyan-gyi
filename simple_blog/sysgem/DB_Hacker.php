<!-- Database နဲ့ချိတ်တဲ့page -->

<?php
// session_start();
define("DB_HOST", "localhost");
define("DB_NAME", "simple_blog");
define("DB_USER", "root");
define("DB_PASS","123@");


function dbConnect(){
	$db = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
	if(mysqli_connect_errno()) {
		echo "Database connection Fail";
	}

	else{
		return $db;
	}
}

function insertUser($name,$email,$password){
	$password = encodePass($password);
	$curTime = getTimeNow();  

	$db = dbConnect();
	$qry = "SELECT * FROM member WHERE email='$email'";
	$result = mysqli_query($db,$qry);
	if (mysqli_num_rows($result)>0) {
		return "Email is already inused";
	}

	else{
		$qry = "INSERT INTO member(name,email,password,created_at,updated_at)
		VALUES ('$name','$email','$password','$curTime','$curTime')";
		$result = mysqli_query($db,$qry);
		if ($result==1){
			return "Register successful";
		}
		else{
			return "Register Fail";
		}

	}

}
 // echo insertUser("mau","manusitekar@gmail.com","123123");

function userLogin($email,$password){
	$password = encodePass($password);
	$db = dbConnect();
	$qry = "SELECT name FROM member WHERE email = '$email' AND password = '$password'";
	$result = mysqli_query($db,$qry);

	if ($result) {
		$username = "";
		foreach ($result as $str) {
			$username = $str["name"];
		}

		setSession('name',$username);
		setSession('email',$email);
		return "Login Success";

	}
	else{
		return "Login Fail!";
	}

	// if(mysqli_num_rows($result)>0){
	// 	return "Login Success";
	// }
	// else{
	// 	return "Login Fail!";
	// }
}

// hashing လုပ်ထားတာ
function encodePass($pass){
	$pass = md5($pass);
	$pass = sha1($pass);
	$pass = crypt($pass,$pass);

	return $pass;
}

// database created_at နဲ့ updated_at အတွက်
function getTimeNow(){
	return date("Y-m-d H:m:s",time());
}


?>