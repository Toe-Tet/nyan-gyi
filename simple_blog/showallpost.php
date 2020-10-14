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

?>


<div class="container my-5">
		<div class="row">
			<?php
 				$result = getAllPost(2);
 				foreach ($result as $post) {
					echo'
	                    <div class="col-12 col-lg-6 mb-3">
	                        <div class="card bg-dark">
	                            <div class="card-body">
	                                <h5 class="card-title">' .substr($post["title"], 0,20) .'</h5>
	                                <p class="card-text">'.substr($post["content"], 0,100) .'</p>

	                                <div class="float-right">
		                                <a href="postedit.php?pid='.$post["id"].'" class="btn btn-secondary">Edit</a>
		                                <a href="postdetail.php?pid='.$post["id"].'" class="ml-2 btn btn-secondary">Detail</a>
	                                </div>
	                            </div>
	                        </div>                      
	                    </div>
	                ';					 					
 				}
			?>
		</div>     
	</div>
</div>



<?php include_once("views/footer.php");
include_once("views/base.php");
?>