<?php


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
			));
			
	$_SESSION["product"] = $json;
	echo $_SESSION["product"];
	
	
}
else{


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
			));
			
			
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

			));
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
				

			));
		
	$_SESSION["product2"] = $json;
	echo $_SESSION["product2"];
		
		break;
		
		
}
?>