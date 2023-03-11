<?php
include('main.php');


if($uactive!=='1' && $isLogedIn){
	
	header("Location: verification");
}

$fee = new ManageFees();
if(!$isLogedIn){
	$uusername=$_SESSION["bfslogin"];
	$basketcountuser = $fee->Getbasketforusercount($uusername);

}
else{
	$basketcountuser = $fee->Getbasketforusercount($uusername);
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
                         
                        </div>
                    </div>
                </div>
            </div>
            <div class="row top-menu justify-content-center align-items-center">
                <div class="col-lg-2 col-4 order-lg-1 order-2">
                    <div class="top-menu-logo">
                        <a href="index"><img src="img/default-icon/logo.jpg" alt="" class="img-fluid"></a>
                    </div>
                </div>
                <div class="col-lg-6 text-center d-none d-lg-block order-lg-2 order-3">
				
                    <div class="top-menu-search ">
                        <form action="" method="get">
                            <div class="input-group">
                                
							 <div class="top-menu-menu d-lg-flex d-none">
                        <ul class="navbar-nav">
                            
                       <li class="position-relative m-0"></li>
                           
                            
                            
                              <li class="nav-item"><a href="" class="nav-link border-animate fromCenter"><i class="bi bi-menu-app"></i>
                              
                              لیست محصولات
                              
                             
                                         </a>
                                <ul class="level-one">
                                    <li><a href="vendor"></i>چاپ و طراحی</a></li>
                                    <li><a href="category?type=3">فروش وخدمات ماشین های اداری</a></li>
                                    <li><a href="category?type=4">فروش ملزومات اداری و دفتری</a></li>
                                   
                                </ul>
                            </li>
                           
                          
                           <li class="nav-item"><a href="#" class="nav-link border-animate fromCenter">راهنمای خرید</a>
                            <li class="nav-item"><a href="blog" class="nav-link border-animate fromCenter">مجله هرجا چاپ</a>
                            <li class="nav-item"><a href="about-us" class="nav-link border-animate fromCenter">درباره ما</a>
							  <li class="nav-item"><a href="contact-us" class="nav-link border-animate fromCenter">ارتباط با ما</a>
							    
								
                            </li>
                   
                           
                        </ul>
						   
                    </div>
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
                                   خوش آمدید '.$uusername.'
                                </button>
								</a>
								  <li class="nav-item position-relative">
                                <a href="basket" class="text-muted">
									<button class="header-box pointer">
                                     
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-bag" viewBox="0 0 16 16">
                                        <path
                                            d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                                    </svg>
                                  
                                   <span class="count-item rounded-circle">'.$basketcountuser.'</span>
                                </button>
								</a>
                            </li>
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
                                  ورود / عضویت
                                </button></a>
									 <li class="nav-item position-relative">
                                <a href="basket" class="text-muted">
									<button class="header-box pointer">
                                     
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-bag" viewBox="0 0 16 16">
                                        <path
                                            d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                                    </svg>
                                  
                                   <span class="count-item rounded-circle">'.$basketcountuser.'</span>
                                </button>
								</a>
                            </li>
									';
									
								}
								echo'
								</li>
								
                            <li class="nav-item"><span class="auth-icon-responsive d-xl-none d-block pointer">
                                    
                                    <div class="header-box">
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
                                   خوش آمدید '.$uusername.'
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
                                  ورود
                                </button></a>
									
									';
									
								}
								echo'
                                    </div>
                            </li>
                         
                        </ul>
                    </div>
                </div>
                
                <div class="col-lg-12 col-4 order-lg-4 order-1 ">
                   
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
                                    <img src="img/default-icon/logo.jpg" alt="">
                                </div>
                                <div class="rm-item-search">
                                    <div class="top-menu-search ">
                                        <form action="" method="get">
                                            <div class="input-group">
                                                 <ul class="navbar-nav">
                            
                    
                             
                            </li>
                          
                           
                            <li class="nav-item"><a href="about-us" class="nav-link border-animate fromCenter">درباره ما</a>
							  <li class="nav-item"><a href="contact-us" class="nav-link border-animate fromCenter">ارتباط با ما</a>
							    <li class="nav-item"><a href="#" class="nav-link border-animate fromCenter">راهنمای خرید</a>
								
                            </li>
                           
                        </ul>
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
	