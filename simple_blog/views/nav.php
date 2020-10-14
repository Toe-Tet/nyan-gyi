    <?php
    // session_start();
    include_once "sysgem/MySession.php";

        // include_once("views/top.php");
        // include_once("views/header.php"); 
        // include_once("views/nav.php"); 
    ?>



    <!-- nav nyan -->
    <nav class="navbar navbar-expand-lg bg-dark px-md-5">
    	<a class="navbar-brand text-white font-weight-bold" href="#">Simplex Blog</a>
    	<button class="navbar-toggler mt-2" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
	    	<div class="stick"></div>
	    	<div class="stick"></div>
	    	<div class="stick"></div>
	  	</button>
        <div class="container">
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                    <li class="nav-item px-4">
                        <a class="nav-link"  href="index.php">Home</a>
                    </li>
                    <li class="nav-item px-4">
                        <a  class="nav-link"  href="filterpost.php?sid=1">Frontend</a>
                    </li>
                    <li class="nav-item px-4">
                        <a  class="nav-link"  href="filterpost.php?sid=2">Backend</a>
                    </li>
                    <li class="nav-item px-4">
                        <a  class="nav-link"  href="filterpost.php?sid=3">Database</a>
                    </li>
                    <?php
                    if (checkSession("name")) {

                        ?>
                        <li class="nav-item px-4 dropdown">
                            <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown"data-toggle="dropdown">
                                Posts
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                                <a class='dropdown-item' href='showallpost.php'>All Posts</a>
                                <a class='dropdown-item' href='admin.php'>Insert Post</a>


                            </div>
                        </li>
                        <?php
                    }
                    ?>

                    <li class="nav-item px-4 dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">


                            <?php
                            if (checkSession("name")) {
                                echo getSession("name");
                            }
                            else{
                                echo "Member";
                            }
                            ?>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown2">

                            <?php
                            if (checkSession("name")) {
                                echo "<a class='dropdown-item text-black' href='logout.php'>Logout</a>";
                            }
                            else{
                                echo "<a class='dropdown-item text-black' href='login.php'>Login</a>
                                <a class='dropdown-item' href='register.php'>Register</a>";
                            }   

                            ?>

                        </div>
                    </li>

                </ul>           
            </div>

        </div>
    </nav>
    <!-- nav nyan-->


