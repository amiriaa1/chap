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

    echo "سلام";
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
	$autvc=count($fee->Updateshoplist($uusername,$unid));
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
echo $verify_result['message'];

$comment=$verify_result['message'];
$RefID=$_GET['reference_code'];
$Authority=$unid;
$fee->updateUserPaymentlog($comment,$RefID,$Authority);
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







?>