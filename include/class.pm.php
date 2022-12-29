<?php 


include_once('class.database.php'); 


class ManagePMs { public $link; function __construct() { global $table_prefix; $db_connection = new dbConnection(); $this->link = $db_connection->connect(); return $this->link; } 


function AddPM($pmsubject,$pmbody,$from_key,$from_id,$to_key,$to_id,$pmcan_reply,$pmfor) { global $table_prefix; date_default_timezone_set("UTC"); $now = date("Y-m-d H:i:s"); $query = $this->link->prepare("INSERT INTO `".$table_prefix."private_messages` (`pmsubject`, `pmbody`,`pmdate`, `pmfrom_key`,`pmfrom_id`,`pmto_key`,`pmto_id`,`pmcan_reply`,`pmfor`) VALUES (?,?,'$now',?,?,?,?,?,?) "); $values = array($pmsubject,$pmbody,$from_key,$from_id,$to_key,$to_id,$pmcan_reply,$pmfor); $query->execute($values); $counts = $query->rowCount();  if ($counts==1) {  $pmid = $this->LastPMID();  $for_parent=$for_parent1='';  if($for_parent==1)  {  $for_parent = ', `for_parent`';  $for_parent1 = ', 1';  }  $query = $this->link->prepare("INSERT INTO `".$table_prefix."private_messages_".$from_type."_".$to_type."` (`pmid`,`$from_key`, `$to_key` ".$for_parent.")  VALUES (?,?,?".$for_parent1.")  ");  $values = array($pmid,$from_id,$to_id);  $query->execute($values);  $counts = $query->rowCount();  } return $counts; }


function UpdatePM($pmid,$pmsubject,$pmbody) { global $table_prefix; $query = $this->link->prepare("UPDATE `".$table_prefix."private_messages` SET `pmsubject`=?, `pmbody`=? WHERE `pmid`=?"); $values = array($pmsubject,$pmbody,$pmid); $query->execute($values); $counts = $query->rowCount(); return $counts; } 


function SetPMRead($pmid) { global $table_prefix; $query = $this->link->prepare("UPDATE `".$table_prefix."private_messages` SET `pmread`=NOW() WHERE `pmid`=?"); $values = array($pmid); $query->execute($values); $counts = $query->rowCount(); return $counts; }


function SetPMDate($pmid,$pmdate) { global $table_prefix; $query = $this->link->prepare("UPDATE `".$table_prefix."private_messages` SET `pmdate`=? WHERE `pmid`=?"); $values = array($pmdate,$pmid); $query->execute($values); $counts = $query->rowCount(); return $counts; } 


function GetPMs($type,$xid,$start=0) { global $table_prefix,$page_limit; $query = $this->link->prepare("SELECT * FROM `".$table_prefix."private_messages` WHERE (`pmto_key`='$type' AND `pmto_id`=?) AND ((`pmfor`='$type' AND `pmread` IS NULL) OR (`pmfor`='$type' AND `pmread` IS NOT NULL)) ORDER BY `pmdate` DESC LIMIT $start,$page_limit"); $values = array($xid); $query->execute($values); $counts = $query->rowCount(); $result = $query->fetchAll(); return $result; } 


function GetPMsCount($type,$xid) { global $table_prefix; $query = $this->link->prepare("SELECT count(*) AS `count` FROM `".$table_prefix."private_messages` WHERE (`pmto_key`='$type' AND `pmto_id`=?) AND ((`pmfor`!='$type' AND `pmread` IS NULL) OR (`pmfor`='$type' AND `pmread` IS NOT NULL)) ORDER BY `pmdate` DESC"); $values = array($xid); $query->execute($values); $result = $query->fetchAll(); return $result[0]['count']; } 


function GetSentPMs($type,$xid,$start=0) { global $table_prefix,$page_limit; $query = $this->link->prepare("SELECT * FROM `".$table_prefix."private_messages` WHERE `pmfrom_key`='$type' AND `pmfrom_id`=? AND `pmfor`='$type' ORDER BY `pmdate` DESC LIMIT $start,$page_limit"); $values = array($xid); $query->execute($values); $counts = $query->rowCount(); $result = $query->fetchAll(); return $result; } 


function GetSentPMsCount($type,$xid) { global $table_prefix; $query = $this->link->prepare("SELECT count(*) AS `count` FROM `".$table_prefix."private_messages` WHERE `pmfrom_key`='$type' AND `pmfrom_id`=? AND `pmfor`='$type' ORDER BY `pmdate` DESC"); $values = array($xid); $query->execute($values); $result = $query->fetchAll(); return $result[0]['count']; } 


function UserHasNewPM($type,$xid) { global $table_prefix; $query = $this->link->prepare("SELECT * FROM `".$table_prefix."private_messages` WHERE `pmto_key`='$type' AND `pmto_id`=? AND `pmfor`!='$type' AND `pmread` IS NULL"); $values = array($xid); $query->execute($values); $counts = $query->rowCount(); $result = $query->fetchAll(); return $result; }


function GetPMList($query) { global $table_prefix; $query = $this->link->query("SELECT * FROM `".$table_prefix."private_messages` $query ORDER BY `pmid` DESC"); $counts = $query->rowCount(); $result = $query->fetchAll(); return $result; }


function GetPMList2($query,$start=0,$limit=20) { global $table_prefix; $query = $this->link->query("SELECT * FROM `".$table_prefix."private_messages` $query ORDER BY `pmid` DESC LIMIT $start,$limit"); $counts = $query->rowCount(); $result = $query->fetchAll(); return $result; } 


function GetPMInfoById($pmid) { global $table_prefix; $query = $this->link->prepare("SELECT * FROM `".$table_prefix."private_messages` WHERE `pmid`=?"); $values = array($pmid); $query->execute($values); $counts = $query->rowCount(); if($counts==1) { $result = $query->fetchAll(); return $result[0]; } else { return $counts; } } 


function LastPMID() { global $table_prefix; $query = $this->link->query("SELECT `pmid` FROM `".$table_prefix."private_messages` ORDER BY `pmid` DESC LIMIT 0,1"); $result = $query->fetchAll(); return $result[0]['pmid']; } 


function DeletePM($pmid) { global $table_prefix; $query = $this->link->prepare("DELETE FROM `".$table_prefix."private_messages` WHERE `pmid`=?"); $values = array($pmid); $query->execute($values); $counts = $query->rowCount(); if($counts==1) return 1; else return $counts; } 


function SendSMS($message,$to) { global $table_prefix,$system_settings; if ($system_settings['sms_panel']==1) { if (strpos($system_settings['sms_panel_url'], "sms-webservice.ir")!==false) 
{ $client = new SoapClient($system_settings['sms_panel_url']); $parameters['Username'] = $system_settings['sms_panel_username']; $parameters['PassWord'] = $system_settings['sms_panel_password']; $parameters['SenderNumber'] = $system_settings['sms_panel_number']; $parameters['RecipientNumbers'] = array($to); $parameters['MessageBodie'] = $message; $parameters['Type'] = 1; $parameters['AllowedDelay'] = 0; $res = $client->GeCredit($parameters); echo $res->GeCreditResult; $res = $client->SendMessage($parameters); } else if (strpos($system_settings['sms_panel_url'], "sms.ir")!==false)
{ date_default_timezone_set('Asia/Tehran'); try { date_default_timezone_set("Asia/Tehran"); 
$APIKey = $system_settings['sms_panel_password']; $SecretKey = $system_settings['sms_panel_username']; $LineNumber = $system_settings['sms_panel_number'];  $MobileNumbers = array($to); $Messages = array($message);  @$SendDateTime = date("Y-m-d")." ".date("H:i:s"); $SmsIR_SendMessage = new SmsIR_SendMessage($APIKey,$SecretKey,$LineNumber); $SendMessage = $SmsIR_SendMessage->SendMessage($MobileNumbers,$Messages,$SendDateTime);  var_dump($SendMessage); } catch (Exeption $e) { echo 'Error SendMessage : '.$e->getMessage(); } } else if (strpos($system_settings['sms_panel_url'], "smsg.ir")!==false)  { include_once('lib/nusoap.php'); $sms_client= new nusoap_client($system_settings['sms_panel_url'],'wsdl'); $result = $sms_client->call('send', array( 'username'=>$system_settings['sms_panel_username'], 'password'=>$system_settings['sms_panel_password'], 'message'=>$message, 'to'=>$to, 'from'=>$system_settings['sms_panel_number'] )); if($result['status']!=0) echo $result['status']; } else if (strpos($system_settings['sms_panel_url'], "smsline.ir")!==false)  { include_once('lib/nusoap.php'); $sms_client= new nusoap_client($system_settings['sms_panel_url'],'wsdl'); $sms_client->soap_defencoding = 'UTF-8'; $err = $sms_client->getError(); if (!$err) { $text1=html_to_utf8($text); $send = $sms_client->call('SendSMS', array( $system_settings['sms_panel_username'], $system_settings['sms_panel_password'], $to, $message, $system_settings['sms_panel_number'] ) ); $err = $sms_client->getError(); print_r($send); if ($err) print_r ($err); else {  print_r($send); } } } else if (strpos($system_settings['sms_panel_url'], "server.php")!==false)  { ini_set("soap.wsdl_cache_enabled", "0"); $client = new SoapClient($system_settings['sms_panel_url']); $user = $system_settings['sms_panel_username']; $pass = $system_settings['sms_panel_password']; $fromNum = $system_settings['sms_panel_number']; $toNum = array($to); $messageContent = $message; $op = "send";   $client->SendSMS($fromNum,$toNum,$messageContent,$user,$pass,$time,$op); } else if (strpos($system_settings['sms_panel_url'], "smsapp.ir")!==false)  { $curl = curl_init(); curl_setopt_array($curl, array( CURLOPT_URL => "http://api.smsapp.ir/v2/sms/send/simple", CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1, CURLOPT_CUSTOMREQUEST => "POST", CURLOPT_POSTFIELDS => "message=".$message."&sender=".$system_settings['sms_panel_number']."&Receptor=".$to, CURLOPT_HTTPHEADER => array( "apikey: ".$system_settings['sms_panel_username'], ), ) ); $response = curl_exec($curl); $err = curl_error($curl); curl_close($curl); if ($err) { echo "cURL Error #:" . $err; } } else if (strpos($system_settings['sms_panel_url'], "kavenegar.com")!==false)
//kavenegar.com 
{ $data = array( "receptor"=>$to, "message"=>$message, "sender"=>$system_settings['sms_panel_number'] );
 $url="https://api.kavenegar.com/v1/".$system_settings['sms_panel_username']."/sms/send.json"; PostCURL("POST", $url, $data); }
 else { ini_set("soap.wsdl_cache_enabled", "0"); if(strpos($system_settings['sms_panel_url'], "svc"))
 { $parameters['userName'] = $system_settings['sms_panel_username'];
 $parameters['password'] = $system_settings['sms_panel_password'];
 $parameters['fromNumber'] = $system_settings['sms_panel_number'];
 $parameters['toNumbers'] = array($to);
 $parameters['messageContent'] = $message;
 $parameters['isFlash'] = false; $recId = array(); $status = array(); $parameters['recId'] = &$recId ;
 $parameters['status'] = &$status ; $sms_client->SendSMS($parameters)->SendSMSResult; } 
 else { $sms_client = new SoapClient($system_settings['sms_panel_url'], array('encoding'=>'UTF-8'));
 $parameters['username'] = $system_settings['sms_panel_username']; $parameters['password'] = $system_settings['sms_panel_password'];
 $parameters['from'] = $system_settings['sms_panel_number']; $parameters['to'] = $to; $parameters['text'] = $message;
 $parameters['isflash'] = false; $sms_client->SendSimpleSMS2($parameters)->SendSimpleSMS2Result;
 echo $sms_client->SendSimpleSMS2($parameters)->SendSimpleSMS2Result; } } return 1; } } } 



class SmsIR_SendMessage { /** * gets API Message Send Url. * * @return string Indicates the Url */ 


protected function getAPIMessageSendUrl() { return "http://RestfulSms.com/api/MessageSend"; } /** * gets Api Token Url. * * @return string Indicates the Url */ 

protected function getApiTokenUrl(){ return "http://RestfulSms.com/api/Token"; } /** * gets config parameters for sending request. * * @param string $APIKey API Key * @param string $SecretKey Secret Key * @param string $LineNumber Line Number * @return void */ 


public function __construct($APIKey,$SecretKey,$LineNumber){ $this->APIKey = $APIKey; $this->SecretKey = $SecretKey; $this->LineNumber = $LineNumber; } /** * send sms. * * @param MobileNumbers[] $MobileNumbers array structure of mobile numbers * @param Messages[] $Messages array structure of messages * @param string $SendDateTime Send Date Time * @return string Indicates the sent sms result */ 


public function SendMessage($MobileNumbers, $Messages, $SendDateTime = '') { $token = $this->GetToken($this->APIKey, $this->SecretKey); if($token != false){ $postData = array( 'Messages' => $Messages, 'MobileNumbers' => $MobileNumbers, 'LineNumber' => $this->LineNumber, 'SendDateTime' => $SendDateTime, 'CanContinueInCaseOfError' => 'false' ); $url = $this->getAPIMessageSendUrl(); $SendMessage = $this->execute($postData, $url, $token); $object = json_decode($SendMessage); if(is_object($object)){ $array = get_object_vars($object); if(is_array($array)){ $result = $array['Message']; } else { $result = false; } } else { $result = false; } } else { $result = false; } return $result; } /** * gets token key for all web service requests. * * @return string Indicates the token key */ 


private function GetToken(){ $postData = array( 'UserApiKey' => $this->APIKey, 'SecretKey' => $this->SecretKey, 'System' => 'php_rest_v_1_2' ); $postString = json_encode($postData); $ch = curl_init($this->getApiTokenUrl()); curl_setopt($ch, CURLOPT_HTTPHEADER, array( 'Content-Type: application/json' )); curl_setopt($ch, CURLOPT_HEADER, false); curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false); curl_setopt($ch, CURLOPT_POST, count($postString)); curl_setopt($ch, CURLOPT_POSTFIELDS, $postString); $result = curl_exec($ch); curl_close($ch); $response = json_decode($result); if(is_object($response)){ $resultVars = get_object_vars($response); if(is_array($resultVars)){ @$IsSuccessful = $resultVars['IsSuccessful']; if($IsSuccessful == true){ @$TokenKey = $resultVars['TokenKey']; $resp = $TokenKey; } else { $resp = false; } } } return $resp; } 
/** * executes the main method. * * @param postData[] $postData array of json data * @param string $url url * @param string $token token string * @return string Indicates the curl execute result */


private function execute($postData, $url, $token){ $postString = json_encode($postData); $ch = curl_init($url); curl_setopt($ch, CURLOPT_HTTPHEADER, array( 'Content-Type: application/json', 'x-sms-ir-secure-token: '.$token )); curl_setopt($ch, CURLOPT_HEADER, false); curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false); curl_setopt($ch, CURLOPT_POST, count($postString)); curl_setopt($ch, CURLOPT_POSTFIELDS, $postString); $result = curl_exec($ch); curl_close($ch); return $result; } } 


 
 function PostCURL($method, $url, $data = false) { $curl = curl_init(); switch ($method) { case "POST": curl_setopt($curl, CURLOPT_POST, 1); if ($data) curl_setopt($curl, CURLOPT_POSTFIELDS, $data); break; case "PUT": curl_setopt($curl, CURLOPT_PUT, 1); break; default: if ($data) $url = sprintf("%s?%s", $url, http_build_query($data)); } 
  curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC); curl_setopt($curl, CURLOPT_USERPWD, "username:password"); curl_setopt($curl, CURLOPT_URL, $url); curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); $result = curl_exec($curl); curl_close($curl); return $result; }


?>