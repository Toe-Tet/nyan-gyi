<?php 
// session_start();
include_once("sysgem/MySession.php"); 
include_once("views/top.php");
include_once("views/header.php");
include_once("views/nav.php");

$message = "";
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    // echo $email. "-" . $password;
    $ret = loginUser($email,$password);    //membership.php က loginUser()

    switch ($ret) {
            case "Login Success":           //DB_Hacker.php ထဲက userLogin()
            $message = "Login Success";
            // setSession("email");

            setSession("email",$email);     //error တက်နေလို့ဒီလိုပြောင်းရေးလိုက်တယ်
            setSession("password",$password);

            if(getSession("name")==="nyanlynnhtut") {
                header("Location:admin.php");
            }else{
                header("Location:index.php");
            }

            // header("Location:index.php");
            break;

            case "Login Fail!":             //DB_Hacker.php ထဲက userLogin()
            $message = "Login Fail!";
            break;

            case "Auth Fail":               //membership.php ထဲက loginUser()
            $message = "User Name and Password is not in format";
            break;  

            
            default:
                # code...
            break;
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
    <div class="card mb-5" style="width: 25rem;">
		<div class="card-header font-weight-bold bg-dark text-white">
		Login to See Special Posts
		</div>
		<div class="card-body bg-dark">
			<form action="" class="form" method="post">
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
	                <button class="btn btn-secondary mt-3" name="submit" value="submit">Login</button>
	            </div>
	        </form>
		</div>
	</div>

    <!-- my-3 ကအပေါ်အောက်ကန်တာ -->
    <!-- <div class="col-md-12 table-bordered table-dark p-5">
        <h4 class="title text-center">Login to See Special Posts</h4>
        <form action="" class="form" method="post">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control rounded-0" name="email" id="email">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control rounded-0" name="password" id="password">
            </div>
            <p></p>
            <div class="row no-gutters justify-content-end">
                <button class="btn btn-info" name="submit" value="submit">Login</button>
            </div>
        </form>
    </div> -->
</div>

<?php include_once("views/footer.php"); ?>
<?php include_once("views/base.php");?>
