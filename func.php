<?php

function sendemailverfy($llvm,$stat)
{	
include_once('main.php');

$tre=rand(999,9999);
if($stat==1){
    $userinput='هرجا چاپ  جهت تایید ورود کد زیر را وارد کنید '.$tre.'';
    $oop=urlencode($userinput);

}
if($stat==2){
    $userinput='ثبت نام شما با موفقیت انجام شد به هرجا چاپ خوش آمدید';
    $oop=urlencode($userinput);

}

                                                                                                                    
$ch = curl_init('https://api.kavenegar.com/v1/48663355617733353946652F534659315A2F4B726A2F523767376E75496650586B397A50723076457474303D/sms/send.json?receptor='.$llvm.'&sender=90001702&message='.$oop.'');                                                                      
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET"); 
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);                                                                                                                                     
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                   
curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
	'User-Agent: PostmanRuntime/7.29.2', 
	'Accept: */*',
	'Content-Length: ' . strlen($data_string),
	'Content-Type: application/json'
	)                                                                     
);                                                                                                                   
                                                                                                                     
$result = curl_exec($ch);

curl_close($ch);


$tre2=date("Y-m-d H:i:s");
$student = new ManageStudents();
$mobileInfo = $student->autveruserinsert($tre,$tre2,$llvm);	
	



}

function orderpayok($llvm)
{	
include_once('main.php');


$oop='خرید%20شما%20با%20موفقیت%20انجام%20شد';


                                                                                                                    
$ch = curl_init('https://api.kavenegar.com/v1/48663355617733353946652F534659315A2F4B726A2F523767376E75496650586B397A50723076457474303D/sms/send.json?receptor='.$llvm.'&sender=90001702&message='.$oop.'');                                                                      
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET"); 
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);                                                                                                                                     
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                   
curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
	'User-Agent: PostmanRuntime/7.29.2', 
	'Accept: */*',
	'Content-Length: ' . strlen($data_string),
	'Content-Type: application/json'
	)                                                                     
);                                                                                                                   
                                                                                                                     
$result = curl_exec($ch);

curl_close($ch);





}


?>