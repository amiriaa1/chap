<?php

function sendemailverfy($llvm)
{	
include_once('main.php');
$settings_class = new ManageSettings();
$system_settings = $settings_class->SystemSettings();
$gateway1_key = $system_settings["gateway1_key"];
$tre=rand(999,9999);

$tre2=date("Y-m-d H:i:s");

                                                                                  
                                                                                                                     
$ch = curl_init('test');                                                                      
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");                                                                                                                                     
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

//var_dump(json_decode($result, true));

$data2 = json_decode(trim($result), TRUE);

$tre2=date("Y-m-d H:i:s");
$student = new ManageStudents();
$mobileInfo = $student->autveruserinsert($tre,$tre2,$llvm);	
	

}

?>