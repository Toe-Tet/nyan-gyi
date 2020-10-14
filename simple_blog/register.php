	<?php 
	include_once "views/top.php";
	include_once("views/header.php");
	include_once "views/nav.php";
	include_once "sysgem/DB_Hacker.php";
	require_once "sysgem/membership.php";
	$message = "";

	if (isset($_POST['submit'])) {
		$username = $_POST["username"];
		$email = $_POST["email"];
		$password = $_POST["password"];

		
		//membership.php ထဲက function
		$ret= registerUser($username,$email,$password);

		
		switch ($ret) {

			case "Register successful": 
				$message = "Register successful";
				// setSession function က MySession.php ကခေါ်သုံးထားတာ။
				setSession("name",$username); 
				setSession("email",$email);
				if ($username==="nyanlynnhtut" && $email==="nyanlynnhtut@gmail.com") {
					header("Location:admin.php");
				}
				else{
					header("Location:index.php");
				}
			break;
			case "Email is already inused":$message = "Email is already inused";break;
			case "Register Fail": $message = "Register Fail";break;
			case "Fail": $message = "Authentication Fail";break;

			default: break;
		}

		// <!-- bootstrap alert -->
        echo "
        <div class='container mt-5'> 
            <div class='alert alert-warning alert-dismissible fade show' role='alert'>
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>x</span>
                </button>
                ". $message ."
            </div>
        </<div>";
        // <!-- bootstrap alert -->

	}

	?>
	
	<div class="container my-5 d-flex justify-content-center">
	    <div class="card mb-5" style="width: 30rem;">
			<div class="card-header font-weight-bold bg-dark text-white">
			Register Account
			</div>
			<div class="card-body bg-dark">
				<form action="register.php" class="form" method="post">
		            <div class="form-group">
						<label for="username" class="text-white">User Name</label>
						<input type="text" class="form-control rounded-0" name="username" id="username">
					</div>
					<div class="form-group">
						<label for="email" class="text-white">Email</label>
						<input type="text" class="form-control rounded-0" name="email" id="email">
					</div>
					<div class="form-group">
						<label for="password" class="text-white">Password</label>
						<input type="password" class="form-control rounded-0" name="password" id="password">
					</div>
		            <p></p>
		            <div class="row no-gutters justify-content-end">
		                <button class="btn btn-secondary mt-3" name="submit" value="submit">Register</button>
		            </div>
		        </form>
			</div>
		</div>
	</div>


	<?php include_once("views/footer.php"); ?>
	<?php include_once("views/base.php");?>
