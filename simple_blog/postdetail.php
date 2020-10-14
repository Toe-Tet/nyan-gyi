    <?php

    include_once("views/top.php");
    // include_once "sysgem/MySession.php"; 
    include_once("views/header.php"); 
 
    
    // index ရဲ့ <a href="postdetail.php?pid='.$pid.'" class="btn btn-primary float-right">Detail</a>
    //postdetail.php?နောက်က pid ကိုယူတာ။ ဒီအတိုင်းယူတာမို့ GET နဲ့ယူတယ်။
    if (isset($_GET["pid"])) { 
       $pid = $_GET["pid"];
    }


    ?>
    <div class="container my-5 d-flex justify-content-center">        
        <div class="card bg-light-dark" style="width: 100%;">
            <?php
                $result = getSinglePost($pid);
                foreach ($result as $data) {

                    echo'
                    <div class="card-header font-weight-bold bg-light-dark">'
                        .$data["title"]. 
                    '</div>
                    <img src="assets/uploads/'.$data["imglink"].'" alt="" class="card-img-top img-fluid">
                    <div class="card-body">
                        <p class="m-0 card-text" style="line-height: 30px;">
                        '.$data["content"].'
                        </p>
                    </div>
                    <div class="card-footer bg-light-dark">
                        '.$data["writer"].'
                        <span class="float-right">
                            '.$data["created_at"].
                        '</span>
                    </div>';
                }
            ?>
        </div>
    </div>

    <?php include_once("views/footer.php");
    include_once("views/base.php");
    ?>
    