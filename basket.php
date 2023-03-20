<?php
include('main.php');
include('header.php');
$fee = new ManageFees();
if(isset($_POST['submit'])){

    function randomPassword() {
        $alphabet = '123456789';
        $pass = array(); //remember to declare $pass as an array
        $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
        for ($i = 0; $i < 10; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }
        return implode($pass); //turn the array into a string
    }
    $fgwwt1 = json_encode($_POST,true);
    $productid="basket";
    $amount=$_POST['priceget'];
    $product=$fgwwt1;
    $product2="basket2";
    $acomment="submit from basket";
    $state='1';
    $unid=randomPassword();
	if($amount=="0" OR $amount==""){
		
		echo'سبد خرید خالی است';
		exit;
	}
    $counttttt = $fee->Addshoplist($productid,$uusername,$amount,$product,$product2,$acomment,$state,$unid);
	
if ($counttttt==1){
    echo "<script>window.location.href='step2?unid=$unid';</script>";
}



}



if(isset($_GET['delete'])){
    $delet=$_GET['delete'];

    $deleteprobe = $fee->deletebasketitem($delet);
    if ($deleteprobe==1){

        echo"ایتم با موفقیت از سبد خرید خذف شد";

    }

}
if(!$isLogedIn){

    $discountList = $fee->Getbasketforuser($_SESSION["bfslogin"]);
    $discountListsum = $fee->Getbasketforusersum($_SESSION["bfslogin"]);

}else{

$discountList = $fee->Getbasketforuser($uusername);
$discountListsum = $fee->Getbasketforusersum($uusername);
}
$aftertotal=$discountListsum["0"]["total"];
$aftertotal2=number_format($discountListsum["0"]["total"],0,'.',',');

echo'



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
                            <div class="line-step-box">
                                
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
        <form method="post" action="">
        <div class="cart">
            <div class="container-fluid">
                <div class="cart-content shadow-box">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="cart-detail">
                                <div class="table-responsive-lg">
                                    <table class="table table-hover main-table">
                                        <thead style="background: #f8f8f8;">
                                            <tr class="py-3">
                                                <th scope="col">حذف از سبد خرید</th>
                                                <th scope="col">محصول</th>
                                                <th scope="col">مشخصات</th>
                                                <th scope="col">نوع</th>
                                                <th scope="col">قیمت</th>
                                           
                                              
                                            </tr>
                                        </thead>
                                        <tbody>
                                        
                                        ';
$counterr=1;
                                  foreach($discountList as $discountProp69)
                                               {
                                                $data1=$discountProp69["data1"];
                                                $data2=$discountProp69["data2"];
                                                   $uinid=$discountProp69["uinid"];
                                                   $fgt1 = json_decode($data1,true);
                                                   $fgt2 = json_decode($data2,true);
                                                   $id=$discountProp69["product_id"];
                                                   $query = "WHERE aid=$id  ORDER BY `nim_product`.`aid` ASC";
                                                   $dist = $fee->Getproductlist($query);

                                                   echo'
                                                   <input type="hidden" name="uinid'.$counterr.'" id="uinid'.$counterr.'" class="form-control" value="'. $uinid.'">
                                                    <input type="hidden" name="prid'.$counterr.'" id="prid'.$counterr.'" class="form-control" value="'.$id.'">
                                                   <input type="hidden" name="javab'.$counterr.'" id="javab'.$counterr.'" class="form-control" value="'.$fgt1["fgt"]["0"]["farijavab"].'---'.$fgt1["fgt"]["1"]["farijavab"].''.$fgt1["fgt"]["2"]["farijavab"].''.$fgt1["fgt"]["3"]["farijavab"].'">
                                                    <input type="hidden" name="noet'.$counterr.'" id="noet'.$counterr.'" class="form-control" value="'.$fgt2["name"].'--'.$fgt2["count"].'">
                                                     <tr>
                                                <td class="icon"><a href="basket?delete='.$discountProp69["id"].'"><i class="bi bi-x-circle-fill"></i></a></td>
                                                
                                                 <td class="title">'.$dist["0"]["title"].'</td>
                                                  ';
                                                   if($fgt1["fgt"]["0"]["farijavab"]==""){echo'<td class="title">محصول فروشگاهی</td>';}
                                                   else{
                                                       echo' <td class="title">'.$fgt1["fgt"]["0"]["farijavab"].'---'.$fgt1["fgt"]["1"]["farijavab"].''.$fgt1["fgt"]["2"]["farijavab"].''.$fgt1["fgt"]["3"]["farijavab"].'</td>
';
                                                   }
                                                   echo'
                                               ';
                                                   if($fgt2["name"]==""){echo'<td class="title">محصول فروشگاهی</td>';}
                                                   else{
                                                       echo'<td class="title">'.$fgt2["name"].'</td>';
                                                   }
                                                   $dispricesh_change=number_format($discountProp69["price"],0,'.',',');
                                                   echo'
                                                
                                                <td class="price"><span class="num">'.$dispricesh_change.'</span> <span class="text-muted">تومان</span></td>
                                                
                                            </tr>
                                            
                                                   
                                                   ';

                                                   $counterr++; }
$dispricesh2_change=number_format($discountListsum["0"]["total"],0,'.',',');
                                       echo'
                                          
                                            
                                           
                                        </tbody>
                                    </table>
                                </div>
                               
                               با ثبت خرید قوانین هرجا چاپ را میپذیرم
                               <br>
                               قیمت نمایش داده شده به صورت علی الحساب در نظر گرفته شده و ممکن است برحسب جزییات سفارش پس از تایید بخش سفارشات هرجا چاپ این مبلغ تغییر یابد
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="cart-payment">
                                <div class="title text-center">
                                    <h4 class="fw-bold">مجموع کل سبد خرید</h4>
                                </div>
                                <table class="table main-table">
                                    <tr>
                                        <td class="fw-bold">قیمت کل</td>
                                        
                                        <td class="txt"><span class="fw-bold">'.$dispricesh2_change.'</span> <span
                                                class="text-muted">تومان</span></td>
                                    </tr>
                                    <tr>
                                        <td class="fw-bold">حمل و نقل</td>
                                        <td class="txt"><span class="fw-bold">رایگان</span> <span
                                                class="text-muted">تومان</span></td>
                                    </tr>
                                    <tr>
                                        <td class="fw-bold">مجموع</td>
                                        <td class="txt"><span class="fw-bold">'.$aftertotal2.'</span> <span
                                                class="text-muted">تومان</span></td>
                                    </tr>

                                </table>
                                
                                 
                                  <input type="hidden" name="priceget" id="priceget" class="form-control" value="'.$aftertotal.'">
                                  ';
if($isLogedIn){echo'<button name="submit" id="submit"  class="btn-bank waves-effect waves-light">اقدام به پرداخت</button>';}
                                       echo'
                                   </form>
                                  ';

if(!$isLogedIn)
{echo'<a href="login"><center><div name="frs" id="frs" class="btn-bank waves-effect waves-light">ثبت نام کنید</div></center></a>';}

                                       echo'
                                  

                                    
                                
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

    <!-- forced in page -->
    <script src="js/plugin/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>

';



?>