<?php
include_once('main.php');
include_once('header.php');
include_once('css/icons/themify-icons');
$student = new ManageStudents();
$fee = new ManageFees();

$unid=$_GET['unid'];

$discountList = $fee->Getshopusers2($uusername,$unid);


date_default_timezone_set('Asia/Tehran');
list($gy, $gm, $gd) = explode('-', $discountList["0"]["atimestamp"]);
$j_date_array = gregorian_to_jalali($gy, $gm, $gd);
$orderpersiandate=implode("/", $j_date_array);
if ($discountList["0"]["data3"]==""){}else{
    $fgt2 = json_decode($discountList["0"]["data3"],true);
    $data1 = json_decode($discountList["0"]["data1"],true);

    $data3y=explode('-----', $fgt2["addr"]);

}


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
                                                        جزییات سفارش
                                                    </h4>
                                                </div>
                                                <div class="ui-box-item-desc p-0">
                                                    <div class="orders">
                                                        <div class="order-item">
                                                            <div class="order-item-detail">
                                                                <ul class="nav">
                                                                    <li class="nav-item">
                                                                        <span class="text-mute">کد پیگیری سفارش</span>
                                                                        <strong>'.$discountList["0"]["unid"].'</strong>
                                                                    </li>
                                                                    <li class="nav-item">
                                                                        <span class="text-mute">تاریخ ثبت سفارش</span>
                                                                        <strong>'.$orderpersiandate.'</strong>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="order-item-detail" style="padding-top: 20px;">
                                                                <ul class="nav">
                                                                    <li class="nav-item">
                                                                        <span class="text-mute">تحویل گیرنده</span>
                                                                        <strong>'.$data3y["1"].'</strong>
                                                                    </li>
                                                                    <li class="nav-item">
                                                                        <span class="text-mute">آدرس</span>
                                                                        <strong>'.$data3y["0"].'</strong>
                                                                    </li>
                                                                    <li class="nav-item w-100">
                                                                    </li>
                                                                    
                                                                </ul>
                                                            </div>
                                                            <div class="order-item-detail" style="padding-top: 20px;">
                                                                <ul class="nav">
                                                                    <li class="nav-item">
                                                                        <span class="text-mute">مبلغ</span>
                                                                        <strong>'.$discountList["0"]["amount"].' تومان</strong>
                                                                    </li>
                                                                    <li class="nav-item">
                                                                        <strong>پرداخت اینترنتی</strong>
                                                                    </li>
                                                                    <li class="nav-item w-100">
                                                                    </li>
                                                                    
                                                                    <li class="nav-item">
                                                                        <span class="text-mute">هزینه ارسال 
                                                                           
                                                                        </span>
                                                                        <strong>رایگان</strong>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="order-item-detail" style="padding-top: 20px;">
                                                               
                                                                <div class="order-progress py-3">
                                                                ';
if($discountList["0"]["state"]==1){

    echo'

 <h6 class="fw-bold mb-2">
                                                                    اطلاعات وارد شده
                                                                           <i class="bi bi-check"></i></h6>
                                                                    <div class="progress">
                                                                        <div class="progress-bar" role="progressbar"
                                                                            aria-valuenow="10" aria-valuemin="0"
                                                                            aria-valuemax="10" style="width: 10%">
                                                                        </div>
                                                                    </div>

';
}
if($discountList["0"]["state"]==2){

    echo'

 <h6 class="fw-bold mb-2">
                                                                    در حال پرداخت
                                                                           <i class="bi bi-check"></i></h6>
                                                                    <div class="progress">
                                                                        <div class="progress-bar" role="progressbar"
                                                                            aria-valuenow="20" aria-valuemin="0"
                                                                            aria-valuemax="20" style="width: 20%">
                                                                        </div>
                                                                    </div>

';
}
if($discountList["0"]["state"]==3){

    echo'

 <h6 class="fw-bold mb-2">
                                                                    پرداخت موفق
                                                                           <i class="bi bi-check"></i></h6>
                                                                    <div class="progress">
                                                                        <div class="progress-bar" role="progressbar"
                                                                            aria-valuenow="50" aria-valuemin="0"
                                                                            aria-valuemax="50" style="width: 50%">
                                                                        </div>
                                                                    </div>

';
}
if($discountList["0"]["state"]==4){

    echo'

 <h6 class="fw-bold mb-2">
                                                                    پرداخت انجام نشد
                                                                           <i class="bi bi-check"></i></h6>
                                                                    <div class="progress">
                                                                        <div class="progress-bar" role="progressbar"
                                                                            aria-valuenow="1" aria-valuemin="0"
                                                                            aria-valuemax="1" style="width: 1%">
                                                                        </div>
                                                                    </div>

';
}
if($discountList["0"]["state"]==5){

    echo'

 <h6 class="fw-bold mb-2">
                                                                    سفارش در حال انجام است
                                                                           <i class="bi bi-check"></i></h6>
                                                                    <div class="progress">
                                                                        <div class="progress-bar" role="progressbar"
                                                                            aria-valuenow="70" aria-valuemin="0"
                                                                            aria-valuemax="70" style="width: 70%">
                                                                        </div>
                                                                    </div>

';
}
if($discountList["0"]["state"]==6){

    echo'

 <h6 class="fw-bold mb-2">
                                                                    سفارش اماده ارسال است
                                                                           <i class="bi bi-check"></i></h6>
                                                                    <div class="progress">
                                                                        <div class="progress-bar" role="progressbar"
                                                                            aria-valuenow="90" aria-valuemin="0"
                                                                            aria-valuemax="90" style="width: 90%">
                                                                        </div>
                                                                    </div>

';
}
if($discountList["0"]["state"]==7){

    echo'

 <h6 class="fw-bold mb-2">
                                                                    سفارش ارسال شده
                                                                           <i class="bi bi-check"></i></h6>
                                                                    <div class="progress">
                                                                        <div class="progress-bar" role="progressbar"
                                                                            aria-valuenow="100" aria-valuemin="0"
                                                                            aria-valuemax="100" style="width: 100%">
                                                                        </div>
                                                                    </div>

';
}
if($discountList["0"]["state"]==8){

    echo'

 <h6 class="fw-bold mb-2">
                                                                    برگشت از فروش
                                                                           <i class="bi bi-check"></i></h6>
                                                                    <div class="progress">
                                                                        <div class="progress-bar" role="progressbar"
                                                                            aria-valuenow="0" aria-valuemin="0"
                                                                            aria-valuemax="0" style="width: 0%">
                                                                        </div>
                                                                    </div>

';
}


                                                                 echo'
                                                                   
                                                                </div>
                                                            </div>
                                                            <div class="product-list-row product-list-row-lg">
                                                            
                                                                <div class="product-row">
                                                                    
                                                                        <div class="product-row-desc">
                                                                            <div class="product-row-desc-item">
                                                                                <div class="product-row-img">
                                                                                    
                                                                                </div>
                                                                                <div class="product-row-title">
                                                                                    <h6>
                                                                                    '.$data1["javab1"].'
                                                                                    <br><br>
                                                                                    '.$data1["noet1"].'
                                                                                        </h6>
                                                                                    
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
