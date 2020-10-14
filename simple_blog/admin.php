<?php
include_once("views/top.php");

include_once("views/header.php");

// include_once("sysgem/DB_Hacker.php");


if (checkSession("name")) {
	if(getSession("name")!="nyanlynnhtut") {
		header("Location:index.php");
	}
}
else{
	header("Location:index.php");
}

if (isset($_POST["submit"])) {
	$postitle = $_POST["postitle"];
	$postype = $_POST["postype"];
	$postwriter = $_POST["postwriter"];
	$postcontent = $_POST["postcontent"];
	$subject = $_POST["subject"];

	$imglink = mt_rand(time(),time()) . "_" .$_FILES["file"]["name"] . mt_rand(time(),time());
	move_uploaded_file($_FILES['file']['tmp_name'],'assets/uploads/' . $imglink);
	
	$bol = insertPost($postitle,$postype,$postwriter,$postcontent,$imglink,$subject);

	if($bol){
		// <!-- bootstrap alert -->
        echo "
        <div class='container mt-5'> 
            <div class='alert alert-success alert-dismissible fade show' role='alert'>
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>x</span>
                </button>
               	Post Successfully Inserted.
            </div>
        </<div>";
        // <!-- bootstrap alert -->
	}else{
		// <!-- bootstrap alert -->
        echo "
        <div class='container mt-5'> 
            <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>x</span>
                </button>
                Post Insert Failed.
            </div>
        </<div>";
        // <!-- bootstrap alert -->
	}
	

}
?>



<div class="container my-5 d-flex justify-content-center">
	<!-- my-3 ကအပေါ်အောက်ကန်တာ -->
	<div class="card mb-5" style="width: 40rem;">
		<div class="card-header font-weight-bold bg-dark text-white">
		Post Insert Form
		</div>
		<div class="card-body bg-dark">
			<form method="POST" action="admin.php" enctype="multipart/form-data" >
	            <div class="form-group">
					<label class="text-white" for="postitle">Post Title</label>
					<input type="text" class="form-control" id="postitle" name="postitle">
				</div>			

				<div class="form-group">
					<label class="text-white" for="postype">Post Type</label> 					
					<select class="form-control" id="postype" name="postype">
						<option value="1">Free Post</option>
						<option value="2">Paid Post</option>					
					</select>
				</div>

				<div class="form-group">
					<label class="text-white" for="subject">Subject</label> 					
					<select class="form-control" id="subject" name="subject">
						<?php
							$subjects = getAllSubject();
							foreach ($subjects as $subject) {
								echo "<option value='".$subject["id"]."'>".$subject["name"]."</option>";
							}
						?>				
					</select>
				</div>

				<div class="form-group">
					<label class="text-white" for="postwriter">Post Writer</label>
					<input type="text" class="form-control" id="postwriter" name="postwriter">
				</div>

				<div class="form-group">
					<label class="text-white" class="">Image</label>
					<input type="file" id="file" name="file" class="form-control bg-white" >
				</div>

				<div class="form-group">
					<label class="text-white" for="postcontent">Post Content</label>
					<textarea type="text" class="form-control" id="postcontent" 
						name="postcontent" rows='15'></textarea>					
				</div>

				<p></p>
	            <div class="row no-gutters justify-content-end mt-3">
	            	<button class="btn btn-outline-secondary mr-2 mt-3">Cancel</button>
					<button class="btn btn-secondary mt-3" type="submit" name = "submit">Post</button>
	                <!-- <button class="btn btn-secondary mt-3" name="submit" value="submit">Login</button> -->
	            </div>
	        </form>
		</div>
	</div>

	<!-- <div class="row">
		<section class="col-md-12">
			<form method="POST" action="admin.php" enctype="multipart/form-data" class="mb-5 table-bordered p-5">
				<h3 class="text-center text-danger">Post Insert Form</h3>

				<div class="form-group">
					<label for="postitle">Post Title</label>
					<input type="text" class="form-control" id="postitle" name="postitle">
				</div>			

				<div class="form-group">
					<label for="postype">Post Type</label> 					
					<select class="form-control" id="postype" name="postype">
						<option value="1">Free Post</option>
						<option value="2">Paid Post</option>					
					</select>
				</div>

				<div class="form-group">
					<label for="subject">Subject</label> 					
					<select class="form-control" id="subject" name="subject">
						<?php
							$subjects = getAllSubject();
							foreach ($subjects as $subject) {
								echo "<option value='".$subject["id"]."'>".$subject["name"]."</option>";
							}
						?>				
					</select>
				</div>

				<div class="form-group">
					<label for="postwriter">Post Writer</label>
					<input type="text" class="form-control" id="postwriter" name="postwriter">
				</div>

				<div class="form-group">
					<label class="custom-file">
						<input type="file" id="file" name="file" class="custom-file-input" >
						<span class="custom-file-control"></span>
					</label>
				</div>

				<div class="form-group">
					<label for="postcontent">Post Content</label>
					<textarea type="text" class="form-control" id="postcontent" 
					name="postcontent" rows='15'>						
				</textarea>					
			</div>									

			<div class="row no-gutter justify-content-end">
				<button class="btn btn-outline-primary btn-primary mr-2">Cancel</button>
				<button class="btn btn-primary" type="submit" name = "submit">Post</button>
			</div>
		</form>	
		</section>              
	</div> -->
</div>



<?php include_once("views/footer.php");
include_once("views/base.php");
?>