<?php
include('main.php');
include('header.php');
$student = new ManageStudents();
$fee = new ManageFees();
unset($_SESSION['product']);
unset($_SESSION['product2']);	
if(isset($_GET['unid']))
{
	$unid=$_GET['unid'];

	$fetfet=$fee->Getshoplist1($uusername,$unid);
}
else{
	
	exit;
}


echo'


<script type="text/javascript">

function Myfactor()
							{
                     var getway = document.getElementById("getway").value;
                     var price2 = document.getElementById("price2").value;
                               
                     
                     $.ajax({
							
								    url: "vendorjr.php",
								    type: "POST",
								    data: {op:"maliat",price2:price2,getway:getway},
									dataType: "json",
								    success: function(data){
										
										
								 $("#show_maliat").html(data.html1);
                                  $("#show_maliat1").html(data.html2);
								
										
										
										
									}
							      });
							
                                
							}
</script>


<script type="text/javascript">
							function Mygetway()
							{

var addr = document.getElementById("addr").value;
var unid = document.getElementById("unid").value;
var getway = document.getElementById("getway").value;

							
							$.ajax({
							
								    url: "aj.php",
								    type: "POST",
								    data: {op:"send_getway",addr:addr,unid:unid,getway:getway},
									dataType: "json",
								    success: function(data){
										
										
								window.location.href = data.url;
								
										
										
										
									}
							      });
							
							
							
								
							
							
							
							
							}
						</script>




    <style>
        .line-step-box.complete:nth-child(1):before {
            width: 100%;
        }
    </style>

    <div class="content">
        <div class="line-steps">
            <div class="container-fluid">
                <div class="line-step-container">
                    <div class="line-step">
                        <div class="line-step-boxs">
                            <div class="line-step-box complete">
                                
                                    <div class="icon">
                                        <i class="bi bi-bag"></i>
                                    </div>
                                    <p>سبد خرید</p>
                                
                            </div>
                            <div class="line-step-box complete">
                               
                                    <div class="icon">
                                        <i class="bi bi-file-earmark-text"></i>
                                    </div>
                                    <p>جزییات پرداخت</p>
                               
                            </div>
                            <div class="line-step-box">
                                
                                    <div class="icon">
                                        <i class="bi bi-file-earmark-break"></i>
                                    </div>
                                    <p>تکمیل سفارش</p>
                             
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cart">
            <div class="container-fluid">
                <div class="cart-content shadow-box">
                    
                  
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="checkout-forms">
                                <div class="checkout-form-title">
                                    <h5> جزییات آدرس</h5>
                                </div>
                                <div class="checkout-form">
                                   
                                        
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="addr" class="form-label">آدرس ها <span
                                                            class="text-danger ms-1">*</span></label>
                                                            
                                                    <select id="addr" class="form-select rounded-pill">
													
													';
													
												
												
$discountList = $student->Getusersaddr($uusername);
foreach($discountList as $discountProp)
					{
						
													echo'

                                                        <option>'.$discountProp['addr'].'-----'.$discountProp['name'].'</option>
                                                 ';
					}
												 echo'
                                                    </select>
                                                    
                                                    </div>
                                                    <a href="address?add" referrerpolicy="origin" target="_blank">
                                                    <button name="add" id="add" value="add" type="button" class="btn btn-outline btn-rounded mb-5">افزودن آدرس</button></a>
                                                </div>
                                             
												
												
                                            </div>
                                        </div>
                                     
                                      
                                     
                                     
                                      
                                        <div class="form-group">
                                            <label for="descOrder" class="form-label">یادداشت های سفارش اختیاری<span
                                                    class="text-danger ms-1">*</span></label>
                                            <textarea id="descOrder" rows="5" class="form-control rounded-3"
                                                placeholder="نکاتی در مورد سفارش به عنوان مثال نکاتی برای تحویل"></textarea>
												
												
                                        </div>
                                   
                                </div>
                            </div>
                        </div>
						
						
                        <div class="col-lg-5">
                            <div class="cart-payment">
                                <div class="title text-center">
                                    <h4 class="fw-bold">مجموع کل سبد خرید</h4>
                                </div>
                                <table class="table main-table">
                                    <tr>
                                        <th class="pb-3">نوع</th>
                                        <th class="pb-3">مبلغ</th>
                                         <th class="pb-3">نوع فاکتور</th>
                                        
                                        
                                        
                                        
                                        
                                        
                                    </tr>
                                    <tr>
                                       
                                      
                                    </tr>
                                 
                                    <tr>
                                       
                                      
                                    </tr>
									';
									$ftr=$fetfet["0"]["amount"];
$percentage=9;
$totalWidth=$ftr;
$amountp9 = ($percentage / 100) * $totalWidth;

$amount=$amountp9+$ftr;
									echo'
                                    <tr>
                                        <td class="fw-bold">مجموع</td>
                                        <td class="txt"><span class="fw-bold">'.$ftr.'</span> <span
                                                class="text-muted">تومان</span></td>
                                                 <td class="fw-bold">
                                                 
                                                
                                       <select onchange="Myfactor()" id="getway" class="form-select rounded-pill">
                                                        <option value="sadad">فاکتور رسمی + ۹ ٪ مالیات </option>
                                                        <option selected="selected" value="paypack">عادی</option>
                                  
                                                 </select>
                                                 
                                                 
</td>
                                    </tr>
                                   <td>
           
                                 <div name="show_maliat" id="show_maliat"></div>
                                </td>
                                 <td class="txt">
                                   <div name="show_maliat1" id="show_maliat1"></div>
</td>
                                   
                                </table>
								<input type="hidden" id="unid" value="'.$unid.'">
								<input type="hidden" id="price" value="'.$ftr.'">
								<input type="hidden" id="price2" value="'.$amount.'">
<button  class="shadow-sm fw-bold btn-add-to-cart mt-sm-0 mt-2 waves-effect waves-light" onclick="Mygetway()">پرداخت</button>

                               
                            </div>
							
							
							
							
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



';












?>







   
