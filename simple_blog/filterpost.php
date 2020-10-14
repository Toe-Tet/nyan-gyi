    <?php
    include_once("views/header.php"); 
    include_once("views/top.php");
  

    // if (isset($_GET["sid"])) {
    //     $sid = $_GET["sid"];
    //     echo "<h1>$sid</h1>";
    // }

    ?>
    
    <div class="container my-5">        
        <div class="row">
            <!-- my-3 ကအပေါ်အောက်ကန်တာ -->
            <?php
                $result = "";
                if(checkSession("name")){
                    $result = getFilteredPost($_GET["sid"],2);
                }
                else{
                    $result = getFilteredPost($_GET["sid"],1);
                }
                // echo "<pre>".print_r($result,true)."</pre>";
                foreach ($result as $post) {
                    $pid = $post["id"];
                    echo'
                    <div class="col-12 col-lg-6 mb-3">
                        <div class="card bg-dark">
                            <div class="card-body">
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
    </div>

    <?php include_once("views/footer.php");
    include_once("views/base.php");
    ?>
    