<?php
include('main.php');
include('header.php');
$fee = new ManageFees();
echo'


 <div class="content">
   

      
        <!-- end article -->

        <div class="blog-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="category-filters">
                          
                        
                        
                              <div class="category-filter">
                                <div class="category-filter-box">
                                    <div class="category-filter-box-title">
                                        <h4 class="fw-bold">
                                            دسته بندی مقالات
                                        </h4>
                                    </div>
                                    <div class="category-filter-box-desc">
                                        <div class="d-flex flex-wrap align-items-center justify-content-center">
                                            <a href="blog?type=1" class="blog-tag">چاپ و طراحی</a>
                                            <a href="blog?type=2" class="blog-tag">ماشین های اداری</a>
                                            <a href="blog?type=3" class="blog-tag">ملزومات اداری و دفتری</a>
                                         
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            
                            
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="blog-content-items">
                            <div class="row">
                            
                            
                              
                              
                              
                              ';
$qui="1";
$type="1";
if(isset($_GET['type'])){
if ($_GET['type']==1){$type="1";}
if ($_GET['type']==2){$type="2";}
if ($_GET['type']==3){$type="3";}

}

$discountList8877 = $fee->Getbloglist($qui,$type);
foreach($discountList8877 as $discountProp69) {

echo'

   <div class="col-md-4 col-sm-6">
                                    <div class="card blog-content-item shadow-box">
                                        <div class="card-image">
                                            <img src="img/blog/'.$discountProp69["pic"].'" class="card-img-top" alt="">
                                            <div class="card-hover">
                                                <a href="blog_de?id='.$discountProp69["id"].'">مشاهده</a>
                                            </div>
                                        </div>
                                        <a href="blog_de?id='.$discountProp69["id"].'">
                                            <div class="card-body">
                                                <h5 class="card-title fw-bold">
                                                     '.$discountProp69["title"].'
                                                </h5>
                                           
                                            </div>
                                            <div class="card-footer d-flex align-items-center justify-content-between">
                                                <div class="auther d-flex align-items-center">
                                                    <img src="img/default-icon/user-profile.png" width="35"
                                                        class="img-fluid rounded-circle" alt="">
                                                    <div class="date ms-2">
                                                        <p class="fw-bold text-muted">هرجا چاپ</p>
                                                       
                                                    </div>
                                                </div>
                                                <div class="cat">
                                                    <a class="blog-tag">
                                                        خدمات چاپ
                                                    </a>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                </div>
                                
                                

';
}
                               echo'
                          
                             
                               
                                
                                
                                
                                
                                
                                
                                
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end blog-content -->

        <div class="show-more">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="show-more-btn">
                            <button class="shadow-box waves-effect waves-light">مشاهده بیشتر <i
                                    class="bi bi-arrow-down"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

      

    </div>
    <!-- end content -->

';
include('footer.php');
?>