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

$discountList77 = $fee->Getproducttanavolistbyid($id);
$discountList2 = $fee->Getproducttanavolistbyid($id);
$counttttt = $fee->Getproducttanavolistbyidandif($id);
foreach($discountList as $discountProp)
					{
						
							$title=$discountProp['title'];
							$description=$discountProp['description'];
							$type=$discountProp['type'];
							$qa=$discountProp['qa'];
						
									
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
								var soalposit = myArray[0];
								var idsoal = myArray[1];
								var btn = myArray[2];
								var farijavab = myArray[3];
								var price = myArray[4];
							$.ajax({
							
								    url: "aj.php",
								    type: "POST",
								    data: {op:"cioice",soalposit:soalposit,idsoal:idsoal,btn:btn,farijavab:farijavab,price:price,},
									dataType: "json",
								    success: function(data){
										
										
								
										var proce = data.fgt["0"].farijavab;
									
									if (soalposit != "1") {
										var proce2 = data.fgt["1"].farijavab;
										document.getElementById("test2").innerHTML = proce2;
									}
										
									    document.getElementById("test1").innerHTML = proce;
										
										document.getElementById("wallet_type").style.visibility = "visible";
										
										$("#replyResult").html("");
										
										
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
							function showStudentProppp(item)
							{
								$("#replyResult").html(\'<img src="img/default-icon/wait.gif">\');
								const myArray = $(item).attr("value").split("-");
								var soalposit = myArray[0];
								var idsoal = myArray[1];
								var btn = myArray[2];
								var farijavab = myArray[3];
								var price = myArray[4];
							$.ajax({
							
								    url: "aj.php",
								    type: "POST",
								    data: {op:"cioice",soalposit:soalposit,idsoal:idsoal,btn:btn,farijavab:farijavab,price:price,},
									dataType: "json",
								    success: function(data){
										
										
								
										var proce = data.fgt["1"].farijavab;
									
										
										
									    document.getElementById("test2").innerHTML = proce;
										
										document.getElementById("wallet_type").style.visibility = "visible";
										
										
										$("#replyResult").html("");
										
										
									
									
									if (typeof secentsoal != "undefined") {
                                              $(secentsoal).css("background", "transparent");
											  $(item).css("background", "#007fee");
                                                                           }  
                                    if (typeof secentsoa2 != "undefined") {
                                              $(secentsoa2).css("background", "transparent");
											  $(item).css("background", "#007fee");
                                                                           } 
									if (typeof secentsoa3 != "undefined") {
                                              $(secentsoa3).css("background", "transparent");
											  $(item).css("background", "#007fee");
                                                                           } 
									if (typeof secentsoa4 != "undefined") {
                                              $(secentsoa4).css("background", "transparent");
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
								
								
							$.ajax({
							
								    url: "aj.php",
								    type: "POST",
								    data: {op:"final",x:x},
									dataType: "json",
								    success: function(data){
										if(data.statusCode==200){ 
									document.getElementById("test5").style.visibility = "visible";
									
									$("#twowayfori").val(data.foridoro);
									$("#twowayno").val(data.doroghyrfori);
									$("#yekwayno").val(data.yeroghyrfori);
									$("#yelwayfori").val(data.foriyero);
									document.getElementById("twowayfori").innerHTML = data.foridoro;
									document.getElementById("twowayno").innerHTML = data.doroghyrfori;
									document.getElementById("yekwayno").innerHTML = data.yeroghyrfori;
									document.getElementById("yelwayfori").innerHTML = data.foriyero;
									
									document.getElementById("finalproce").innerHTML = data.foriyero;
							$("#replyResult").html("");
										}
										
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
								
								
								
							$.ajax({
							
								    url: "aj.php",
								    type: "POST",
								    data: {op:"shop_list",x:x},
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
                <div class="row">
                    <div class="col-12">
                        <div class="product-meta-breadcrumb shadow-sm">
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item">
                                        <a href="#">خانه</a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <a href="#">محصولات</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        <span>'.$title.'</span>
										
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="summary shadow-sm">
                    <div class="row">
                        <div class="col-lg-4">
                            <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff"
                                class="swiper product-gallery">
                                <div class="summary-offer">
                                    <span></span>9%</span>
                                </div>
                                <div class="icon-product-box">
                                    
                                    
                                 
                                   
                                    
                                </div>
                                <div class="swiper-wrapper" title="برای بزرگنمایی تصویر دابل کلیک کنید">
                                    
                                    <div class="swiper-slide">
                                        <div class="swiper-zoom-container">
                                            <img class="img-fluid" src="img/product/product-image5.jpg" />
                                        </div>
                                    </div>
                                   
                                </div>
                                <div class="swiper-button-next d-none d-lg-flex"></div>
                                <div class="swiper-button-prev d-none d-lg-flex"></div>
                                <div class="swiper-pagination d-none d-lg-block"></div>
                            </div>
                            <div thumbsSlider="" class="swiper product-gallery-thumb">
                                <div class="swiper-wrapper">
                                
                                   
                                   
                                   
                                    <div class="swiper-slide">
                                        <img class="img-fluid" src="img/product/product-image5.jpg" />
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 border-right-product">
                            <div class="summary-entry mt-lg-0 mt-4">
                                <div class="se-title">
                                    <h5>'.$title.'
                                    </h5>
                                    <h6 class="text-muted">'.$description.'
                                    </h6>
                                </div>
                                
                                  <div class="col-sm-6"><center><div id="replyResult"></div>
                     ';
					 $soalposit=1;
					 foreach($counttttt as $discountProp3)
					{
						
						$soal1=$discountProp3['soal'];
						$id=$discountProp3['id'];
						$javab1=$discountProp3['javab-1'];
						$vazn1=$discountProp3['vazn-1'];
						
						$javab2=$discountProp3['javab-2'];
						$vazn2=$discountProp3['vazn-2'];
						
						$javab3=$discountProp3['javab-3'];
						$vazn3=$discountProp3['vazn-3'];
						
						$javab4=$discountProp3['javab-4'];
						$vazn4=$discountProp3['vazn-4'];
						
						$javab5=$discountProp3['javab-5'];
						$vazn5=$discountProp3['vazn-5'];
						
						$javab6=$discountProp3['javab-6'];
						$vazn6=$discountProp3['vazn-6'];
						
						$javab7=$discountProp3['javab-7'];
						$vazn7=$discountProp3['vazn-7'];
						
						$javab8=$discountProp3['javab-8'];
						$vazn8=$discountProp3['vazn-8'];
						
						$javab9=$discountProp3['javab-9'];
						$vazn9=$discountProp3['vazn-9'];
						
						$javab10=$discountProp3['javab-10'];
						$vazn10=$discountProp3['vazn-10'];
					
					echo'
					 <div class="category-filter">
                                    <div class="category-filter-box">
                                        <div class="category-filter-box-title">
                                            <h4 class="fw-bold">
                                              '.$soal1.':
                                            </h4>
                                        </div>
                                        <div class="category-filter-box-desc">
                                            
                                                <div class="form-group form-check">
					
					';
					
					                    if(!$javab1==''){echo'<button name="basesoal1" id="basesoal1" value="'.$soalposit.'-'.$id.'-1-'.$javab1.'-'.$vazn1.'"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp(this)">'.$javab1.'</button>';}
										if(!$javab2==''){echo'<button name="basesoal2" id="basesoal2" value="'.$soalposit.'-'.$id.'-2-'.$javab2.'-'.$vazn2.'" type="button" class="btn btn-outline btn-rounded mb-5"  onclick="showStudentProp(this)">'.$javab2.'</button>';}
										if(!$javab3==''){echo'<button name="basesoal3" id="basesoal3" value="'.$soalposit.'-'.$id.'-3-'.$javab3.'-'.$vazn3.'" type="button" class="btn btn-outline btn-rounded mb-5"  onclick="showStudentProp(this)">'.$javab3.'</button>';}
										if(!$javab4==''){echo'<button name="basesoal4" id="basesoal4" value="'.$soalposit.'-'.$id.'-4-'.$javab4.'-'.$vazn4.'" type="button" class="btn btn-outline btn-rounded mb-5"  onclick="showStudentProp(this)">'.$javab4.'</button>';}
									    if(!$javab5==''){echo'<button name="basesoal5" id="basesoal5" value="'.$soalposit.'-'.$id.'-5-'.$javab5.'-'.$vazn5.'" type="button" class="btn btn-outline btn-rounded mb-5"  onclick="showStudentProp(this)">'.$javab5.'</button>';}
										if(!$javab6==''){echo'<button name="basesoal6" id="basesoal6" value="'.$soalposit.'-'.$id.'-6-'.$javab6.'-'.$vazn6.'" type="button" class="btn btn-outline btn-rounded mb-5"  onclick="showStudentProp(this)">'.$javab6.'</button>';}
										if(!$javab7==''){echo'<button name="basesoal7" id="basesoal7" value="'.$soalposit.'-'.$id.'-7-'.$javab7.'-'.$vazn7.'"  type="button" class="btn btn-outline btn-rounded mb-5"  onclick="showStudentProp(this)">'.$javab7.'</button>';}
										if(!$javab8==''){echo'<button name="basesoal8" id="basesoal8" value="'.$soalposit.'-'.$id.'-8-'.$javab8.'-'.$vazn8.'"  type="button" class="btn btn-outline btn-rounded mb-5"  onclick="showStudentProp(this)">'.$javab8.'</button>';}
										if(!$javab9==''){echo'<button name="basesoal9" id="basesoal9" value="'.$soalposit.'-'.$id.'-9-'.$javab9.'-'.$vazn9.'"  type="button" class="btn btn-outline btn-rounded mb-5"  onclick="showStudentProp(this)">'.$javab9.'</button>';}
										if(!$javab10==''){echo'<button name="basesoal10" id="basesoal10" value="'.$soalposit.'-'.$id.'-10-'.$javab10.'-'.$vazn10.'"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp(this)">'.$javab10.'</button>';}
					echo'
					
					
					 </div>
                       </div> </div>
                     </div> 
					';
					$soalposit++;}
					
					echo'
			                    
     
                                       

   
								
				            				

                            </div>
                            <div class="se-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                      
                                        <div class="se-desc">
										
                                        
                                          
											
											';
											
											
											foreach($discountList2 as $discountProp2)
					{
						
						$soal=$discountProp2['soal'];
						$id=$discountProp2['id'];
						
						$javab1=$discountProp2['javab-1'];
						$zvazn1=$discountProp2['vazn-1'];
						
						$javab2=$discountProp2['javab-2'];
						$zvazn2=$discountProp2['vazn-2'];
						
						$javab3=$discountProp2['javab-3'];
						$zvazn3=$discountProp2['vazn-3'];
						
						$javab4=$discountProp2['javab-4'];
						$zvazn4=$discountProp2['vazn-4'];
						
						$javab5=$discountProp2['javab-5'];
						$zvazn5=$discountProp2['vazn-5'];
						
						$javab6=$discountProp2['javab-6'];
						$zvazn6=$discountProp2['vazn-6'];
						
						$javab7=$discountProp2['javab-7'];
						$zvazn7=$discountProp2['vazn-7'];
						
						$javab8=$discountProp2['javab-8'];
						$zvazn8=$discountProp2['vazn-8'];
						
						$javab9=$discountProp2['javab-9'];
						$zvazn9=$discountProp2['vazn-9'];
						
						$javab10=$discountProp2['javab-10'];
						$zvazn10=$discountProp2['vazn-10'];
						$baser=$discountProp2['baser'];
					if($baser==1){$soalposit=$soalposit-1;} 
					
					else{
						
						
							echo'<center>
							
							
						

							
							
							 <div class="category-filter" name="wallet_type" id="wallet_type" style="visibility:hidden;>
                                    <div class="category-filter-box">
                                        <div class="category-filter-box-title">
                                            <h4 class="fw-bold">
                                              '.$soal.':
                                            </h4>
                                        </div>
                                        <div class="category-filter-box-desc">
                                            
                                                <div class="form-group form-check">
					
							 
						
                           
							
												';
												  if(!$javab1==''){echo'<button name="secentsoal" id="secentsoal" type="button"  value="'.$soalposit.'-'.$id.'-1-'.$javab1.'-'.$vazn1.'" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProppp(this)">'.$javab1.'</button>';}
												  if(!$javab2==''){echo'<button name="secentsoa2" id="secentsoa2" type="button"  value="'.$soalposit.'-'.$id.'-2-'.$javab2.'-'.$vazn2.'" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProppp(this)">'.$javab2.'</button>';}
												  if(!$javab3==''){echo'<button name="secentsoa3" id="secentsoa3" type="button"  value="'.$soalposit.'-'.$id.'-3-'.$javab3.'-'.$vazn3.'" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProppp(this)">'.$javab3.'</button>';}
											      if(!$javab4==''){echo'<button name="secentsoa4" id="secentsoa4" type="button"  value="'.$soalposit.'-'.$id.'-4-'.$javab4.'-'.$vazn4.'" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProppp(this)">'.$javab4.'</button>';}
												  if(!$javab5==''){echo'<button name="secentsoa5" id="secentsoa5" type="button"  value="'.$soalposit.'-'.$id.'-5-'.$javab5.'-'.$vazn5.'" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProppp(this)">'.$javab5.'</button>';}
												  if(!$javab6==''){echo'<button name="secentsoa6" id="secentsoa6" type="button"  value="'.$soalposit.'-'.$id.'-6-'.$javab6.'-'.$vazn6.'" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProppp(this)">'.$javab6.'</button>';}
												  if(!$javab7==''){echo'<button name="secentsoa7" id="secentsoa7" type="button"  value="'.$soalposit.'-'.$id.'-7-'.$javab7.'-'.$vazn7.'" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProppp(this)">'.$javab7.'</button>';}
												  if(!$javab8==''){echo'<button name="secentsoa8" id="secentsoa8" type="button"  value="'.$soalposit.'-'.$id.'-8-'.$javab8.'-'.$vazn8.'" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProppp(this)">'.$javab8.'</button>';}
												  if(!$javab9==''){echo'<button name="secentsoa9" id="secentsoa9" type="button"  value="'.$soalposit.'-'.$id.'-9-'.$javab9.'-'.$vazn9.'" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProppp(this)">'.$javab9.'</button>';}
												  if(!$javab10==''){echo'<button name="secentsoal0" id="secentsoal0" type="button" value="'.$soalposit.'-'.$id.'-10-'.$javab10.'-'.$vazn10.'" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProppp(this)">'.$javab10.'</button>';}
														  
							echo'
					
					
				
                      
                     </center>
					';


							
							 
							
							}
					$soalposit++;}
											
											
											
											
											echo'
											
									 </div> </div>
									
                                    <div class="col-lg-6 m-auto mt-lg-2 mt-3">
									
									
									
									
									
								
                                        <div class="se-cart shadow-sm">
                                            <div class="se-cart-detail">
                                              
                                                    
													';
													$tgyt=1;
											foreach($discountList77 as $discountProp5)
											{
												
												
													echo'
													  <span class="scd-item text-muted">
												<i class="bi bi-tag"></i>
                                                 '.$discountProp5['soal'].' :
                                                 <span name="test'.$tgyt.'" id="test'.$tgyt.'"></span>
                                                </span>
												
                                           
												';
												$tgyt++;
												}
												echo'
												
												 <span class="scd-item text-muted">
												<i class="bi bi-tag"></i>
                                                 نوع:
                                                 <span name="test10" id="test10"></span>
                                                </span>
												
												
                                            	<div name="test5" id="test5" style="visibility:hidden;>
								<h4 class="fw-bold">
                                              
                                            </h4>
							دو رو فوری<button name="دو رو فوری" id="twowayfori" type="button"  value="ttt" class="btn btn-outline btn-rounded mb-5" onclick="Myfinalss(this)">0</button>
									دو رو غیر فوری<button name="دو رو غیر فوری" id="twowayno" type="button"  value="ttt" class="btn btn-outline btn-rounded mb-5" onclick="Myfinalss(this)">0</button>
									<br>
									یک رو فوری<button name="یک رو فوری" id="yelwayfori" type="button"  value="ttt" class="btn btn-outline btn-rounded mb-5" onclick="Myfinalss(this)">0</button>
									 یک رو غیر فوری<button name="یک رو غیر فوری" id="yekwayno" type="button"  value="ttt" class="btn btn-outline btn-rounded mb-5" onclick="Myfinalss(this)">0</button>

									
									</div>
                                              
                                            </div>
                                            <div class="se-cart-price">
                                                
                                                <span id="finalproce" class="se-cart-price-new">0</span>  تومان
                                            </div>
                                            <div class="se-cart-price">
                                               
                                            </div>
                                            <div class="se-cart-color">
                                                <div class="color-box">
                                                   
												   
												   
                                                  <input type="hidden" name="productid" id="productid" class="form-control" value="'.$_GET['id'].'">
												   <input type="hidden" name="tavlkkf" id="tavlkkf" class="form-control" value="">
                                                   
                                                   
                                                    
                                                </div>
                                            </div>
                                         
                                            <div class="se-cart-form">
                                               
                                                    <div class="row align-items-center">
                                                        <div class="col-sm-6">
                                                            <div class="cart-counter">
                                                                <input type="text" name="count" id="count" class="counter" value="1" onchange="myFunction(this)">
                                                                    
                                                            </div>
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
                                       معرفی پاکت
                                    </p>
                                    <!-- متن بیشتر -->
                                    <div class="read-more-target">
                                       معرفی پاکت ۲
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
                        <a href="category.html" class="fromCenter border-animate">مشاهده همه</a>
                    </div>
                </div>
                <div class="swiper product-box-two-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="product-box-item">
                                <div class="product-box-item-img">
                                    <a href="">
                                        <img src="img/product/wach2.jpg" alt="" class="img-fluid one-image">
                                        <img src="img/product/wach3.jpg" alt="" class="img-fluid two-image">
                                    </a>
                                    
                                </div>
                                <a href="product.html">
                                    <div class="product-box-item-desc">
                                        <div class="product-box-item-title">
                                            <h6>
                                                تست
                                            </h6>
                                        </div>
                                        <div class="product-box-price default">
                                            <span class="new-price">590,000 تومان</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
						
						
                       <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="product-box-item">
                                <div class="product-box-item-img">
                                    <a href="">
                                        <img src="img/product/wach2.jpg" alt="" class="img-fluid one-image">
                                        <img src="img/product/wach3.jpg" alt="" class="img-fluid two-image">
                                    </a>
                                    
                                </div>
                                <a href="product.html">
                                    <div class="product-box-item-desc">
                                        <div class="product-box-item-title">
                                            <h6>
                                                تست
                                            </h6>
                                        </div>
                                        <div class="product-box-price default">
                                            <span class="new-price">590,000 تومان</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div> </div>
						
						<div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="product-box-item">
                                <div class="product-box-item-img">
                                    <a href="">
                                        <img src="img/product/wach2.jpg" alt="" class="img-fluid one-image">
                                        <img src="img/product/wach3.jpg" alt="" class="img-fluid two-image">
                                    </a>
                                    
                                </div>
                                <a href="product.html">
                                    <div class="product-box-item-desc">
                                        <div class="product-box-item-title">
                                            <h6>
                                                تست
                                            </h6>
                                        </div>
                                        <div class="product-box-price default">
                                            <span class="new-price">590,000 تومان</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div></div>
                        
                     
                     
                     
                        <div class="swiper-slide">
                            <div class="product-box-item see-more-item">
                                <div class="see-all">
                                    <a href="category.html">
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