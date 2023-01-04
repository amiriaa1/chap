<?php

function randomPassword() {
    $alphabet = 'abcdefghijklmnopqrstuvwxyz1234567890';
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < 20; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); //turn the array into a string
}
include_once('main.php');
switch($_REQUEST['op'])
{
	
	
	
		
		case "cioice":
		
		
		$soalposit= $_REQUEST['soalposit'];
		$idsoal= $_REQUEST['idsoal'];
		$btn= $_REQUEST['btn'];
		$farijavab= $_REQUEST['farijavab'];
		$fprice= $_REQUEST['price'];

if($soalposit==1)
{
	session_start();
$json=json_encode(array(
				"statusCode"=>200,
				"listprice"=>$fprice,
				 "fgt" => [
[
				"soalposit"=>$soalposit,
				"idsoal"=>$idsoal,
				"btn"=>$btn,
				"farijavab"=>$farijavab,
				"fprice"=>$fprice,
				]
				]
			),JSON_UNESCAPED_UNICODE);
			
	$_SESSION["product"] = $json;
	echo $_SESSION["product"];
	
	
}
if($soalposit==2){


$fgt2 = json_decode($_SESSION["product"],true);

$soalposit1= $fgt2['fgt']['0']['soalposit'];
$idsoal1= $fgt2['fgt']['0']['idsoal'];
$btn1= $fgt2['fgt']['0']['btn'];
$farijavab1= $fgt2['fgt']['0']['farijavab'];
$fprice1= $fgt2['fgt']['0']['fprice'];

$listprice=$fprice1+$fprice;

$json=json_encode(array(
				"statusCode"=>200,
				"listprice"=>$listprice,
				 "fgt" => [
 [
				"soalposit"=>$soalposit1,
				"idsoal"=>$idsoal1,
				"btn"=>$btn1,
				"farijavab"=>$farijavab1,
				"fprice"=>$fprice1,
				],
				[
				"soalposit"=>$soalposit,
				"idsoal"=>$idsoal,
				"btn"=>$btn,
				"farijavab"=>$farijavab,
				"fprice"=>$fprice,
				]
				
				]
			),JSON_UNESCAPED_UNICODE);
			
			
$_SESSION["product"] = $json;
	echo $_SESSION["product"];

}
if($soalposit==3){


$fgt2 = json_decode($_SESSION["product"],true);

$soalposit1= $fgt2['fgt']['0']['soalposit'];
$idsoal1= $fgt2['fgt']['0']['idsoal'];
$btn1= $fgt2['fgt']['0']['btn'];
$farijavab1= $fgt2['fgt']['0']['farijavab'];
$fprice1= $fgt2['fgt']['0']['fprice'];

$soalposit2= $fgt2['fgt']['1']['soalposit'];
$idsoal2= $fgt2['fgt']['1']['idsoal'];
$btn2= $fgt2['fgt']['1']['btn'];
$farijavab2= $fgt2['fgt']['1']['farijavab'];
$fprice2= $fgt2['fgt']['1']['fprice'];


$listprice=$fprice1+$fprice;

$json=json_encode(array(
				"statusCode"=>200,
				"listprice"=>$listprice,
				 "fgt" => [
 [
				"soalposit"=>$soalposit1,
				"idsoal"=>$idsoal1,
				"btn"=>$btn1,
				"farijavab"=>$farijavab1,
				"fprice"=>$fprice1,
				],
				 [
				"soalposit"=>$soalposit2,
				"idsoal"=>$idsoal2,
				"btn"=>$btn2,
				"farijavab"=>$farijavab2,
				"fprice"=>$fprice2,
				],
				[
				"soalposit"=>$soalposit,
				"idsoal"=>$idsoal,
				"btn"=>$btn,
				"farijavab"=>$farijavab,
				"fprice"=>$fprice,
				]
				
				]
			),JSON_UNESCAPED_UNICODE);
			
			
$_SESSION["product"] = $json;
	echo $_SESSION["product"];

}



	
		break;
		
		
		
		
		case "final":
		
		
		$value= $_REQUEST['x'];
		$fgt2 = json_decode($_SESSION["product"],true);
		
		$listprice = $fgt2['listprice'];
		
		 $cooin=count($fgt2['fgt']);
$soalposit1= $fgt2['fgt']['1']['soalposit'];

		 if(!$cooin==0){
			 
			$fglprice1 = $listprice * $value ;
			$fglprice2 = $listprice * $fglprice1 ;
			$fglprice3 = $listprice * $fglprice2 ;
			$fglprice4 = $listprice * $fglprice3 ;
			echo json_encode(array(
				"statusCode"=>200,
				"foridoro"=>$fglprice1,
				"doroghyrfori"=>$fglprice2,
				"yeroghyrfori"=>$fglprice3,
				"foriyero"=>$fglprice4

			),JSON_UNESCAPED_UNICODE);
			}
			else{echo'no';}
			
			
		break;
		
		case "basket":
		$finalprice= $_REQUEST['x'];
		$btn3farsi= $_REQUEST['y'];
		session_start();
		$json=json_encode(array(
				"statusCode"=>200,
				"finalprice"=>$finalprice,
				"btn3farsi"=>$btn3farsi
				

			),JSON_UNESCAPED_UNICODE);
		
	$_SESSION["product2"] = $json;
	echo $_SESSION["product2"];
		
		break;
		
		case "shop_list":
		$productid= $_REQUEST['x'];
		
		$product2=$_SESSION["product2"];
		$product=$_SESSION["product"];
		
		
		$fgt2 = json_decode($_SESSION["product2"],true);
		$amount=$fgt2["finalprice"];
		$fee = new ManageFees();
		$acomment="submit by user";
		$state='1';
		
		$unid=randomPassword();
		if($fgt2["finalprice"]==''){
			echo json_encode(array(
				"statusCode"=>210,
				"state"=>"0"
				

			),JSON_UNESCAPED_UNICODE);
			exit;
		}
		$counttttt = $fee->Addshoplist($productid,$uusername,$amount,$product,$product2,$acomment,$state,$unid);
		
		if($counttttt==1){
			
			echo json_encode(array(
				"statusCode"=>200,
				"state"=>"1",
				"url"=>'step2?unid='.$unid.'',
				"unid"=>$unid
				

			),JSON_UNESCAPED_UNICODE);
			
		}
		break;
		case "send_getway":
		
		

		$addr= $_REQUEST['addr'];
		$unid= $_REQUEST['unid'];

		
		$json=json_encode(array(
				"addr"=>$addr
				),JSON_UNESCAPED_UNICODE);
				
				

			
			$fee = new ManageFees();
			$counttttt = $fee->Updateshoplist($json,$unid);
			
			if($counttttt==1){
			
			echo json_encode(array(
				"statusCode"=>200,
				"state"=>"1",
				"url"=>'target?GS='.$unid.'',
				"unid"=>$unid
				

			),JSON_UNESCAPED_UNICODE);
			
		}
			
		break;
		
}
?>