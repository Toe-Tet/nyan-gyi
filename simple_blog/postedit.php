<?php
include_once("views/top.php");
include_once("views/header.php");

if (isset($_GET["pid"])) {
	$pid = $_GET["pid"];
	$result = getSinglePost($pid);
	$posts=[];
	foreach ($result as $item) {
		$posts["title"]=$item["title"];
		$posts["type"]=$item["type"];
		$posts["writer"]=$item["writer"];
		$posts["content"]=$item["content"];
		$posts["imglink"]=$item["imglink"];
		// echo $posts["imglink"];
	
	}
	
}
if (isset($_POST["submit"])) {
		$file = $_FILES["file"];
		$imgname = "";
		if ($_FILES["file"]["name"] != null) {
			$imgname = mt_rand(time(),time())."_".$_FILES["file"]["name"];
			// $imgname = $_FILES["file"]["name"];
			move_uploaded_file($_FILES["file"]["tmp_name"], 'assets/uploads/'.$imgname);

		}
		else{
			$imgname = $_POST["oldimg"];
		}

		$title = $_POST["postitle"];
		$postype = $_POST["postype"];
		$postwriter = $_POST["postwriter"];
		$postcontent = $_POST["postcontent"];
		$subject = $_POST["subject"];
		$imglink = $imgname;
		$pid = $_GET["pid"];
		
		updatePost($title,$postype,$postwriter,$postcontent,$imglink,$pid,$subject);
	}
	


?>



<div class="container my-5 d-flex justify-content-center">

	<div class="card mb-5" style="width: 40rem;">
		<div class="card-header font-weight-bold bg-dark text-white">
		Post Edit Form
		</div>
		<div class="card-body bg-dark">
			<form method="POST" action="postedit.php?pid=<?php echo $_GET["pid"];?>" enctype="multipart/form-data" >
	            <div class="form-group">
					<label class="text-white" for="postitle">Post Title</label>
					<input type="text" class="form-control" id="postitle" name="postitle" value= "<?php echo $posts["title"]; ?>">
				</div>			

				<div class="form-group">
					<label class="text-white" for="postype">Post Type</label> 					
					<select class="form-control" id="postype" name="postype" value= "<?php echo $posts["type"]; ?>">
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
					<input type="text" class="form-control" id="postwriter" name="postwriter" value= "<?php echo $posts["writer"]; ?>">
				</div>

				<div class="form-group">
					<label class="text-white" for="postcontent">Post Content</label>
					<textarea type="text" class="form-control" id="postcontent" name="postcontent" rows='15' ><?php echo $posts["content"]; ?></textarea>								
				</div>

				<div class="form-group">
					<label class="text-white">Image</label>
					<input type="file" id="file" name="file" class="form-control bg-white" >
					<input type="hidden" name="oldimg" value="<?php echo $posts['imglink']?>">
				</div>

				<img src="assets/uploads/<?php echo $posts["imglink"];?> " class=img-fluid>	

				<p></p>
	            <div class="row no-gutters justify-content-end mt-3">
	            	<button class="btn btn-outline-secondary mr-2 mt-3">Cancel</button>
					<button class="btn btn-secondary mt-3" type="submit" name = "submit">Update</button>
	                <!-- <button class="btn btn-secondary mt-3" name="submit" value="submit">Login</button> -->
	            </div>
	        </form>
		</div>
	</div>

</div>



<?php include_once("views/footer.php");
include_once("views/base.php");
?>