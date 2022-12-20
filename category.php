<?php
include('main.php');
include('header.php');
$fee = new ManageFees();
if(isset($_GET['type']))
{
	
	$type=$_GET['type'];
	if($type==1){$nametype="افست";}
	if($type==2){$nametype="دیجیتال";}
	if($type==3){$nametype="تبلیغاتی";}
	if($type==4){$nametype="فروشگاهی";}
	if($type==5){$nametype="محصولی دیگر";}
	
$query = "WHERE type=$type  ORDER BY `nim_product`.`aid` ASC";			
$discountList = $fee->Getproductlist($query);
$discountListcount = $fee->Getproductlistcount($query);
	
	
}
else{
	
	header("location:/index");
	exit;
}

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
                    <div class="main-category-title">
                        <h4 class="main-title">دسته بندی محصولات '.$nametype.'</h4>
                    </div>
					
					
                    
        <!-- start category -->
        <div class="category">
            <div class="container-fluid">
                <div class="filter-items shadow-box">
                    <div class="items">
                        <div class="link d-md-block d-none">
                            <a href="" class="active">پیشفرض</a>
                            <a href="" class="waves-effect waves-light">محبوب ترین</a>
                            <a href="" class="waves-effect waves-light">پرفروش ترین</a>
                            <a href="" class="waves-effect waves-light">جدیدترین</a>
                            <a href="" class="waves-effect waves-light">ارزان ترین</a>
                            <a href="" class="waves-effect waves-light">گران ترین</a>
                        </div>
                        <div class="count">
                            <p>مشاهده همه <span class="fw-bold">'.$discountListcount.'</span> نتیجه</p>
                        </div>
                        <div class="link-responsive d-md-none d-block">
                            <form action="">
                                <select class="form-select bg-light">
                                    <option>پیشفرض</option>
                                    <option>محبوب ترین</option>
                                    <option>پر فروش ترین</option>
                                    <option>جدیدترین</option>
                                    <option>ارزان ترین</option>
                                    <option>گران ترین</option>
                                </select>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3">
                        <div class="category-filters">
                           
                            
                            <div class="category-filter">
                                <div class="category-filter-box">
                                    <div class="category-filter-box-title">
                                        <h4 class="fw-bold">
                                            فیلتر متنوع
                                        </h4>
                                    </div>
                                    <div class="category-filter-box-desc">
                                        <form action="">
                                            <div class="form-group form-check form-switch">
                                                <input class="form-check-input" type="checkbox"
                                                    id="flexSwitchCheckDefault">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">کارت ویزیت</label>
                                                   
                                            </div>
                                            <div class="form-group form-check form-switch">
                                                <input class="form-check-input" type="checkbox"
                                                    id="flexSwitchCheckChecked" checked>
                                                <label class="form-check-label" for="flexSwitchCheckChecked">کارت ویزیت</label>
                                                   <div class="show-more-btn mt-2">
                                                    <button class="shadow-box waves-effect waves-light" type="submit">اعمال فیلتر <i
                                                            class="bi bi-filter"></i></button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                           
                           
                           
                        </div>
                    </div>
					
					
                    <div class="col-lg-9">
                        <div class="category-item">
                            <div class="row">
							
							
                             
                               ';
							   
							   foreach($discountList as $discountProp)
					{
						
							
						
									
					
							   echo'
							   
							   
                           
                                <div class="col-12">
                                    <div class="product-row shadow-box rounded-3 mb-3">
                                        <a href="product?id='.$discountProp['aid'].'">
                                            <div class="product-row-desc justify-content-start">
                                                <div class="product-row-desc-item">
                                                    <div class="product-row-img">
                                                        <img src="img/product/product-image5.jpg" alt="" class=""
                                                            width="150">
                                                    </div>
                                                    <div class="product-row-title">
                                                        <h6 class="font-16">'.$discountProp['title'].'</h6>
                                                        <div class="product-price">
                                                            <span class="badge rounded-pill bg-danger me-2">13%</span>
                                                         شروع قیمت از :
                                                            <p>'.$discountProp['baseprice'].' تومان</p>
                                                        </div>
                                                        <a href="product?id='.$discountProp['aid'].'" class="btnx btnx-default">مشاهده محصول</a>
                                                            
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
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
        <!-- end category -->

      




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

    <script>
        $(document).ready(function () {
            $("#catRange").slider({
                id: "slider5b",
                min: 0,
                max: 1000000,
                range: true,
                step: 10000,
                value: [0, 1000000],
                rtl: false,
                formatter: function formatter(val) {
                    if (Array.isArray(val)) {
                        return " تومان " +val[0] +" - " + val[1] + " تومان ";
                    } else {
                        return val;
                    }
                },
            });
        });
    </script>
';
   include('footer.php');
?>