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
							function showStudentProp(item)
							{
								$("#replyResult").html(\'<img src="img/default-icon/wait.gif">\');
								const myArray = $(item).attr("value").split("-");
								var farijavab = myArray[0];
								var idproduct = myArray[1];
								var soalposit = myArray[2];
								
							$.ajax({
							
								    url: "aj.php",
								    type: "POST",
								    data: {op:"cioice",farijavab:farijavab,idproduct:idproduct,soalposit:soalposit},
									dataType: "json",
								    success: function(data){
										
								
										$("#replyResult").html("");
									
										  $("#content").html(data.html);
										  
										 if (data.backbtn1 != "undefined") {
                                             $("#content2").html(data.backbtn1);
                                                                           }  
										  
											if (typeof basesoal1 != "undefined") {
                                              $(basesoal1).css("background", "transparent");
											  $(item).css("background", "#007fee");
                                                                           }  
                                    if (typeof basesoal2 != "undefined") {
                                              $(basesoal2).css("background", "transparent");
											  $(item).css("background", "#007fee");
                                                                           } 
									if (typeof basesoal3 != "undefined") {
                                              $(basesoal3).css("background", "transparent");
											  $(item).css("background", "#007fee");
                                                                           } 
									if (typeof basesoal4 != "undefined") {
                                              $(basesoal4).css("background", "transparent");
											  $(item).css("background", "#007fee");
                                                                           } 				
									if (typeof basesoal5 != "undefined") {
                                              $(basesoal5).css("background", "transparent");
											  $(item).css("background", "#007fee");
                                                                           } 
									if (typeof basesoal6 != "undefined") {
                                              $(basesoal6).css("background", "transparent");
											  $(item).css("background", "#007fee");
                                                                           } 
									if (typeof basesoal7 != "undefined") {
                                              $(basesoal7).css("background", "transparent");
											  $(item).css("background", "#007fee");
                                                                           } 
									}
							      });
							
							
							
								
							
							
							
							
							}
						</script>

	<script type="text/javascript">
							function showStudentProp1(item)
							{
								$("#replyResult").html(\'<img src="img/default-icon/wait.gif">\');
								const myArray = $(item).attr("value").split("-");
								var farijavab = myArray[0];
								var idproduct = myArray[1];
								var soalposit = myArray[2];
								
							$.ajax({
							
								    url: "aj.php",
								    type: "POST",
								    data: {op:"cioice2",farijavab:farijavab,idproduct:idproduct,soalposit:soalposit},
									dataType: "json",
								    success: function(data){
										
								
										$("#replyResult").html("");
									
										  $("#contentnew").html(data.html);
										  
										 if (data.backbtn1 != "undefined") {
                                             $("#content4").html(data.backbtn1);
                                                                           }  
										  
											 if (typeof soal2 != "undefined") {
                                              $(soal2).css("background", "transparent");
											  $(item).css("background", "#007fee");
                                                                           } 
                               
									}
							      });
							
							
							
								
							
							
							
							
							}
						</script>
						
							<script type="text/javascript">
							function showStudentProp3(item)
							{
								$("#replyResult").html(\'<img src="img/default-icon/wait.gif">\');
								const myArray = $(item).attr("value").split("-");
								var farijavab = myArray[0];
								var idproduct = myArray[1];
								var soalposit = myArray[2];
								
							$.ajax({
							
								    url: "aj.php",
								    type: "POST",
								    data: {op:"cioice3",farijavab:farijavab,idproduct:idproduct,soalposit:soalposit},
									dataType: "json",
								    success: function(data){
										
								
										$("#replyResult").html("");
									if (data.backbtn1 != "0"){
											   $("#contentneww").html(data.html);
											  
										  }
										  
										  document.getElementById("countervibvib").style.visibility = "visible";
										 if (data.backbtn1 != "undefined") {
                                             $("#content5").html(data.backbtn1);
											 $("#niaz1").html(data.pop1);
											 $("#niaz2").html(data.pop2);
											 $("#niaz3").html(data.pop3);
											 $("#niaz4").html(data.pop4);
                                                                           }  
										  
										  
										  
										  
											if (typeof soal3 != "undefined") {
                                              $(soal3).css("background", "transparent");
											  $(item).css("background", "#007fee");
                                                                           } 
									}
							      });
							
							
							
								
							
							
							
							
							}
						</script>
						
						
						

						
						
						<script type="text/javascript">
							function myFunction(item)
							{
								$("#replyResult").html(\'<img src="img/default-icon/wait.gif">\');
								var x = document.getElementById("count").value;
								
								var pse1 = 1;
								var pse2 = 2;
								var pse3 = 3;
								var pse4 = 4;
								
								
								if (typeof price1 != "undefined") {
									
								const myArray1 = $(price1).attr("value").split("-");
								var pse1 = myArray1[3];	
								}
								
								if (typeof price2 != "undefined") {
									
								const myArray2 = $(price2).attr("value").split("-");
								var pse2 = myArray2[3];	
								}
								
								if (typeof price3 != "undefined") {
									
								const myArray3 = $(price3).attr("value").split("-");
								var pse3 = myArray3[3];	
								}
								
								if (typeof price4 != "undefined") {
									
								const myArray4 = $(price4).attr("value").split("-");
								var pse4 = myArray4[3];	
								}
								
								
								
							$.ajax({
							
								    url: "aj.php",
								    type: "POST",
								    data: {op:"final",x:x,pse1:pse1,pse2:pse2,pse3:pse3,pse4:pse4},
									dataType: "json",
								    success: function(data){
										if(data.statusCode==200){ 
									
									
									
									
									document.getElementById("price1").innerHTML = data.btn_fori_yero;
									document.getElementById("price2").innerHTML = data.btn_fori_doro;
									document.getElementById("price3").innerHTML = data.btn_no_fori_yero;
									document.getElementById("price4").innerHTML = data.btn_no_fori_doro;
									
									$("#replyResult").html("");
										}
										
									}
							      });
							
							
							
								
							
							
							
							
							}
						</script>
						<script type="text/javascript">
							function showStudentProp4(item)
							{
								$("#replyResult").html(\'<img src="img/default-icon/wait.gif">\');
								var x = document.getElementById("count").value;
								
								const myArray = $(item).attr("value").split("-");
								var name = myArray[0];
								var idproduct = myArray[1];
								var pricefinal = myArray[3];
								
							$.ajax({
							
								    url: "aj.php",
								    type: "POST",
								    data: {op:"basket",x:x,name:name,idproduct:idproduct,pricefinal:pricefinal},
									dataType: "json",
								    success: function(data){
										
								if (typeof price1 != "undefined") {
                                              $(price1).css("background", "transparent");
											  $(item).css("background", "#007fee");
                                                                           } 
								
														if (typeof price2 != "undefined") {
                                              $(price2).css("background", "transparent");
											  $(item).css("background", "#007fee");
                                                                           } 
								
														if (typeof price3 != "undefined") {
                                              $(price3).css("background", "transparent");
											  $(item).css("background", "#007fee");
                                                                           } 
								
														if (typeof price4 != "undefined") {
                                              $(price4).css("background", "transparent");
											  $(item).css("background", "#007fee");
                                                                           } 
								
								document.getElementById("price_show").innerHTML = data.pricefinal;
								
								
										$("#replyResult").html("");
									}
							      });
							
							
							
							}
						</script>
						
						
						<script type="text/javascript">
							function Myfinalss(item)
							{
								$("#replyResult").html(\'<img src="img/default-icon/wait.gif">\');
								var x = $(item).attr("value");
								var y = $(item).attr("name")
								
								
							$.ajax({
							
								    url: "aj.php",
								    type: "POST",
								    data: {op:"basket",x:x,y:y},
									dataType: "json",
								    success: function(data){
										
									document.getElementById("test5").style.visibility = "visible";
									
									
									var proce = y;

									    document.getElementById("test10").innerHTML = proce;
							$("#replyResult").html("");
										
										
									}
							      });
							
							
							
								
							
							
							
							
							}
						</script>
						
						
						
						<script type="text/javascript">
							function Myshoplist(item)
							{
								$("#replyResult").html(\'<img src="img/default-icon/wait.gif">\');
								var x = $(productid).attr("value");
								
							var y =	document.getElementById("price_show").innerHTML;
								
							$.ajax({
							
								    url: "aj.php",
								    type: "POST",
								    data: {op:"shop_list",x:x,y:y},
									dataType: "json",
								    success: function(data){
										
									if(data.statusCode==200){
										
									
										
										window.location.href = data.url;
										
									}
										
										
									}
							      });
							
							
							
								
							
							
							
							
							}
						</script>
						


                     ';





    echo'

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
                                              '.$qsoal.'
                                            </h4>
                                        </div>
                                        <div class="category-filter-box-desc">
                                            
                                                <div class="form-group form-check">
					';
					foreach($btnsolcount as $discountProp69)
					{
						
							$sol1=$discountProp69['sol1'];
							echo'
						
						<button name="basesoal1" id="basesoal1" value="'.$sol1.'-'.$id.'-1"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp(this)">'.$sol1.'</button>
						';
						
									
					}

					
					echo'
					
					 </div>
                       </div> </div>
                     </div> 
					';


					
					echo'
			                 <div name="content" id="content"></div> 
                             <div name="contentnew" id="contentnew"></div> 
							 <div name="contentnew" id="contentneww"></div> 
                              

   
								
				            			 <div class="col-sm-6" name="countervibvib" id="countervibvib" style="visibility:hidden;>
                                                            <div class="cart-counter">
                                                                <input type="text" name="count" id="count" class="counter" value="1" onchange="myFunction(this)">
                                                                    
                                                            </div>
                                                        </div>	
<div name="niaz" id="niaz">
							 <div class="se-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                      
                                        <div class="se-desc">
							 
							 <span name="niaz1" id="niaz1"></span>
							 <span name="niaz2" id="niaz2"></span>
							 <span name="niaz3" id="niaz3"></span>
							 <span name="niaz4" id="niaz4"></span>
							 
							 
							 
							 </div></div></div></div>
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
                                            
                                            
                                            
                                            <div class="se-cart-color">
                                                <div class="color-box">
                                                   
												   
												   
                                                  <input type="hidden" name="productid" id="productid" class="form-control" value="'.$_GET['id'].'">
												   <input type="hidden" name="tavlkkf" id="tavlkkf" class="form-control" value="">
                                                   
                                                   خلاصه انتخاب ها
                                                    
                                                </div>
                                            </div>
                                         
                                            <div class="se-cart-form">
                                               
                                                    <div class="row align-items-center">
                                                    
                                                       <div class="se-cart-price">
                                                
                                                <span class="se-cart-price-new" name="price_show" id="price_show">تنوع را انتخاب کنید</span>تومان
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
                                            <img class="img-fluid" src="img/product/product-image5.jpg" />
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
                                        <img src="img/product/wach2.jpg" alt="" class="img-fluid one-image">
                                        <img src="img/product/wach3.jpg" alt="" class="img-fluid two-image">
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