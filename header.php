<?php
include('main.php');


if($uactive!=='1' && $isLogedIn){
	
	header("Location: verification");
}



echo' 


<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
     <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>' . $system_title . '</title>
    <link rel="shortcut icon" href="img/default-icon/favicon.ico" type="image/x-icon">
    <link rel="icon" href="img/default-icon/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/bootstrap.rtl.min.css">
    <link rel="stylesheet" href="css/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <link rel="stylesheet" href="js/plugin/countdown/countdown.css">
    <link rel="stylesheet" href="js/plugin/back-to-top/jquery-backToTop.min.css">
    <link rel="stylesheet" href="js/plugin/hint-css/hint-css.css">
 
	<link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="css/responsive.css">
    <meta name="description" content="'.$system_title.'">
';
		if(!isset($responsive) || $responsive==1)
			
	
if($system_settings["maintenance"]==1)
{
 header("Location: ma");
}
			echo '
    
    

	<header>
        <div class="container-fluid">
            <div class="row">
                <div class="header-contact d-lg-block d-none col-12">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-6">
                            <ul class="nav header-contact-right">
                                <li class="nav-item"><a href="" class="nav-link font-14">راهنمای خرید</a></li>
                                <li class="nav-item"><a href="" class="nav-link font-14">ارتباط با ما</a></li>
                                <li class="nav-item"><a href="" class="nav-link font-14">سوالات متداول</a></li>
                                <li class="nav-item"><a href="" class="nav-link font-14">درباره ما</a></li>
                            </ul>
                        </div>
                        <div class="col-6">
                            <ul class="nav header-contact-left">
                                <li class="nav-item"><a href="" class="nav-link font-14">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                                            <path
                                                d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                                        </svg>
                                        021-91004545
                                    </a></li>
                                <li class="nav-item"><a href="" class="nav-link font-14">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                                            <path
                                                d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                                        </svg>
                                        info@site.com
                                    </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row top-menu justify-content-center align-items-center">
                <div class="col-lg-2 col-4 order-lg-1 order-2">
                    <div class="top-menu-logo">
                        <a href="index"><img src="img/default-icon/logo.svg" alt="" class="img-fluid"></a>
                    </div>
                </div>
                <div class="col-lg-6 text-center d-none d-lg-block order-lg-2 order-3">
                    <div class="top-menu-search ">
                        <form action="" method="get">
                            <div class="input-group">
                                <input name="txt" type="text" class="search-txt rounded-pill"
                                    placeholder="نام محصول مورد نظر خود را وارد کنید">
                                <button type="submit" class="search-btn input-group-text rounded-pill">
                                    <i class="bi bi-search"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4 col-4 order-lg-3 order-3">
                    <div class="top-menu-btn">
                        <ul class="nav">
                            <li class="nav-item d-xl-block d-none">
							
								';
								if($isLogedIn){
									
									echo'
									<a href="profile" class="text-muted">
									<button class="auth-btn-index-two pointer">
                                     
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-person" viewBox="0 0 16 16">
                                        <path
                                            d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z" />
                                    </svg>
                                   خوش آمدی '.$uusername.'
                                </button>
								</a>
									';
									
									
								}else{
									
									echo'
									<a href="login">
									<button class="auth-btn-index-two pointer">
                                    
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-person" viewBox="0 0 16 16">
                                        <path
                                            d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z" />
                                    </svg>
                                   ورود به حساب کاربری
                                </button></a>
									
									';
									
								}
								echo'
								</li>
                            <li class="nav-item"><span class="auth-icon-responsive d-xl-none d-block pointer"
                                    data-bs-toggle="modal" data-bs-target="#loginModal">
                                    <div class="header-box">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                            <path
                                                d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z" />
                                        </svg>
                                    </div>
                            </li>
                         
                        </ul>
                    </div>
                </div>
                <div class="col-lg-12 col-4 order-lg-4 order-1 ">
                    <div class="top-menu-menu d-lg-flex d-none">
                        <ul class="navbar-nav">
                            <li class="position-relative m-0"></li>
                            <li class="nav-item main-menu-head"><a href=""
                                    class="nav-link border-animate fromCenter fw-bold"><i class="bi bi-list"></i>
                                    منو محصولات
                                </a>
                                <ul class="main-menu">
                                    <li class="main-menu-sub-active-li"><a href=""><i class="bi bi-shield"></i>
                                            افست</a>
                                        <ul class="main-menu-sub back-menu"
                                            style=" background: #fff url("img/other/labtop.png") no-repeat;">
                                            <li><a class="title my-flex-baseline" href="">زیر منو شماره 1 <i
                                                        class="bi bi-chevron-left"></i></a></li>
                                            <li><a href="">زیر منو شماره 1</a></li>
                                         
                                            <li><a class="title my-flex-baseline" href="">زیر منو شماره 1 <i
                                                        class="bi bi-chevron-left"></i></a></li>
                                            <li><a href="">زیر منو شماره 1</a></li>
                                            <li><a href="">زیر منو شماره 1</a></li>
                       
                                            
                                        </ul>
                                    </li>
                                    <li><a href=""><i class="bi bi-shield"></i> دیجیتال</a>
                                        <ul class="main-menu-sub back-menu"
                                            style=" background: #fff url("img/other/labtop.png") no-repeat;">
                                          
                             
                                    <li><a class="title my-flex-baseline" href="">زیر منو شماره 1 <i
                                                class="bi bi-chevron-left"></i></a></li>
                                                <li><a href="">زیر منو شماره 1</a></li>
                                    <li><a href="">زیر منو شماره 1</a></li>
                                    
                                        </ul>
                                    </li>
                                    <li><a href=""><i class="bi bi-shield"></i>اداری</a>
                                        <ul class="main-menu-sub back-menu"
                                            style=" background: #fff url("img/other/labtop.png") no-repeat;">
                                            <li><a class="title my-flex-baseline" href="">زیر منو شماره 1 <i
                                                class="bi bi-chevron-left"></i></a></li>
                                    <li><a href="">زیر منو شماره 1</a></li>
                                    
                               
                                  
                                
                                        </ul>
                                    </li>
                                   
                                   
                                    <li><a href=""><i class="bi bi-shield"></i>تبلیغاتی</a>
                                        <ul class="main-menu-sub back-menu"
                                            style=" background: #fff url("img/other/509-5092096_offering-high-quality-mobile-repair-service-main-image_prev_ui.png") no-repeat;">
                                            <li><a class="title my-flex-baseline" href="">زیر منو شماره 1 <i
                                                class="bi bi-chevron-left"></i></a></li>
                                    <li><a href="">زیر منو شماره 1</a></li>
                               
                                  
                                    
                                   
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                    
                             
                            </li>
                          
                            <li class="nav-item"><a href="" class="nav-link border-animate fromCenter"> <i
                                        class="bi bi-tag"></i> تخفیف ها و پیشنهاد ها</a></li>
                            <li class="nav-item"><a href="" class="nav-link border-animate fromCenter">سوالی دارید</a>
                            </li>
                           
                        </ul>
                    </div>
                    <div class="responsive-menu d-block d-lg-none">
                        <div class="responsive-menu-icon">
                            <span id="showResponsiveMenu" class="pointer"><i class="bi bi-list"></i></span>
                        </div>
                        <div class="rm-body">
                            <div class="rm-overlay"></div>
                            <div class="rm-items">
                                <div class="rm-item-close pointer">
                                    <i class="bi bi-x"></i>
                                </div>
                                <div class="rm-item-img">
                                    <img src="img/default-icon/logo.png" alt="">
                                </div>
                                <div class="rm-item-search">
                                    <div class="top-menu-search ">
                                        <form action="" method="get">
                                            <div class="input-group">
                                                <input name="txt" type="text" class="search-txt rounded-pill"
                                                    placeholder="نام محصول مورد نظر خود را وارد کنید">
                                                <button type="submit" class="search-btn input-group-text rounded-pill">
                                                    <i class="bi bi-search"></i>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                              
							  
							  
							  
							  
							  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>


<script src="js/vendors.min.js"></script>
	

	<script src="js/jquery.smartmenus.js"></script>
	<script src="js/menus.js"></script>
	<script src="js/template.js"></script>
	
	
	<script src="js/demo.js"></script>

';          
?>
	