<?php

include('main.php');
include('header.php');
$student = new ManageStudents();
$fee = new ManageFees();	
unset($_SESSION['product']);
unset($_SESSION['product2']);
$id=$_GET['id'];
if(isset($_GET['id']))
{
			
			$id=$_GET['id'];
			
$query = "WHERE aid=$id  ORDER BY `nim_product`.`aid` ASC";			
$discountList = $fee->Getproductlist($query);


$btnsolcount = $fee->Getsol1fromsol($id);
foreach($discountList as $discountProp)
					{
						
							$title=$discountProp['title'];
                        $baseprice=$discountProp['baseprice'];
							$description=$discountProp['description'];
							$type=$discountProp['type'];
							$qa=$discountProp['qa'];
							$soal_count=$discountProp['soal_count'];

                        $decption1=$discountProp['decption1'];
                        $decption2=$discountProp['decption2'];

                        $qsoal=$discountProp['qsoal'];


					}



}
else{
	exit;
	
}
$uptrack_code= $_REQUEST['btn'];








    echo'

<script type="text/javascript">
							function Myshoplist(item)
							{
								$("#replyResult").html(\'<img src="img/default-icon/wait.gif">\');
								var x = $(productid).attr("value");
								
							var y =	document.getElementById("price_show").innerHTML;
                            
								
							$.ajax({
							
								    url: "aj.php",
								    type: "POST",
								    data: {op:"shop_list2",x:x,y:y},
									dataType: "json",
								    success: function(data){
										
									if(data.statusCode==200){
										
									
										
										window.location.href = data.url;
										
									}
										
										
									}
							      });
							
							
							
								
							
							
							
							
							}
						</script>
						


    <div class="content" style="padding: 10px 0;">
        <!-- start product meta -->
        <div class="product-meta">
            <div class="container-fluid">
               
                <div class="summary shadow-sm">
                    <div class="row">
                        
                        <div class="col-lg-8 border-right-product">
                            <div class="summary-entry mt-lg-0 mt-4">
                                
                                  <div class="col-sm-6"><center><div id="replyResult"></div>



					 <div class="category-filter">
                                    <div class="category-filter-box">
                                        <div class="category-filter-box-title">
                                            <h4 class="fw-bold">
                                              '.$title.'<br><br>'.$description.'
                                            </h4>
                                        </div>
                                     </div>
                     </div> 
					
			          
                                                        </div>	


                            </div>
							
							
                            <div class="se-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                      
                                        <div class="se-desc">
										
                                        
                                       ';

											
											echo'
											
									 </div> </div>
									
                                    <div class="col-lg-6 m-auto mt-lg-2 mt-3">
									
								
                                        <div class="se-cart shadow-sm">
                                             
                                                  <input type="hidden" name="productid" id="productid" class="form-control" value="'.$_GET['id'].'">
												   <input type="hidden" name="tavlkkf" id="tavlkkf" class="form-control" value="">
                                                   
                                                   
                                            <div class="se-cart-form">
                                               
                                                    <div class="row align-items-center">
                                                    
                                                       <div class="se-cart-price">
                                                
                                                <span class="se-cart-price-new" name="price_show" id="price_show">'. $baseprice.'</span> تومان
                                            </div>
                                                        <div class="col-sm-6">
                                                         ';
														 if(!$isLogedIn){
															 
									echo'<a href="login"> <button  class="shadow-sm fw-bold btn-add-to-cart mt-sm-0 mt-2 waves-effect waves-light">برای خرید وارد شوید</button></a>';

														 }
									 else{echo'<button  class="shadow-sm fw-bold btn-add-to-cart mt-sm-0 mt-2 waves-effect waves-light" onclick="Myshoplist(this)">افزودن به سبد خرید</button>';
									 }
echo'													 
                        
                                                                
                                                                
                                                        </div>
                                                    </div>
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-4">
                        
                            <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff"
                                class="swiper product-gallery">
                               
                                <div class="icon-product-box">
                                    
                                    
                                 
                                   
                                    
                                </div>
                                <div class="swiper-wrapper" title="برای بزرگنمایی تصویر دابل کلیک کنید">
                                    
                                    <div class="swiper-slide">
                                        <div class="swiper-zoom-container">
                                            <img class="img-fluid" src="img/product/'.$discountProp['pic'].'" />
                                        </div>
                                    </div>
                                   
                                </div>
                               
                            </div>
                            
                        </div>
                        
                        <div class="col-12">
                            <div class="product-feature">
                                <nav class="navbar">
                                    <ul class="navbar-nav justify-content-md-between justify-content-center">
                                        <li class="nav-item">
                                            <img src="img/product-feature/product_feauture_1.png" alt="">
                                            <span>تحویل فوری</span>
                                        </li>
                                        <li class="nav-item">
                                            <img src="img/product-feature/product_feauture_2 (1).png" alt="">
                                            <span>پرداخت در محل</span>
                                        </li>
                                        <li class="nav-item">
                                            <img src="img/product-feature/product_feauture_3.png" alt="">
                                            <span>ضمانت اصالت کالا
                                            </span>
                                        </li>
                                        <li class="nav-item">
                                            <img src="img/product-feature/product_feauture_4.png" alt="">
                                            <span>ضمانت بازگشت وجه
                                            </span>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end product meta -->
    </div>

    
    <!-- end multi seller -->

    <!-- start product desc -->
    <div class="product-descs" id="prodesc">
        <div class="container-fluid">
            <div class="product-desc shadow-md">
                <div class="product-desc-tab">
                    <ul class="nav" id="productTab" role="tablist">
                        <li class="nav-item">
                            <button class="active waves-effect waves-light" id="productDescLess" data-bs-toggle="tab"
                                data-bs-target="#productDescLess-pane" role="tab" type="button" aria-selected="true"><a
                                    href="#prodesc"><i class="bi bi-file-richtext"></i> معرفی</a></button>
                        </li>
                     
                        <li class="nav-item">
                            <button class=" waves-effect waves-light" id="productTable" data-bs-toggle="tab"
                                data-bs-target="#productTable-pane" role="tab" type="button" aria-selected="false"><a
                                    href="#prodesc"><i class="bi bi-grid"></i> توضیحات تکمیلی</a></button>
                        </li>
                       
                       
                    </ul>
                </div>
                <div class="product-desc-tab-content">
                    <div class="tab-content" id="productTabContent">
                        <div class="tab-pane fade show active product-desc-less-contents" id="productDescLess-pane">
                            <div class="product-desc-content">
                                <input type="checkbox" class="read-more-state" id="readMore3" />
                               
                                <div class="read-more-wrap">
                                    <h2 class="title gold mb-2">معرفی محصول</h2>
                                    <p>
                                       '.$decption1.'
                                    </p>
                                    <!-- متن بیشتر -->
                                    <div class="read-more-target">
                                      '.$decption2.'
                                    </div>
                                    <!-- پایان متن بیشتر -->
                                </div>
                                <!-- پایان والد بیشتر کمتر -->
                                <label for="readMore3" class="read-more-trigger"></label>
                            </div>
                        </div>
						
						
						

                      
                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	
	
	
    <!-- end product desc -->
    <div class="product-box-two">
        <div class="container-fluid">
            <div class="pbt">
                <div class="pbt-header">
                    <div class="pbt-header-title">
                        <h6 class="slider-title">محصولات مشابه</h6>
                    </div>
                    <div class="pbt-header-link">
                 
                        <a href="category?type='.$type.'" class="fromCenter border-animate">مشاهده همه</a>
                    </div>
                </div>
                
                
                <div class="swiper product-box-two-slider">
                    <div class="swiper-wrapper">
                       
						
					';
$query = "WHERE type=$type  ORDER BY `nim_product`.`aid` ASC";
$discountList = $fee->Getproductlist34($query);
foreach($discountList as $discountProp){
                                     echo'
						
						<div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="product-box-item">
                                <div class="product-box-item-img">
                                    <a href="">
                                        <img src="img/product/'.$discountProp['pic'].'" alt="" class="img-fluid one-image">
                                        <img src="img/product/'.$discountProp['pic'].'" alt="" class="img-fluid two-image">
                                    </a>
                                    
                                </div>
                                <a href="product?id='.$discountProp['aid'].'">
                                    <div class="product-box-item-desc">
                                        <div class="product-box-item-title">
                                            <h6>
                                                 '.$discountProp['title'].'
                                            </h6>
                                        </div>
                                        
                                    </div>
                                </a>
                            </div>
                        </div></div>
                        
                     ';
                                      }
                                     echo'
                     
                     
                        <div class="swiper-slide">
                            <div class="product-box-item see-more-item">
                                <div class="see-all">
                                    <a href="category?type='.$type.'">
                                        <i class="bi bi-arrow-left-circle"></i>
                                        <p>مشاهده همه</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-next sb2"></div>
                    <div class="swiper-button-prev sb2"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- end product box two -->


	
	
	 ';
   include('footer.php');
   echo'
	
	
	
 
   
    



    <script src="js/jquery-3.6.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/swiper-bundle.min.js"></script>
    <script src="js/app.js"></script>
    <script src="js/plugin/countdown/countdown.js"></script>
    <script src="js/plugin/back-to-top/jquery-backToTop.min.js"></script>
    <script src="js/plugin/hint-css/hint-css.js"></script>
    <script src="js/jquery-app.js"></script>
    <script src="js/plugin/waves/waves.js"></script>

    <!-- forced in a page -->
    <script src="js/plugin/chartjs/chart.js"></script>
    <script src="js/plugin/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>





</body>

</html>

';

?>