<?php
include('main.php');
include('header.php');
$fee = new ManageFees();


echo'

    <div class="content">
        <!-- start bradcrumb -->
        <div class="category-bread">
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
                                        <span>دسته بندی محصولات '.$nametype.'</span>
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end bradcrumb -->

   
							
				<div class="main-category">
        <div class="container-fluid">
            <div class="row justify-content-center">
			
			
			
			 <div class="col-lg-2 col-sm-4 col-6 mb-3">
                    <a href="category?type=1">
                        <div class="cart-small">
                           
                            <div class="cart-small-desc ms-lg-3 text-center">
                                <h6>افست</h6>
                                <p class="text-muted d-none d-lg-block">1173 محصول</p>
                            </div>
                        </div>
                    </a>
                </div>
			
				 <div class="col-lg-2 col-sm-4 col-6 mb-3">
                    <a href="category?type=2">
                        <div class="cart-small">
                           
                            <div class="cart-small-desc ms-lg-3 text-center">
                                <h6>دیجیتال</h6>
                                <p class="text-muted d-none d-lg-block">1173 محصول</p>
                            </div>
                        </div>
                    </a>
                </div>
			
			
			
			</div>
			</div>
			</div>



    <div class="modal fade login-modal" id="loginModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="modal-title">
                        <div class="d-flex">
                            <i class="bi bi-person me-1"></i>
                            <h6 class="text-center">فرم ورود کاربران</h6>
                        </div>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="item">
                        <form action="">
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-person"></i></span>
                                    <input type="text" class="form-control" placeholder="نام کاربری">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-key"></i></span>
                                    <input type="password" placeholder="رمز عبور" class="form-control">
                                </div>
                            </div>
                            <div class="form-check form-check-box">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    مرا فراموش نکن
                                </label>
                            </div>
                            <div class="d-flex justify-content-center align-items-center">
                                <button type="submit" class="btn-login me-2 waves-effect waves-light"><i
                                        class="bi bi-person"></i> ورود به
                                    سایت</button>
                                <a class="btn-login forget waves-effect waves-light" href="forget.html"><i
                                        class="bi bi-person"></i>
                                    فراموشی رمز عبور
                                </a>
                            </div>

                        </form>
                        <div class="register-box">
                            <div class="dash-border">
                                <span>یا</span>
                            </div>
                            <div class="register-link">
                                <a href="register.html" class="btn btn-outline-secondary waves-effect waves-light">ثبت نام <i
                                        class="bi bi-person-plus ms-1"></i></a>
                            </div>
                        </div>
                        <div class="social">
                            <a href="" class="bi bi-google"></a>
                            <a href="" class="bi bi-facebook"></a>
                            <a href="" class="bi bi-github"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end login modal -->




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