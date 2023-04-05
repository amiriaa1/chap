<?php
include('main.php');
include('header.php');
$fee = new ManageFees();

if(isset($_GET['id']))
{

    $qui=$_GET['id'];
    $discountList8877 = $fee->Getblogids($qui);



echo'  <div class="content">
        <div class="blog-content">
            <div class="container-fluid">
                <div class="row">
                 
                    
                    
                    <div class="col-lg-9 order-1">
                        <div class="blog-post shadow-box">
                            <div class="blog-post-title">
                                <h3>'.$discountList8877["0"]["title"].'</h3>
                                <div class="blog-post-title-items">
                                    <div class="blog-post-title-item">
                                        <img src="img/default-icon/user-profile.png" class="rounded-circle" alt="">
                                        <p class="text-muted">مدیر</p>
                                    </div>
                                   
                                  
                                    
                                </div>
                            </div>
                            <div class="blog-post-content">
                                <h4 class="title gold mb-2">'.$discountList8877["0"]["title"].'</h4>
                               <p>'.$discountList8877["0"]["content"].'</p>
                            </div>
                         
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end blog-content -->

       

        <!-- end article -->
    </div>';



}
else{
    exit;

}
include('footer.php');

?>