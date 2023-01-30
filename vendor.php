<?php
include('main.php');
include('header.php');
$fee = new ManageFees();


echo'

<script type="text/javascript">
							function myFunction(item)
							{
                                $("#content").html("1");
							var type = $(item).attr("value");
								$.ajax({
							
								    url: "vendorjr.php",
								    type: "POST",
								    data: {op:"vemon",type:type},
									dataType: "json",
								    success: function(data){
										
									if(data.statusCode==200){
										
									$("#content").html(data.html1);
										$(basesoal1).css("background", "#FFFFFF");
                                        $(basesoal2).css("background", "#FFFFFF");
                                        
											  $(item).css("background", "#007fee");
										if (type == "1"){$("#hedrr").html("انتخاب شما افست ");}
										if (type == "2"){$("#hedrr").html("انتخاب شما دیجیتال ");}
									}
										
										
									}
							      });
							
							}
						</script>
						
   
							
				<div class="main-category">
        <div class="container-fluid">
            <div class="row justify-content-center">
			
			
			
			 <div class="col-lg-2 col-sm-4 col-6 mb-3">
                
                        <div class="cart-small"   value="1" onclick="myFunction(this)" name="basesoal1" id="basesoal1">
                            <div class="cart-small-icon">
                                <img width="50" src="img/5.jpg" alt="" class="img-fluid">
                            </div>
                            <div class="cart-small-desc ms-lg-3 text-center">
                                <h6>چاپ افست</h6>
                               <p>سفارش آنلاین</p>
                            </div>
                        </div>
                   
                </div>
			
			<div class="col-lg-2 col-sm-4 col-6 mb-3">
                    
                         <div class="cart-small"   value="2" onclick="myFunction(this)" name="basesoal2" id="basesoal2">
                            <div class="cart-small-icon">
                                <img width="50" src="img/6.jpg" alt="" class="img-fluid">
                            </div>
                            <div class="cart-small-desc ms-lg-3 text-center">
                                <h6>چاپ دیجیتال</h6>
                               <p>سفارش آنلاین</p>
                            </div>
                        </div>
                    
                </div>
			<div class="col-lg-2 col-sm-4 col-6 mb-3">
                   
                        <div class="cart-small" value="soon" onclick="myFunction2(this)"  name="basesoal3" id="basesoal3">
                            <div class="cart-small-icon">
                                <img width="50" src="img/4.jpg" alt="" class="img-fluid">
                            </div>
                            <div class="cart-small-desc ms-lg-3 text-center">
                                <h6>چاپ پلات و لمینت</h6>
                               <p>برای سفارش تماس بگیرید 1702</p>
                            </div>
                        </div>
                    
                </div>
                
                <div class="col-lg-2 col-sm-4 col-6 mb-3">
                   
                        <div class="cart-small"  name="basesoal4" id="basesoal4">
                            <div class="cart-small-icon">
                                <img width="50" src="img/1.jpg" alt="" class="img-fluid">
                            </div>
                            <div class="cart-small-desc ms-lg-3 text-center">
                                <h6> چاپ بنر و فلکس ,اکوسالت</h6>
                               <p>برای سفارش تماس بگیرید 1702</p>
                            </div>
                        </div>
                   
                </div>
			
			
			
			
			<div class="col-lg-2 col-sm-4 col-6 mb-3">
                  
                        <div class="cart-small"   name="basesoal5" id="basesoal5">
                            <div class="cart-small-icon">
                                <img width="50" src="img/3.jpg" alt="" class="img-fluid">
                            </div>
                            <div class="cart-small-desc ms-lg-3 text-center">
                                <h6>طراحی</h6>
                               <p>برای سفارش تماس بگیرید 1702</p>
                            </div>
                        </div>
                    
                </div>
			</div>
			
			</div>
			
			</div>

   <div class="about-us py-3">
            <div class="container-fluid">
                <div class="content-box shadow-box px-3">
                  <center>  <h4 name="hedrr" id="hedrr">
                        دسته بندی محصول خود را از بالا انتخاب کنید
                    </h4>
                    
                    
                     
        <div class="main-category">
            <div class="container-fluid">
                <div class="row justify-content-center">
                   
			
                    		

				
                <div class="row">
                  
					 <div class="col-lg-9">
                        <div class="category-item">
                            <div class="row" name="content" id="content">
                             
          					
       


                                
                                </div></div></div></div>		

				
                     
                     
                     
                     
								
				  </div>
				    </div>
					  </div>
  
                     
                     
                     
                     
                 
                </div>
            </div>
        </div>





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


    <!-- forced in a page -->
    <script src="js/plugin/bootstrap-slider/bootstrap-slider.min.js"></script>
    <script src="js/plugin/select2/select2.full.min.js"></script>
    <script src="js/plugin/select2/fa.js"></script>

    <script>
        $(document).ready(function () {
            $(".select2-box").select2();
        });
    </script>

  
';
   include('footer.php');
?>