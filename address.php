
<?php

include('main.php');
include('header.php');
$student = new ManageStudents();
$fee = new ManageFees();

if(isset($_GET['delete'])){

	$aid=$_GET['delete'];

	$discountList = $fee->deleteaddruser($aid);

	if($discountList==1){

		echo'<center>آدرس با موفقیت حذف شد</center>';
	}

}

if(isset($_POST['addr'])){
	
	
	
	
	$name=$_POST['name'];
	$ostan=$_POST['ostan'];
	$shahr=$_POST['shahr'];
	$postcod=$_POST['postcod'];
	$number=$_POST['number'];
	$addr=$_POST['addr'];

	$counttttt = $student->Addusersaddr($uusername,$name,$ostan,$shahr,$postcod,$number,$addr);
	if($counttttt==1){
		
		echo'آدرس با موفقیت اضافه شد';
	}
}

if(isset($_GET['add'])){

	
	echo'
	<script type="text/javascript">
	
	function showcityProp(item)
							{
                                $("#shahr").empty();
                                var proviid = document.getElementById("ostan").value; 
                              
                              
                              	$.ajax({
							
								    url: "aj.php",
								    type: "POST",
								    data: {op:"getcity",proviid:proviid},
									dataType: "json",
								    success: function(data){
                                        
                                       optText = "New elemenet";
                                        optValue = "newElement";
                                         $("#shahr").append(`${data.optsazi}`);
                                       
									   
								    }
								   });
                                
							}
	
	
	
	</script>
	
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
                                                    <span>اطلاعات حساب</span>
                                                </a>
                                            </li>
                                          
                                            <li class="nav-item">
                                                <a href="order" class="nav-link text-muted">
                                                    <i class="bi bi-basket-fill"></i>
                                                    <span>سفارش ها</span>
                                                </a>
                                            </li>
                                           
                                          
                                          
                                            <li class="nav-item active">
                                                <a href="address" class="nav-link text-muted">
                                                    <i class="bi bi-pin-map"></i>
                                                    <span>آدرس های من</span>
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
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <h4 class="fw-bold">
                                                          آدرس های من
                                                        </h4>
                                                        <a class="btn btn-danger btn-sm waves-effect waves-light" href="address?add">ثبت آدرس جدید <i
                                                                class="bi bi-plus-circle-dotted"></i></a>
                                                    </div>
                                                </div>
												
											
	 <form action="" method="post">												
	<center>	
 <div class="row"> 
                        <div class="col-lg-7">
                            <div class="checkout-forms">
                                <div class="checkout-form-title">
                                    <h5>افزودن آدرس</h5>
                                </div>
                                <div class="checkout-form">
                               
                                        <div class="form-group">
                                            <div class="row">
                                               

 
                                                <div class="col-md-6">
                                                    <div class="form-group">
													
                                                        <label for="name" class="form-label">نام و نام خانوادگی<span
                                                            class="text-danger ms-1">*</span></label>
                                                        <input type="text" id="name" required name="name" class="form-control rounded-pill">
                                                    </div>
                                                </div>
												
												<div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="postcod" class="form-label">کد پستی<span
                                                            class="text-danger ms-1">*</span></label>
                                                        <input type="text" id="postcod" required name="postcod" class="form-control rounded-pill">
                                                    </div>
                                                </div>
												<div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="number" class="form-label">شماره موبایل </label>
                                                        <input type="text"  id="number" name="number" class="form-control rounded-pill">
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
                                                    <select onchange="showcityProp(this)" id="ostan" name="ostan" class="form-select rounded-pill">
                                                    <option selected="selected" name="-" id="-" value="-">-</option>
                                                    ';
	$active='1';
	$loadprovince = $fee->Getprovince($active);

                                      foreach($loadprovince as $loadprovinceprob)
                                                     {

														 echo'
														 
														   <option name="'.$loadprovinceprob["id"].'" id="'.$loadprovinceprob["id"].'" value="'.$loadprovinceprob["id"].'">'.$loadprovinceprob["name"].'</option>
														 ';
													 }
	echo'  
                                                    </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="shahr" class="form-label">شهر <span
                                                            class="text-danger ms-1">*</span></label>
                                                    <select id="shahr" name="shahr" class="form-select rounded-pill">
                                                         <div id="shahr_show" name="shahr_show"></div>
                                                    </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="addr" class="form-label">آدرس<span
                                                    class="text-danger ms-1">*</span></label>
                                            <input type="text" name="addr" required  placeholder="نام خیابان  پلاک و واحد" id="addr"
                                                class="form-control rounded-pill">
                                        </div>
                                       
                                   <button  class="shadow-sm fw-bold btn-add-to-cart mt-sm-0 mt-2 waves-effect waves-light">ثبت آدرس</button>
								    
                                </div>
                            </div>
                        </div>
	
											</center>	
												
												
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

	
	</form>
	
	
	
	
	
	
	
	
	
	
	

	';
	   include('footer.php');
	
exit;	
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
                                                    <span>اطلاعات حساب</span>
                                                </a>
                                            </li>
                                          
                                            <li class="nav-item">
                                                <a href="order" class="nav-link text-muted">
                                                    <i class="bi bi-basket-fill"></i>
                                                    <span>سفارش ها</span>
                                                </a>
                                            </li>
                                           
                                          
                                           
                                            <li class="nav-item active">
                                                <a href="address" class="nav-link text-muted">
                                                    <i class="bi bi-pin-map"></i>
                                                    <span>آدرس های من</span>
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
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <h4 class="fw-bold">
                                                            آدرس های من
                                                        </h4>
                                                        <a class="btn btn-danger btn-sm waves-effect waves-light" href="address?add">ثبت آدرس جدید <i
                                                                class="bi bi-plus-circle-dotted"></i></a>
                                                    </div>
                                                </div>
												
												
												
												
												
												
												
												
												
												
												';
												
												
												$discountList = $student->Getusersaddr($uusername);
foreach($discountList as $discountProp)
					{
						
						echo'
												
                                                <div class="ui-box-item-desc">
                                                    <div class="orders">
                                                        <div class="order-item">
                                                            <div class="order-item-status flex-nowrap">
                                                                <div class="order-item-status-item">
                                                                    <p>'.$discountProp['addr'].'
                                                                    </p>
                                                                </div>
                                                                <div class="order-item-status-item dropd-status">
                                                                    <div class="dropdown">
                                                                        <a class="" href="#" role="button"
                                                                            id="dropdownMenuLink"
                                                                            data-bs-toggle="dropdown"
                                                                            aria-expanded="false">
                                                                            <i
                                                                                class="bi bi-three-dots-vertical text-dark fs-5"></i>
                                                                        </a>

                                                                        <ul class="dropdown-menu flex-column"
                                                                            aria-labelledby="dropdownMenuLink">
                                                                           
                                                                            <li><a class="dropdown-item" href="address?delete='.$discountProp['aid'].'"><i
                                                                                        class="bi bi-trash text-danger"></i>
                                                                                    حذف </a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="order-item-detail border-0">
                                                                <div
                                                                    class="d-flex justify-content-between align-items-center flex-wrap">
                                                                    <div class="d-flex flex-column">
                                                                        <div class="text-muted mb-2">
                                                                            <i class="bi bi-pin-map me-1"></i>
                                                                            <p>'.$discountProp['shahr'].'</p>
                                                                        </div>
                                                                        <div class="text-muted mb-2">
                                                                            <i class="bi bi-envelope me-1"></i>
                                                                            <p>'.$discountProp['postcod'].'</p>
                                                                        </div>
                                                                        <div class="text-muted mb-2">
                                                                            <i class="bi bi-phone me-1"></i>
                                                                            <p>'.$discountProp['number'].'</p>
                                                                        </div>
                                                                        
                                                                    </div>
                                                                   
                                                                </div>
                                                            </div>
                                                        </div>
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
                    </div>
                </div>
            </div>
        </div>
        <!-- end dashboard -->
    </div>

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
    <script src="js/plugin/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>



';
?>

