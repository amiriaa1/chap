<?php
include_once('main.php');


if ($isLogedIn==1){}
else{
    header("Location: login");
    echo'hiiiii';
    exit;
}

include_once('header.php');

$student = new ManageStudents();
$fee = new ManageFees();



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
                                            <li class="nav-item  active">
                                                <a href="profile" class="nav-link text-muted">
                                                    <i class="bi bi-house"></i>
                                                    <span>ناحیه کاربری</span>
                                                </a>
                                            </li>
                                           
                                            <li class="nav-item">
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
                                                <div class="ui-box-item-title">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <h4 class="fw-bold">
                                                            اطلاعات شخصی
                                                        </h4>
                                                        <button data-bs-toggle="modal" data-bs-target="#editUser"
                                                            class="btn-main btn-main-primary waves-effect waves-light" href="">ویرایش <i
                                                                class="bi bi-pencil-fill"></i></button>
                                                    </div>
                                                </div>
                                                <div class="ui-box-item-desc p-0">
                                                    <table class="table main-table shadow-none main-table-2">
                                                        <tr>
                                                            <td colspan="2">
                                                                <h6 class="text-muted">نام و نام خانوادگی</h6>
                                                                <p class="fw-bold mt-2">'.$ufaname.'</p>
                                                            </td>
                                                            <td colspan="2">
                                                                <h6 class="text-muted">شماره تلفن</h6>
                                                                <p class="fw-bold mt-2">'.$uusername.'</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="2">
                                                                <h6>پست الکترونیک</h6>
                                                                <p class="fw-bold mt-2">'.$uemail.'</p>
                                                            </td>
                                                         
                                                        
                                                    </table>
													<br>
													
													
													
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
        <!-- end dashboard -->
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
