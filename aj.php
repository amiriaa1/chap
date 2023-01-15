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
		$idproduct= $_REQUEST['idproduct'];
		$farijavab= $_REQUEST['farijavab'];

if($soalposit==1)
{
	$soalaval=$farijavab;

	$fee = new ManageFees();
	$btnsolcount = $fee->Getsol1fromsol2($idproduct,$soalaval);
	$btnsolcount2 = $fee->Getsol1fromsol2counts($idproduct,$soalaval);

	if($btnsolcount2==1){$btnsazi='<button name="soal2" id="soal2" value="'.$btnsolcount['0']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['0']['sol2'].'</button>';}
	if($btnsolcount2==2){$btnsazi='<button name="soal2" id="soal2" value="'.$btnsolcount['0']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['0']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['1']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['1']['sol2'].'</button>';}
	if($btnsolcount2==3){$btnsazi='<button name="soal2" id="soal2" value="'.$btnsolcount['0']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['0']['sol2'].'</button>';}
	if($btnsolcount2==4){$btnsazi='<button name="soal2" id="soal2" value="'.$btnsolcount['0']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['0']['sol2'].'</button>';}

	session_start();
$json=json_encode(array(
				"statusCode"=>200,
				"backbtn1"=>$btnsazi,
				"html"=>'<div name="ttty" id="ttty"><div class="category-filter"><div class="category-filter-box"><div class="category-filter-box-title"><h4 class="fw-bold">ddda</h4></div><div class="category-filter-box-desc"><div class="form-group form-check"><div name="content2" id="content2"></div><div name="content3" id="content3"></div></div></div></div></div></div>',
				 "fgt" => [
[
				"soalposit"=>$soalposit,
				"idproduct"=>$idproduct,
				"farijavab"=>$farijavab,
				]
				]
			),JSON_UNESCAPED_UNICODE);
			
	$_SESSION["product"] = $json;
	echo $_SESSION["product"];
	
	
}



	
		break;
		
	
		case "cioice2":
			
		$soalposit= $_REQUEST['soalposit'];
		$idproduct= $_REQUEST['idproduct'];
		$farijavab= $_REQUEST['farijavab'];
		
		if($soalposit==2){
$fgt2 = json_decode($_SESSION["product"],true);
$soalaval= $fgt2['fgt']['0']['farijavab'];
      $soalaval2=$farijavab;

	$fee = new ManageFees();
	$btnsolcount = $fee->Getsol1fromsol3($idproduct,$soalaval,$soalaval2);
	$btnsolcount2 = $fee->Getsol1fromsol3counts($idproduct,$soalaval,$soalaval2);
	
	if($btnsolcount2==1){$btnsazi2='<button name="soal3" id="soal3" value="'.$btnsolcount['0']['sol3'].'-'.$idproduct.'-3"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp3(this)">'.$btnsolcount['0']['sol3'].'</button>';}
	if($btnsolcount2==2){$btnsazi2='<button name="soal3" id="soal3" value="'.$btnsolcount['0']['sol3'].'-'.$idproduct.'-3"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp3(this)">'.$btnsolcount['0']['sol3'].'</button><button name="tty" id="tty" value="'.$btnsolcount['1']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp3(this)">'.$btnsolcount['1']['sol2'].'</button>';}
	if($btnsolcount2==3){$btnsazi2='<button name="soal3" id="soal3" value="'.$btnsolcount['0']['sol3'].'-'.$idproduct.'-3"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp3(this)">'.$btnsolcount['0']['sol3'].'</button>';}
	if($btnsolcount2==4){$btnsazi2='<button name="soal3" id="soal3" value="'.$btnsolcount['0']['sol3'].'-'.$idproduct.'-3"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp3(this)">'.$btnsolcount['0']['sol3'].'</button>';}



$soalposit1= $fgt2['fgt']['0']['soalposit'];
$idproduct1= $fgt2['fgt']['0']['idproduct'];
$farijavab1= $fgt2['fgt']['0']['farijavab'];


$json=json_encode(array(
				"statusCode"=>200,
				"backbtn1"=>$btnsazi2,
				"html"=>'<div name="ttty" id="ttty"><div class="category-filter"><div class="category-filter-box"><div class="category-filter-box-title"><h4 class="fw-bold">ddda</h4></div><div class="category-filter-box-desc"><div class="form-group form-check"><div name="content4" id="content4"></div></div></div></div></div></div>',
				 "fgt" => [
 [
				"soalposit"=>$soalposit1,
				"idproduct"=>$idproduct1,
				"farijavab"=>$farijavab1,
				],
				[
				"soalposit"=>$soalposit,
				"idproduct"=>$idproduct,
				"farijavab"=>$farijavab,
				]
				
				]
			),JSON_UNESCAPED_UNICODE);
			
			
$_SESSION["product"] = $json;
	echo $_SESSION["product"];

}
		
		
		break;
		
		
		
		case "cioice3":
		
		$soalposit= $_REQUEST['soalposit'];
		$idproduct= $_REQUEST['idproduct'];
		$farijavab= $_REQUEST['farijavab'];
		$fgt2 = json_decode($_SESSION["product"],true);
$soalaval= $fgt2['fgt']['0']['farijavab'];
$soalaval2= $fgt2['fgt']['1']['farijavab'];
      $soalaval3=$farijavab;

	$fee = new ManageFees();
	$btnsolcount = $fee->Getsol1fromsol4($idproduct,$soalaval,$soalaval2,$soalaval3);
	$btnsolcount2 = $fee->Getsol1fromsol4counts($idproduct,$soalaval,$soalaval2,$soalaval3);
	
if($btnsolcount['0']['fori']==1 & $btnsolcount['0']['yero']==1){
	$pop1_price=$btnsolcount['0']['price_fori_yero'];
	$pop1='<button name="price1" id="price1" value="فوری یه رو-'.$idproduct.'-99-'.$pop1_price.'"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp4(this)">فوری یه رو--'.$pop1_price.'تومان</button>';}


if($btnsolcount['0']['no_fori']==1 & $btnsolcount['0']['yero']==1){
	$pop2_price=$btnsolcount['0']['price_no_fori_yero'];
	$pop2='<button name="price2" id="price2" value="غیر فوری یه رو-'.$idproduct.'-99-'.$pop2_price.'"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp4(this)">غیر فوری یه رو--'.$pop2_price.'تومان</button>';}

if($btnsolcount['0']['fori']==1 & $btnsolcount['0']['doro']==1){
	$pop3_price=$btnsolcount['0']['price_fori_doro'];
	$pop3='<button name="price3" id="price3" value="فوری دو رو-'.$idproduct.'-99-'.$pop3_price.'"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp4(this)">فوری دو رو--'.$pop3_price.'تومان</button>';}


if($btnsolcount['0']['no_fori']==1 & $btnsolcount['0']['doro']==1){
	$pop4_price=$btnsolcount['0']['price_no_fori_doro'];
	$pop4='<button name="price4" id="price4" value="غیر فوری دو رو-'.$idproduct.'-99-'.$pop4_price.'"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp4(this)">غیر فوری دو رو--'.$pop4_price.'تومان</button>';}


	


	
	if($btnsolcount2==1){$btnsazi3='<button name="soal4" id="soal4" value="'.$btnsolcount['0']['sol4'].'-'.$idproduct.'-3"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp3(this)">'.$btnsolcount['0']['sol4'].'</button>';}
	if($btnsolcount2==2){$btnsazi3='<button name="soal4" id="soal4" value="'.$btnsolcount['0']['sol4'].'-'.$idproduct.'-3"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp3(this)">'.$btnsolcount['0']['sol4'].'</button><button name="tty" id="tty" value="'.$btnsolcount['1']['sol4'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp(this)">'.$btnsolcount['1']['sol4'].'</button>';}
	if($btnsolcount2==3){$btnsazi3='<button name="soal4" id="soal4" value="'.$btnsolcount['0']['sol4'].'-'.$idproduct.'-3"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp3(this)">'.$btnsolcount['0']['sol4'].'</button>';}
	if($btnsolcount2==4){$btnsazi3='<button name="soal4" id="soal4" value="'.$btnsolcount['0']['sol4'].'-'.$idproduct.'-3"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp3(this)">'.$btnsolcount['0']['sol4'].'</button>';}
if($btnsolcount2==1 & $btnsolcount['0']['sol4']==""){$btnsazi3=0;}
$fgt2 = json_decode($_SESSION["product"],true);

$soalposit1= $fgt2['fgt']['0']['soalposit'];
$idproduct1= $fgt2['fgt']['0']['idproduct'];
$farijavab1= $fgt2['fgt']['0']['farijavab'];


$soalposit2= $fgt2['fgt']['1']['soalposit'];
$idproduct2= $fgt2['fgt']['1']['idproduct'];
$farijavab2= $fgt2['fgt']['1']['farijavab'];

$json=json_encode(array(
				"statusCode"=>200,
				"backbtn1"=>$btnsazi3,
				"pop1"=>$pop1,
				"pop2"=>$pop2,
				"pop3"=>$pop3,
				"pop4"=>$pop4,
				"pop1_price"=>$pop1_price,
				"pop2_price"=>$pop2_price,
				"pop3_price"=>$pop3_price,
				"pop4_price"=>$pop4_price,
				"html"=>'<div name="ttty" id="ttty"><div class="category-filter"><div class="category-filter-box"><div class="category-filter-box-title"><h4 class="fw-bold">ddda</h4></div><div class="category-filter-box-desc"><div class="form-group form-check"><div name="content5" id="content5"></div></div></div></div></div></div>',
				 "fgt" => [
 [
				"soalposit"=>$soalposit1,
				"idproduct"=>$idproduct1,
				"farijavab"=>$farijavab1,
				],
				[
				"soalposit"=>$soalposit2,
				"idproduct"=>$idproduct2,
				"farijavab"=>$farijavab2,
				],
				[
				"soalposit"=>$soalposit,
				"idproduct"=>$idproduct,
				"farijavab"=>$farijavab,
				]
				
				]
			),JSON_UNESCAPED_UNICODE);
			
			
$_SESSION["product"] = $json;
	echo $_SESSION["product"];

		
		break;
		
		
		
		case "final":
		
		
		$price1= $_REQUEST['pse1'];
		$price2= $_REQUEST['pse2'];
		$price3= $_REQUEST['pse3'];
		$price4= $_REQUEST['pse4'];
		$val= $_REQUEST['x'];
		
	
$cooin=1;
		 if($cooin==1){
			 
			$fglprice1 = $price1 * $val;
			$fglprice2 = $price2 * $val;
			$fglprice3 = $price3 * $val;
			$fglprice4 = $price4 * $val;
			
			$btn_fglprice1 ='فوری یک رو - '.$fglprice1.' تومان';
			$btn_fglprice2 ='فوری دو رو - '.$fglprice2.' تومان';
			$btn_fglprice3 ='غیر فوری یک رو '.$fglprice3.' تومان';
			$btn_fglprice4 ='غیر فوری دو رو '.$fglprice4.' تومان';
			echo json_encode(array(
				"statusCode"=>200,
				"fori_yero"=>$fglprice1,
				"fori_doro"=>$fglprice2,
				"no_fori_yero"=>$fglprice3,
				"no_fori_doro"=>$fglprice4,
				"btn_fori_yero"=>$btn_fglprice1,
				"btn_fori_doro"=>$btn_fglprice2,
				"btn_no_fori_yero"=>$btn_fglprice3,
				"btn_no_fori_doro"=>$btn_fglprice4

			),JSON_UNESCAPED_UNICODE);
			}
			else{echo'no';}
			
			
		break;
		
		
		
		
		

		case "basket":
		$x= $_REQUEST['x'];
        $name= $_REQUEST['name'];
        $idproduct= $_REQUEST['idproduct'];
        $pricefinal= $_REQUEST['pricefinal'];
          $fglprice1 = $pricefinal * $x;
		session_start();
		$json=json_encode(array(
				"statusCode"=>200,
				"count"=>$x,
                "name"=>$name,
                "idproduct"=>$idproduct,
				"pricefinal"=>$fglprice1
				

			),JSON_UNESCAPED_UNICODE);
		
	$_SESSION["product2"] = $json;
	echo $_SESSION["product2"];
		
		break;
		
		case "shop_list":
		$productid= $_REQUEST['x'];
        $amount= $_REQUEST['y'];
		
		$product2=$_SESSION["product2"];
		$product=$_SESSION["product"];
		
		


		$fee = new ManageFees();
		$acomment="submit by user";
		$state='1';
		
		$unid=randomPassword();
		if($amount==''){
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
				"url"=>'cupfile?unid='.$unid.'',
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