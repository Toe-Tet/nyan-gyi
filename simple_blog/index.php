    <?php

    include_once("views/header.php"); 
    include_once("views/top.php");
    // include_once "sysgem/MySession.php"; 
    $start = 0;
    if (isset($_GET['start'])) {
        $start = $_GET['start'];
    }

    $rows = getPostCount();
    ?>
    
    <div class="container my-5">        
        <div class="row">
            <section class="col-md-12">
                <div class="row">
                    <!-- my-3 ကအပေါ်အောက်ကန်တာ -->
                    <?php
                    $result = "";
                    if(checkSession("name")){
                        $result = getAllPost(2,$start);
                    }
                    else{
                        $result = getAllPost(1,$start);
                    }
                    // echo "<pre>".print_r($result,true)."</pre>";
                    foreach ($result as $post) {
                        $pid = $post["id"];
                        echo'
                        <div class="col-12 col-lg-6 mb-3">
                            <div class="card bg-dark">
                                <div class="card-body text-white">
                                    <h5 class="card-title">' .substr($post["title"], 0,20) .'</h5>
                                    <p class="card-text">'.substr($post["content"], 0,100) .'</p>

                                    <a href="postdetail.php?pid='.$pid.'" class="btn btn-secondary float-right">Detail</a>
                                </div>
                            </div>                      
                        </div>
                        ';
                    }
                    ?>

                </div>
            </section>              
        </div>
    </div>
    
<!--     <div class="container mb-5">
        <div class="col-md-12">
            <nav aria-label="Page navigation example">
              <ul class="pagination">
                    <?php
                        $t = 0;
                        for($i=0; $i< $rows; $i+=10){
                            $t++;
                            // echo $t. "<hr>";
                            echo '<li class="page-item bg-dark"><a class="page-link bg-dark text-white" style="border: 1px solid gray;" href="index.php?start='.$i.'">'.$t.'</a></li>';
                        }
                    ?>               
                </ul>
            </nav>
        </div>
    </div> -->

<?php include_once("views/footer.php");
include_once("views/base.php");
?>
