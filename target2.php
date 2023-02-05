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
    $amount*=10;
    $key = "XDG4VIrHqsCXFezWODxii03VneQ/6VDs";
    $MerchantId = "140341573";
    $TerminalId = "24102838";
    $OrderId =$unid;
    $LocalDateTime = date("m/d/Y g:i:s a");
    $ReturnUrl = "http://harjachap.com/target2.php";
    $SignData = encrypt_pkcs7("$TerminalId;$OrderId;$amount", "$key");
    $data = array(
        'TerminalId' => $TerminalId,
        'MerchantId' => $MerchantId,
        'Amount' => $amount,
        'SignData' => $SignData,
        'ReturnUrl' => $ReturnUrl,
        'LocalDateTime' => $LocalDateTime,
        'OrderId' => $OrderId
    );

    $result = CallAPI('https://sadad.shaparak.ir/vpg/api/v0/Request/PaymentRequest', $data);
	if ($result->ResCode !== 0){
$fee = new ManageFees();
$Authority=$unid;
$status="sadad--PaymentRequest-err-'.$result->Description.'";
$fee->AddUserPaymentlog($Authority,$uusername,$status,$amount);


    return; //your error
}
    else{
        $_SESSION['order_id']=$unid;
        $_SESSION['pay_amount']=$amount/10;
        $Token = $result->Token;
        $url = "https://sadad.shaparak.ir/VPG/Purchase?Token=$Token";
        $fee = new ManageFees();
        $Authority=$unid;
        $status='sadad--send to getway--'.$Token.'';
        $fee->AddUserPaymentlog($Authority,$uusername,$status,$amount);

        header("Location:$url");
        exit;



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
orderpayok($llvm);

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
                                    <th scope="col">درگاه</th>
                                    <th scope="col">شماره پیگیری بانکی</th>
                                    <th scope="col">مبلغ</th>
                                    <th scope="col">وضعیت</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="text-center">
                                    <td>1</td>
                                    <td>پی پک</td>
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
    echo $verify_result['message'];
    return;
		
		
	
			
			
			
			}
	
}

}


}


?>