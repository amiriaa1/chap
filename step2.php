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
	$discountList2 = $fee->Getshoplist1($uusername,$unid);
	foreach($discountList2 as $discountProp)
					{
						
							$amount=$discountProp['amount'];
							$data1=$discountProp['data1'];
							$data2=$discountProp['data2'];
							$productid=$discountProp['productid'];
							$fgt1 = json_decode($data1,true);
							$fgt2 = json_decode($data2,true);
							$farijavab1= $fgt1['fgt']['0']['farijavab'];
							$farijavab2= $fgt1['fgt']['1']['farijavab'];
							$farijavab3= $fgt1['fgt']['2']['farijavab'];
							
							
							$finalprice= $fgt2['finalprice'];
							$btn3farsi= $fgt2['btn3farsi'];
						
									
					}
					
$query = "WHERE aid=$productid  ORDER BY `nim_product`.`aid` ASC";		
$productgeter = $fee->Getproductlist($query);
foreach($productgeter as $discountProp2)
					{
						
							$title=$discountProp2['title'];
							$description=$discountProp2['description'];
							$pic=$discountProp2['pic'];
						
									
					}
					
}
else{
	
	exit;
}


echo'



<script type="text/javascript">
							function Mygetway()
							{
var name = document.getElementById("name").value;
var lname = document.getElementById("lname").value;
var ostan = document.getElementById("ostan").value;
var city = document.getElementById("city").value;
var street = document.getElementById("street").value;
var street1 = document.getElementById("street1").value;
var tel = document.getElementById("tel").value;
var postal = document.getElementById("postal").value
var descOrder = document.getElementById("descOrder").value;
var unid = document.getElementById("unid").value;
var price = document.getElementById("price").value;

							
							$.ajax({
							
								    url: "aj.php",
								    type: "POST",
								    data: {op:"send_getway",name:name,lname:lname,ostan:ostan,city:city,street:street,street1:street1,tel:tel,postal:postal,descOrder:descOrder,unid:unid,price:price},
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
                                <a href="cart.html">
                                    <div class="icon">
                                        <i class="bi bi-bag"></i>
                                    </div>
                                    <p>سبد خرید</p>
                                </a>
                            </div>
                            <div class="line-step-box complete">
                                <a href="cart.html">
                                    <div class="icon">
                                        <i class="bi bi-file-earmark-text"></i>
                                    </div>
                                    <p>جزییات پرداخت</p>
                                </a>
                            </div>
                            <div class="line-step-box">
                                <a href="cart.html">
                                    <div class="icon">
                                        <i class="bi bi-file-earmark-break"></i>
                                    </div>
                                    <p>تکمیل سفارش</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cart">
            <div class="container-fluid">
                <div class="cart-content shadow-box">
                    <div class="alert alert-warning" role="alert">
                        کوپن تخفیف دارید <span class="alert-link pointer" id="showFormDiscount">برای نوشتن کد اینجا کلیک
                            کنید</span>
                    </div>
                    <div class="category-filter" id="discountForm" style="display:none;">
                        <div class="category-filter-box">
                            <div class="category-filter-box-title">
                                <h4 class="fw-bold">
                                    اگر شما کد تخفیف دارید ، برای ثبت آن از طریق زیر اقدام کنید.
                                </h4>
                            </div>
                            <div class="category-filter-box-desc">
                                <form action="">
                                    <div class="row align-items-center">
                                        <div class="col-sm-8">
                                            <div class="form-group">
                                                <label for="discount" class="form-label">کد تخفیف:</label>
                                                <input type="text" class="form-control rounded-pill" id="discount">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <button class="btn btn-primary btn-sm rounded-pill mt-sm-3 mt-0">ثبت کد
                                                تخفیف</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="checkout-forms">
                                <div class="checkout-form-title">
                                    <h5>جزییات پرداخت</h5>
                                </div>
                                <div class="checkout-form">
                                   
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="name" class="form-label">نام <span
                                                            class="text-danger ms-1">*</span></label>
                                                        <input type="text" id="name" class="form-control rounded-pill">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="lname" class="form-label">نام خانوادگی <span
                                                            class="text-danger ms-1">*</span></label>
                                                        <input type="text" id="lname" class="form-control rounded-pill">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="ostan" class="form-label">استان <span
                                                            class="text-danger ms-1">*</span></label>
                                                    <select id="ostan" class="form-select rounded-pill">
                                                        <option>تهران</option>
                                                        <option>یزد</option>
                                                        <option>اصفهان</option>
                                                        <option>لرستان</option>
                                                        <option>کردستان</option>
                                                    </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="city" class="form-label">شهر <span
                                                            class="text-danger ms-1">*</span></label>
                                                    <select id="city" class="form-select rounded-pill">
                                                        <option>کرج</option>
                                                        <option>خرم آباد</option>
                                                        <option>کرمانشاه</option>
                                                        <option>مهاباد</option>
                                                        <option>بروجرد</option>
                                                    </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="street" class="form-label">خیابان<span
                                                    class="text-danger ms-1">*</span></label>
                                            <input type="text"  placeholder="پلاک خانه و نام خیابان" id="street"
                                                class="form-control rounded-pill">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" placeholder="شماره واحد ، بلوک ، پلاک (دلخواه)"
                                                id="street1" class="form-control rounded-pill">
                                        </div>
                                        <div class="form-group">
                                            <label for="tel" class="form-label">تلفن<span
                                                    class="text-danger ms-1">*</span></label>
                                            <input type="text" id="tel" class="form-control rounded-pill">
                                        </div>
                                        <div class="form-group">
                                            <label for="email" class="form-label">آدرس ایمیل<span
                                                    class="text-danger ms-1">*</span></label>
                                            <input type="text" id="email" class="form-control rounded-pill">
                                        </div>
                                        <div class="form-group">
                                            <label for="postal-code" class="form-label">کد پستی<span
                                                    class="text-danger ms-1">*</span></label>
                                            <input type="text" id="postal" class="form-control rounded-pill">
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
                                        <th class="pb-3">محصول</th>
                                        <th class="pb-3">قیمت کل</th>
                                    </tr>
                                    <tr>
                                        <td class="fw-bold">
                                            <img src="img/product/'.$pic.'" class="img-fluid align-middle"
                                                alt="" width="80"><br>'.$title.'<br>'.$farijavab1.'<br>'.$farijavab2.'<br>'.$farijavab3.'<br>'.$btn3farsi.'
                                        </td>
                                        <td class="txt"><span class="fw-bold">'.$finalprice.'</span> <span
                                                class="text-muted">تومان</span></td>
                                    </tr>
                                 
                                    <tr>
                                        <td class="fw-bold">حمل و نقل</td>
                                        <td class="txt"><span class="fw-bold">5,000</span> <span
                                                class="text-muted">تومان</span></td>
                                    </tr>
									';
									$ftr=$finalprice+5000;
									echo'
                                    <tr>
                                        <td class="fw-bold">مجموع</td>
                                        <td class="txt"><span class="fw-bold">'.$ftr.'</span> <span
                                                class="text-muted">تومان</span></td>
                                    </tr>
                                </table>
								<input type="hidden" id="unid" value="'.$unid.'">
								<input type="hidden" id="price" value="'.$ftr.'">
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







   
