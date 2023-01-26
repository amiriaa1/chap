<?php

include('main.php');
include('header.php');
$fee = new ManageFees();
$qui="1";
$discountList8877 = $fee->Getbloglist($qui);
echo'

<body>

	
				<div class="main-category">
        <div class="container-fluid">
		
		<center>
					<div class="col-lg-2 col-sm-4 col-6 mb-3">
                   
                     <a href="vendor">
                        <div class="cart-small">
                            <div class="cart-small-icon">
                                <img width="50" src="img/1.jpg" alt="" class="img-fluid">
                            </div>
                            <div class="cart-small-desc ms-lg-3 text-center">
                              
                               <h6>چاپ طراحی</h6>
                              
                            </div>
                        </div>
                    </a>
                </div>
				
				</center>
	
		
            <div class="row justify-content-center">
			
			
			<div class="col-lg-2 col-sm-4 col-6 mb-3">
                    <a href="category?type=4">
                        <div class="cart-small">
                            <div class="cart-small-icon">
                                <img width="50" src="img/1.jpg" alt="" class="img-fluid">
                            </div>
                            <div class="cart-small-desc ms-lg-3 text-center">
                               <h6>فروش و خدمات ماشین های اداری</h6>
                              
                            </div>
                        </div>
                    </a>
                </div>
				

			
	
   
					<div class="col-lg-2 col-sm-4 col-6 mb-3">
                    <a href="category?type=3">
                        <div class="cart-small">
                            <div class="cart-small-icon">
                                <img width="50" src="img/1.jpg" alt="" class="img-fluid">
                            </div>
                            <div class="cart-small-desc ms-lg-3 text-center">
                               
                               <h6>فروش ملزومات اداری</h6>
                            </div>
                        </div>
                    </a>
                </div>
				
				
	
			
	
				
				
	
			
			</div>
			
			
			
			</div>
			</div>

    

    <div class="article-latest">
        <div class="container-fluid">
            <div class="al">
                <div class="row mb-4">
                    <div class="col-12">
                        <div class="al-header d-flex align-items-start justify-content-between">
                            <h6 class="slider-title">آخرین مقالات سایت</h6>
                            <a href="blog" class="fromCenter border-animate">مشاهده همه</a>
                        </div>
                    </div>
                </div>
				
				   
                
					
                <div class="swiper" id="article">
                    <div class="swiper-wrapper">
					
					
				
					
                     
						
						
						
						';
                 foreach($discountList8877 as $discountProp69)
                                    {


                                        echo'
                                        
                                           <div class="swiper-slide">
                            <a href="blog-detail?id='.$discountProp69["id"].'">
                                <div class="al-item">
                                    <div class="al-img">
                                        <img src="img/blog/'.$discountProp69["pic"].'" class="img-fluid" alt="">
                                    </div>
                                    <div class="al-overlay"></div>
                                    <div class="al-date rounded-pill">
                                        '.$discountProp69["timastammp"].'  
                                    </div>
                                    <div class="al-title">
                                         '.$discountProp69["title"].'
                                    </div>
                                </div>
                            </a>
                        </div>
                                        
                                        ';

                                    }
                        echo'
						
                            
                       
                     
                        
                        
                        
                        
                        
                   
                    </div>
                    <div class="swiper-button-next sb2"></div>
                    <div class="swiper-button-prev sb2"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- end article -->

    <div class="partner">
        <div class="container-fluid">
            <div class="partner-parrent">
                <div class="d-flex align-items-center justify-content-between pb-3">
                    <div class="pbt-header-title">
                        <h6 class="slider-title">برخی از مشتریان ما</h6>
                    </div>
                    <div class="pbt-header-link">
                        <a href="category?type=1" class="fromCenter border-animate">مشاهده همه</a>
                    </div>
                </div>
                <div class="swiper partnerSwipper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide partner-item">
                            <a href="#">
                                <img src="img/brand/brand1.png" class="img-fluid" alt="">
                            </a>
                        </div>
                        <div class="swiper-slide partner-item">
                            <a href="#">
                                <img src="img/brand/brand2.png" class="img-fluid" alt="">
                            </a>
                        </div>
                        <div class="swiper-slide partner-item">
                            <a href="#">
                                <img src="img/brand/brand3.png" class="img-fluid" alt="">
                            </a>
                        </div>
                        <div class="swiper-slide partner-item">
                            <a href="#">
                                <img src="img/brand/brand5.png" class="img-fluid" alt="">
                            </a>
                        </div>
                        <div class="swiper-slide partner-item">
                            <a href="#">
                                <img src="img/brand/brand7.png" class="img-fluid" alt="">
                            </a>
                        </div>
                        <div class="swiper-slide partner-item">
                            <a href="#">
                                <img src="img/brand/brand8.png" class="img-fluid" alt="">
                            </a>
                        </div>
                        <div class="swiper-slide partner-item">
                            <a href="#">
                                <img src="img/brand/canon.png" class="img-fluid" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="swiper-button-next sb2" style="top: 36%;"></div>
                    <div class="swiper-button-prev sb2" style="top: 36%;"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- end partner -->

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
    <script src="js/plugin/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>


</body>

</html>

';


?>