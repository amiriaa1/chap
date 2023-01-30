<?php
include_once('main.php');
include_once('header.php');
include_once('css/icons/themify-icons');
$student = new ManageStudents();
$fee = new ManageFees();	



$discountList = $fee->Getshopusers($uusername);	





echo'



    <div class="content">
        <div class="dashboard">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="ui-boxs">
                            <div class="ui-box">
                                <div class="ui-box-item">
                                    <div class="ui-box-item-desc" style="border-radius: 10px;background-color: #fff;">
                                        <div class="dashboard-user-img-profile">
                                            <img src="img/default-icon/user-profile.png" width="80" height="80"
                                                class="img-fluid rounded-circle" alt="">
                                        </div>
                                        <div class="dashboard-user-info">
                                            <h6 class="user-name">'.$ufaname.'</h6>
                                            <h6 class="text-muted user-number">'.$uusername.'</h6>
                                        </div>
                                        <div class="dashboard-user-btn">
                                           
                                            <div>
                                                <i class="bi bi-arrow-left-circle"></i>
												
                                                <a href="logout" class="text-muted">خروج از حساب</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
							
                           
                   
					
						<div class="ui-box">
                                <div class="ui-box-item">
                                    <div class="ui-box-item-title" style="padding: 15px;">
                                        <h4 class="fw-bold">
                                            حساب کاربری شما
                                        </h4>
                                    </div>
                                    <div class="ui-box-item-desc p-0">
                                        <ul class="nav flex-column sidebar-menu">
                                            <li class="nav-item">
                                                <a href="profile" class="nav-link text-muted">
                                                    <i class="bi bi-house"></i>
                                                    <span>ناحیه کاربری</span>
                                                </a>
                                            </li>
                                           
                                            <li class="nav-item  active">
                                                <a href="order" class="nav-link text-muted">
                                                    <i class="bi bi-basket-fill"></i>
                                                    <span>سفارش ها</span>
                                                </a>
                                            </li>
                                           
                                           
                                            
                                            <li class="nav-item">
                                                <a href="address" class="nav-link text-muted">
                                                    <i class="bi bi-pin-map"></i>
                                                    <span>آدرس ها</span>
                                                </a>
                                            </li>
                                          
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
					
					
			 <div class="col-lg-9">
					
                        <div class="content-box" style="padding:40px 20px;">

                            <div class="row">

                                <div class="col-12">
                                    <div class="ui-boxs">
                                        <div class="ui-box">
                                            <div class="ui-box-item ui-box-white">
                                                <div class="ui-box-item-title" style="padding: 15px;">
                                                    <h4 class="fw-bold">
                                                        آخرین سفارش ها
                                                    </h4>
                                                </div>
                                                <div class="ui-box-item-desc p-0">
                                                    <div class="orders">
                                                     
';



					foreach($discountList as $discountProp)
					{
						
							$amount=$discountProp['amount'];
							$data1=$discountProp['data1'];
							$data2=$discountProp['data2'];
						$state=$discountProp['state'];
						$atimestamp=$discountProp['atimestamp'];	
						$unid=$discountProp['unid'];
						date_default_timezone_set('Asia/Tehran');
						list($gy, $gm, $gd) = explode('-', $atimestamp);
						$j_date_array = gregorian_to_jalali($gy, $gm, $gd);
						$today_date=implode("/", $j_date_array);


echo'
  <div class="order-item">
                                                            <a href="order-detail?unid='.$unid.'">
                                                                <div class="order-item-status">
                                                                    <div class="order-item-status-item">
                                                                        
																		';
																		if($state==1){
																			
																			echo'<p><i class="bi bi-bag-check-fill"></i><span>اطلاعات وارد شده</span>';
																		}
																		if($state==2){
																			
																			echo'<p><i class="bi bi-bag-check-fill"></i><span>در حال پرداخت</span>';
																		}
																		if($state==3){
																			
																			echo'<p><i class="bi bi-bag-check-fill"></i><span>پرداخت موفق</span>';
																		}
																		if($state==4){
																			
																			echo'<p><i class="bi bi-bag-check-fill"></i><span>پرداخت انجام نشد</span>';
																		}
																		if($state==5){
																			
																			echo'<p><i class="ti-user"></i><span>سفارش در حال انجام است</span>';
																		}
																		if($state==6){
																			
																			echo'<p><i class="bi bi-bag-check-fill"></i><span>سفارش اماده ارسال است</span>';
																		}
																		if($state==7){
																			
																			echo'<p><i class="bi bi-bag-check-fill"></i><span>سفارش ارسال شده</span>';
																		}
																		if($state==8){
																			
																			echo'<p><i class="bi bi-bag-check-fill"></i><span>برگشت از فروش</span>';
																		}
																		echo'
                                                                           
																			</p>
                                                                    </div>
                                                                    <div class="order-item-status-item">
                                                                        <p><i
                                                                                class="bi bi-arrow-left pointer text-dark"></i>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="order-item-detail">
                                                                    <ul class="nav">
                                                                        <li class="nav-item text-muted">'.$today_date.'
                                                                        </li>
                                                                        <li class="nav-item">
                                                                            <span class="text-mute">کد سفارش</span>
                                                                            <strong>'.$unid.'</strong>
                                                                        </li>
                                                                        <li class="nav-item">
                                                                            <span class="text-mute">مبلغ</span>
                                                                            <strong>'.$amount.' تومان</strong>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            
                                                                <div class="order-item-show">
                                                                    <p><i class="bi bi-card-list"></i> مشاهده فاکتور</p>
                                                                </div>
                                                            </a>
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
                            </div>
                        </div>
                    </div>
               



			
			

';
include_once('footer.php');
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
