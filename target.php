<?php

include_once('main.php');
include_once('header.php');



if((isset($_GET['GS'])))
{
	if (isset($_COOKIE['cid'])) {
		setcookie("cid",'',time()-1200);
	}
	setcookie("cid",$_GET['GS'],time()+1200);
$unid=$_GET['GS'];
$fee=new ManageFees();	

$amp = $fee->Getshoplist1($uusername,$unid);
foreach($amp as $final)
{$amount=$final['amount'];}	
$amount = (_RIAL==1?str_replace(",", "", $amount)/10:str_replace(",", "", $amount)); //Amount will be based on Toman
echo''.$amount.'';

$_SESSION['course_amount']=str_replace
	(",", "", $amount);
	$_SESSION['gateway']=$unid;
	
	$token = refresh_token($refresh_token,$secret_id,$client_id);
	if (!$token){
$fee = new ManageFees();
$Authority=$unid;
$status="packpay--token-err-خطا در دریافت توکن";
$fee->AddUserPaymentlog($Authority,$uusername,$status,$amount);


    return; //your error
}


			$_SESSION['order_id']=$unid;
			
			$amount*=10;
			
			$_SESSION['pay_amount']=$amount/10;


			
		$data = [
    'access_token' => $token,
    'amount' =>$amount, 
    'callback_url' => 'http://harjachap.com/target', 
    'verify_on_request' => true
];
$send_to_bank_result = send_to_bank($data,$secret_id,$client_id);
			
			
            if ($send_to_bank_result['status']=="0")
			{
				$reference_code = $send_to_bank_result['reference_code'];
				
	$fee = new ManageFees();	
$Authority=$unid;	
$status='packpay--send to getway--'.$reference_code.'';
	$fee->AddUserPaymentlog($Authority,$uusername,$status,$amount);
				
				echo "<script>window.location.href='https://dashboard.packpay.ir/bank/purchase/send/?RefId=$reference_code';</script>";
                exit;
				
			}
			else{
				echo $send_to_bank_result['message'];
$Authority=$unid;
$status='packpay--token-err--'.$token.'-خطا در ارسال به درگاه--'.$send_to_bank_result['message'].'';
$fee->AddUserPaymentlog($Authority,$uusername,$status,$amount);

			    }

}

elseif(isset($_SESSION['gateway'])){
	$fee=new ManageFees();	
	$unid=$_SESSION['gateway'];
	$autvc=count($fee->getcountshoplistpart($uusername,$unid));
	if($autvc!==0){
	


		    if((isset($_GET['reference_code']))){
				
$token = refresh_token($refresh_token,$secret_id,$client_id);
$reference_code = $_GET['reference_code'];	

		  $data = [
    'access_token' => $token,
    'reference_code' => $reference_code,
];

$verify_result = verify($data,$secret_id,$client_id);

if ($verify_result['status']=="0"){


$comment=$verify_result['message'];
$RefID=$_GET['reference_code'];
$Authority=$unid;
$fee->updateUserPaymentlog($comment,$RefID,$Authority);
$fee->Updateshoplistafterpay($unid);
$getdeloo=$fee->Getshoplist1($uusername,$unid);
$llvm=$uusername;

    orderpayok($llvm,$unid);

    date_default_timezone_set('Asia/Tehran');
    list($gy, $gm, $gd) = explode('-', date('Y-n-d'));
    $j_date_array = gregorian_to_jalali($gy, $gm, $gd);
    $today_date=implode("/", $j_date_array);

echo'

<div class="cart">
            <div class="container-fluid">
                <div class="cart-content shadow-box">
                    <div class="payment">
                        <div class="payment-title">
                            <img src="img/default-icon/iconOk.png" alt="" width="100" class="img-fluid">
                            <h2>سفارش <span class="payment-order-code">'.$unid.'</span> با موفقیت در سیستم ثبت شد</h2>
                            <p class="text-muted mt-3">سفارش شما در حال پردازش است و  در سریع ترین زمان ممکن به دست شما میرسد</p>
                        </div>
                    </div>
                    <div class="category-filter">
                        <div class="category-filter-box">
                            <div class="category-filter-box-title">
                                <div class="d-flex justify-content-between align-items-center flex-wrap">
                                    <h4 class="fw-bold">
                                        کد سفارش : <span>'.$unid.'</span>
                                    </h4>
                                    <a href="order-detail?unid='.$unid.'" class="btn-main btn-main-primary waves-effect waves-light btn-payment">پیگیری سفارش</a>
                                </div>
                                <p class="text-muted my-2 font-14 text-payment">سفارش شما با موفقیت در سیستم ثبت شد و هم اکنون <span
                                        class="success-span">در حال پردازش</span> شده است
                                        
                                     <a href="order-detail?unid='.$unid.'">
                                    جزییات این سفارش را میتوانید با کلیک بر روی دکمه
                                    
                                          <span class="danger-span-border">پیگیری سفارش</span></a> مشاهده نمایید
                                </p>
                            </div>
                            
                        </div>
                    </div>
                    <div class="table-responsive-md d-lg-block d-none">
                        <table class="table main-table">
                            <thead>
                                <tr>
                                    <th scope="col">ردیف</th>
                                    <th scope="col">فاکتور</th>
                                    <th scope="col">شماره پیگیری بانکی</th>
                                    <th scope="col">مبلغ</th>
                                    <th scope="col">وضعیت</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="text-center">
                                    <td>1</td>
                                    <td>عادی</td>
                                    <td>'.$reference_code.'</td>
                                  
                                    <td>'.$getdeloo["0"]["amount"].' تومان</td>
                                    <td><span class="success-span">پرداخت موفق</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="table-responsive-mobile d-lg-none d-block">
                        <div class="trm-parent">
                            <div class="trm">
                                <div class="trm-item">ردیف</div>
                                <div class="trm-item">
                                    1
                                </div>
                            </div>
                            <div class="trm">
                                <div class="trm-item">درگاه</div>
                                <div class="trm-item">
                                   پی پک
                                </div>
                            </div>
                            <div class="trm">
                                <div class="trm-item">شماره پیگیری بانکی</div>
                                <div class="trm-item">
                                     '.$reference_code.'
                                </div>
                            </div>
                            <div class="trm">
                                <div class="trm-item">تاریخ</div>
                                <div class="trm-item">
                                    '.$today_date.'
                                </div>
                            </div>
                            <div class="trm">
                                <div class="trm-item">مبلغ</div>
                                <div class="trm-item">
                                    '.$getdeloo["0"]["amount"].'  تومان 	
                                </div>
                            </div>
                            <div class="trm">
                                <div class="trm-item">وضعیت</div>
                                <div class="trm-item">
                                    <span class="success-span">پرداخت موفق</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


';




}
else{
	
$comment=$verify_result['message'];
$RefID=$_GET['reference_code'];
$Authority=$unid;
$fee->updateUserPaymentlog($comment,$RefID,$Authority);
    $fee->Updateshoplistafterpay2($unid);



    echo'

<div class="cart">
            <div class="container-fluid">
                <div class="cart-content shadow-box">
                    <div class="payment">
                        <div class="payment-title">
                            <img src="img/default-icon/iconNok.jpg" alt="" width="100" class="img-fluid">
                            <h2>سفارش <span class="payment-order-code">'.$unid.'</span> پرداخت ناموفق بود</h2>
                            <p class="text-muted mt-3">ناچه طی این فرآیند مبلغی از حساب شما کسر شده است ، طی 72 ساعت آینده به حساب شما باز خواهد گشت.</p>
                        </div>
                    </div>
                    <div class="category-filter">
                        <div class="category-filter-box">
                            <div class="category-filter-box-title">
                                <div class="d-flex justify-content-between align-items-center flex-wrap">
                                    <h4 class="fw-bold">
                                       <span class="danger-span">(سفارش نا موفق بود )'.$verify_result['message'].'</span>
                                    </h4>
                                   
                                </div>
                             
                            </div>
                            
                        </div>
                    </div>
                    <div class="table-responsive-md d-lg-block d-none">
                        <table class="table main-table">
                            <thead>
                                <tr>
                                    <th scope="col">ردیف</th>
                                    <th scope="col">فاکتور</th>
                                    <th scope="col">شماره پیگیری بانکی</th>
                                    <th scope="col">مبلغ</th>
                                    <th scope="col">وضعیت</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="text-center">
                                    <td>1</td>
                                    <td>عادی</td>
                                    <td>'.$reference_code.'</td>
                                  
                                    <td>0 تومان</td>
                                    <td><span class="success-span">پرداخت نا موفق</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="table-responsive-mobile d-lg-none d-block">
                        <div class="trm-parent">
                            <div class="trm">
                                <div class="trm-item">ردیف</div>
                                <div class="trm-item">
                                    1
                                </div>
                            </div>
                            <div class="trm">
                                <div class="trm-item">فاکتور</div>
                                <div class="trm-item">
                                  عادی
                                </div>
                            </div>
                            <div class="trm">
                                <div class="trm-item">شماره پیگیری بانکی</div>
                                <div class="trm-item">
                                    انجام نشد
                                </div>
                            </div>
                            <div class="trm">
                                <div class="trm-item">تاریخ</div>
                                <div class="trm-item">
                                    '.$today_date.'
                                </div>
                            </div>
                            <div class="trm">
                                <div class="trm-item">مبلغ</div>
                                <div class="trm-item">
                                   تومان
                                </div>
                            </div>
                            <div class="trm">
                                <div class="trm-item">وضعیت</div>
                                <div class="trm-item">
                                    <span class="success-span">پرداخت نا موفق</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


';

    return;
		
		
	
			
			
			
			}
	
}

}


}


?>