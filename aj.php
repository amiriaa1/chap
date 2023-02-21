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
    $query = "WHERE aid=$idproduct  ORDER BY `nim_product`.`aid` ASC";
    $discountList885999= $fee->Getproductlist($query);
	$btnsolcount = $fee->Getsol1fromsol2($idproduct,$soalaval);
	$btnsolcount2 = $fee->Getsol1fromsol2counts($idproduct,$soalaval);
    $btnsazi=0;
	if($btnsolcount2==1){$btnsazi='<button name="soal2" id="soal2" value="'.$btnsolcount['0']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['0']['sol2'].'</button>';}
	if($btnsolcount2==2){$btnsazi='<button name="soal2" id="soal2" value="'.$btnsolcount['0']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['0']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['1']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['1']['sol2'].'</button>';}
	if($btnsolcount2==3){$btnsazi='<button name="soal2" id="soal2" value="'.$btnsolcount['0']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['0']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['1']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['1']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['2']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['2']['sol2'].'</button>';}
	if($btnsolcount2==4){$btnsazi='<button name="soal2" id="soal2" value="'.$btnsolcount['0']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['0']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['1']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['1']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['2']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['2']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['3']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['3']['sol2'].'</button>';}
    if($btnsolcount2==5){$btnsazi='<button name="soal2" id="soal2" value="'.$btnsolcount['0']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['0']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['1']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['1']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['2']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['2']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['3']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['3']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['4']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['4']['sol2'].'</button>';}
    if($btnsolcount2==6){$btnsazi='<button name="soal2" id="soal2" value="'.$btnsolcount['0']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['0']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['1']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['1']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['2']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['2']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['3']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['3']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['4']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['4']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['5']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['5']['sol2'].'</button>';}
    if($btnsolcount2==7){$btnsazi='<button name="soal2" id="soal2" value="'.$btnsolcount['0']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['0']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['1']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['1']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['2']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['2']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['3']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['3']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['4']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['4']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['5']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['5']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['6']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['6']['sol2'].'</button>';}
    if($btnsolcount2==8){$btnsazi='<button name="soal2" id="soal2" value="'.$btnsolcount['0']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['0']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['1']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['1']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['2']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['2']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['3']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['3']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['4']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['4']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['5']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['5']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['6']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['6']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['7']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['7']['sol2'].'</button>';}
    if($btnsolcount2==9){$btnsazi='<button name="soal2" id="soal2" value="'.$btnsolcount['0']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['0']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['1']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['1']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['2']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['2']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['3']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['3']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['4']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['4']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['5']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['5']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['6']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['6']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['7']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['7']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['8']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['8']['sol2'].'</button>';}
    if($btnsolcount2==10){$btnsazi='<button name="soal2" id="soal2" value="'.$btnsolcount['0']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['0']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['1']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['1']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['2']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['2']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['3']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['3']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['4']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['4']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['5']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['5']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['6']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['6']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['7']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['7']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['8']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['8']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['9']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['9']['sol2'].'</button>';}
    if($btnsolcount2==11){$btnsazi='<button name="soal2" id="soal2" value="'.$btnsolcount['0']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['0']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['1']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['1']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['2']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['2']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['3']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['3']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['4']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['4']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['5']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['5']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['6']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['6']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['7']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['7']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['8']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['8']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['9']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['9']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['10']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['10']['sol2'].'</button>';}
    if($btnsolcount2==12){$btnsazi='<button name="soal2" id="soal2" value="'.$btnsolcount['0']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['0']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['1']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['1']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['2']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['2']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['3']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['3']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['4']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['4']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['5']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['5']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['6']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['6']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['7']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['7']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['8']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['8']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['9']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['9']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['10']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['10']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['11']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['11']['sol2'].'</button>';}
    if($btnsolcount2==13){$btnsazi='<button name="soal2" id="soal2" value="'.$btnsolcount['0']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['0']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['1']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['1']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['2']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['2']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['3']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['3']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['4']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['4']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['5']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['5']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['6']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['6']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['7']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['7']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['8']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['8']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['9']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['9']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['10']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['10']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['11']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['11']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['12']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['12']['sol2'].'</button>';}
    if($btnsolcount2==14){$btnsazi='<button name="soal2" id="soal2" value="'.$btnsolcount['0']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['0']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['1']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['1']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['2']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['2']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['3']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['3']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['4']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['4']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['5']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['5']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['6']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['6']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['7']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['7']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['8']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['8']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['9']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['9']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['10']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['10']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['11']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['11']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['12']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['12']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['13']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['13']['sol2'].'</button>';}
    if($btnsolcount2==15){$btnsazi='<button name="soal2" id="soal2" value="'.$btnsolcount['0']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['0']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['1']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['1']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['2']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['2']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['3']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['3']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['4']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['4']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['5']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['5']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['6']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['6']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['7']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['7']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['8']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['8']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['9']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['9']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['10']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['10']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['11']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['11']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['12']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['12']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['13']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['13']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['14']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['14']['sol2'].'</button>';}
    if($btnsolcount2==16){$btnsazi='<button name="soal2" id="soal2" value="'.$btnsolcount['0']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['0']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['1']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['1']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['2']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['2']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['3']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['3']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['4']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['4']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['5']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['5']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['6']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['6']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['7']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['7']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['8']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['8']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['9']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['9']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['10']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['10']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['11']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['11']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['12']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['12']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['13']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['13']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['14']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['14']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['15']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['15']['sol2'].'</button>';}
    if($btnsolcount2==17){$btnsazi='<button name="soal2" id="soal2" value="'.$btnsolcount['0']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['0']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['1']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['1']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['2']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['2']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['3']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['3']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['4']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['4']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['5']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['5']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['6']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['6']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['7']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['7']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['8']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['8']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['9']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['9']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['10']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['10']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['11']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['11']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['12']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['12']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['13']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['13']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['14']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['14']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['15']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['15']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['16']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['16']['sol2'].'</button>';}
    if($btnsolcount2==18){$btnsazi='<button name="soal2" id="soal2" value="'.$btnsolcount['0']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['0']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['1']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['1']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['2']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['2']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['3']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['3']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['4']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['4']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['5']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['5']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['6']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['6']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['7']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['7']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['8']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['8']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['9']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['9']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['10']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['10']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['11']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['11']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['12']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['12']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['13']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['13']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['14']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['14']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['15']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['15']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['16']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['16']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['17']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['17']['sol2'].'</button>';}
    if($btnsolcount2==19){$btnsazi='<button name="soal2" id="soal2" value="'.$btnsolcount['0']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['0']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['1']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['1']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['2']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['2']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['3']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['3']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['4']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['4']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['5']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['5']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['6']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['6']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['7']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['7']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['8']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['8']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['9']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['9']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['10']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['10']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['11']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['11']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['12']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['12']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['13']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['13']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['14']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['14']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['15']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['15']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['16']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['16']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['17']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['17']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['18']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['18']['sol2'].'</button>';}
    if($btnsolcount2==20){$btnsazi='<button name="soal2" id="soal2" value="'.$btnsolcount['0']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['0']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['1']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['1']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['2']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['2']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['3']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['3']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['4']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['4']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['5']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['5']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['6']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['6']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['7']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['7']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['8']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['8']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['9']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['9']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['10']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['10']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['11']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['11']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['12']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['12']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['13']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['13']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['14']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['14']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['15']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['15']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['16']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['16']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['17']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['17']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['18']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['18']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['19']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['19']['sol2'].'</button>';}
    if($btnsolcount2==21){$btnsazi='<button name="soal2" id="soal2" value="'.$btnsolcount['0']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['0']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['1']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['1']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['2']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['2']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['3']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['3']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['4']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['4']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['5']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['5']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['6']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['6']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['7']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['7']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['8']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['8']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['9']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['9']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['10']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['10']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['11']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['11']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['12']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['12']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['13']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['13']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['14']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['14']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['15']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['15']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['16']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['16']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['17']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['17']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['18']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['18']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['19']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['19']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['20']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['20']['sol2'].'</button>';}
    if($btnsolcount2==22){$btnsazi='<button name="soal2" id="soal2" value="'.$btnsolcount['0']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['0']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['1']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['1']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['2']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['2']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['3']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['3']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['4']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['4']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['5']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['5']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['6']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['6']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['7']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['7']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['8']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['8']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['9']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['9']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['10']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['10']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['11']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['11']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['12']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['12']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['13']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['13']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['14']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['14']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['15']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['15']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['16']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['16']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['17']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['17']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['18']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['18']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['19']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['19']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['20']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['20']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['21']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['21']['sol2'].'</button>';}
    if($btnsolcount2==23){$btnsazi='<button name="soal2" id="soal2" value="'.$btnsolcount['0']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['0']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['1']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['1']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['2']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['2']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['3']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['3']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['4']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['4']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['5']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['5']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['6']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['6']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['7']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['7']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['8']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['8']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['9']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['9']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['10']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['10']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['11']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['11']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['12']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['12']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['13']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['13']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['14']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['14']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['15']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['15']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['16']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['16']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['17']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['17']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['18']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['18']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['19']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['19']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['20']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['20']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['21']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['21']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['22']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['22']['sol2'].'</button>';}
    if($btnsolcount2==24){$btnsazi='<button name="soal2" id="soal2" value="'.$btnsolcount['0']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['0']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['1']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['1']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['2']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['2']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['3']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['3']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['4']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['4']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['5']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['5']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['6']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['6']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['7']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['7']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['8']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['8']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['9']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['9']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['10']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['10']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['11']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['11']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['12']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['12']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['13']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['13']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['14']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['14']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['15']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['15']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['16']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['16']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['17']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['17']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['18']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['18']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['19']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['19']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['20']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['20']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['21']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['21']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['22']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['22']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['23']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['23']['sol2'].'</button>';}
    if($btnsolcount2==25){$btnsazi='<button name="soal2" id="soal2" value="'.$btnsolcount['0']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['0']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['1']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['1']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['2']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['2']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['3']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['3']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['4']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['4']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['5']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['5']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['6']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['6']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['7']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['7']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['8']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['8']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['9']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['9']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['10']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['10']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['11']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['11']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['12']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['12']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['13']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['13']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['14']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['14']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['15']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['15']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['16']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['16']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['17']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['17']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['18']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['18']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['19']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['19']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['20']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['20']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['21']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['21']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['22']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['22']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['23']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['23']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['24']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['24']['sol2'].'</button>';}
    if($btnsolcount2==26){$btnsazi='<button name="soal2" id="soal2" value="'.$btnsolcount['0']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['0']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['1']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['1']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['2']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['2']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['3']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['3']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['4']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['4']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['5']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['5']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['6']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['6']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['7']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['7']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['8']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['8']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['9']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['9']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['10']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['10']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['11']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['11']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['12']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['12']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['13']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['13']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['14']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['14']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['15']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['15']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['16']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['16']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['17']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['17']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['18']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['18']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['19']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['19']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['20']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['20']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['21']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['21']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['22']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['22']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['23']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['23']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['24']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['24']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['25']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['25']['sol2'].'</button>';}
    if($btnsolcount2==27){$btnsazi='<button name="soal2" id="soal2" value="'.$btnsolcount['0']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['0']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['1']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['1']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['2']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['2']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['3']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['3']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['4']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['4']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['5']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['5']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['6']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['6']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['7']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['7']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['8']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['8']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['9']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['9']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['10']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['10']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['11']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['11']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['12']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['12']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['13']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['13']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['14']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['14']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['15']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['15']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['16']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['16']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['17']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['17']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['18']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['18']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['19']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['19']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['20']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['20']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['21']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['21']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['22']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['22']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['23']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['23']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['24']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['24']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['25']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['25']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['26']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['26']['sol2'].'</button>';}
    if($btnsolcount2==28){$btnsazi='<button name="soal2" id="soal2" value="'.$btnsolcount['0']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['0']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['1']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['1']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['2']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['2']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['3']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['3']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['4']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['4']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['5']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['5']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['6']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['6']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['7']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['7']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['8']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['8']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['9']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['9']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['10']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['10']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['11']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['11']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['12']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['12']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['13']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['13']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['14']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['14']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['15']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['15']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['16']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['16']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['17']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['17']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['18']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['18']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['19']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['19']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['20']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['20']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['21']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['21']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['22']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['22']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['23']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['23']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['24']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['24']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['25']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['25']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['26']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['26']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['27']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['27']['sol2'].'</button>';}
    if($btnsolcount2==29){$btnsazi='<button name="soal2" id="soal2" value="'.$btnsolcount['0']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['0']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['1']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['1']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['2']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['2']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['3']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['3']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['4']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['4']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['5']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['5']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['6']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['6']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['7']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['7']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['8']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['8']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['9']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['9']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['10']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['10']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['11']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['11']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['12']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['12']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['13']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['13']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['14']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['14']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['15']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['15']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['16']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['16']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['17']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['17']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['18']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['18']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['19']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['19']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['20']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['20']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['21']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['21']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['22']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['22']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['23']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['23']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['24']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['24']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['25']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['25']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['26']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['26']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['27']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['27']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['28']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['28']['sol2'].'</button>';}
    if($btnsolcount2==30){$btnsazi='<button name="soal2" id="soal2" value="'.$btnsolcount['0']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['0']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['1']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['1']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['2']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['2']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['3']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['3']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['4']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['4']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['5']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['5']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['6']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['6']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['7']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['7']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['8']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['8']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['9']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['9']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['10']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['10']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['11']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['11']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['12']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['12']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['13']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['13']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['14']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['14']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['15']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['15']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['16']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['16']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['17']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['17']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['18']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['18']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['19']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['19']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['20']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['20']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['21']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['21']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['22']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['22']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['23']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['23']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['24']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['24']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['25']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['25']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['26']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['26']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['27']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['27']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['28']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['28']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['29']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['29']['sol2'].'</button>';}
    if($btnsolcount2==31){$btnsazi='<button name="soal2" id="soal2" value="'.$btnsolcount['0']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['0']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['1']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['1']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['2']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['2']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['3']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['3']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['4']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['4']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['5']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['5']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['6']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['6']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['7']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['7']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['8']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['8']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['9']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['9']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['10']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['10']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['11']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['11']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['12']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['12']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['13']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['13']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['14']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['14']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['15']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['15']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['16']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['16']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['17']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['17']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['18']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['18']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['19']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['19']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['20']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['20']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['21']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['21']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['22']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['22']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['23']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['23']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['24']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['24']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['25']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['25']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['26']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['26']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['27']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['27']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['28']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['28']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['29']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['29']['sol2'].'</button><button name="soal2" id="soal2" value="'.$btnsolcount['30']['sol2'].'-'.$idproduct.'-2"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp1(this)">'.$btnsolcount['30']['sol2'].'</button>';}

    session_start();
$json=json_encode(array(
				"statusCode"=>200,
				"backbtn1"=>$btnsazi,
				"html"=>'<div name="ttty" id="ttty"><div class="category-filter"><div class="category-filter-box"><div class="category-filter-box-title"><h4 class="fw-bold">'.$discountList885999["0"]["qsoal1"].'</h4></div><div class="category-filter-box-desc"><div class="form-group form-check"><div name="content2" id="content2"></div><div name="content3" id="content3"></div></div></div></div></div></div>',
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
            $type= $_REQUEST['type'];
		$soalposit= $_REQUEST['soalposit'];
		$idproduct= $_REQUEST['idproduct'];
		$farijavab= $_REQUEST['farijavab'];
		
		if($soalposit==2){
$fgt2 = json_decode($_SESSION["product"],true);
$soalaval= $fgt2['fgt']['0']['farijavab'];
      $soalaval2=$farijavab;

	$fee = new ManageFees();
            $query = "WHERE aid=$idproduct  ORDER BY `nim_product`.`aid` ASC";
            $discountList885999= $fee->Getproductlist($query);
	$btnsolcount = $fee->Getsol1fromsol3($idproduct,$soalaval,$soalaval2);
	$btnsolcount2 = $fee->Getsol1fromsol3counts($idproduct,$soalaval,$soalaval2);


	if($btnsolcount2==1){$btnsazi2='<button name="soal3" id="soal3" value="'.$btnsolcount['0']['sol3'].'-'.$idproduct.'-3"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp3(this)">'.$btnsolcount['0']['sol3'].'</button>';}
	if($btnsolcount2==2){$btnsazi2='<button name="soal3" id="soal3" value="'.$btnsolcount['0']['sol3'].'-'.$idproduct.'-3"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp3(this)">'.$btnsolcount['0']['sol3'].'</button><button name="soal3" id="soal3" value="'.$btnsolcount['1']['sol2'].'-'.$idproduct.'-3"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp3(this)">'.$btnsolcount['1']['sol2'].'</button>';}
	if($btnsolcount2==3){$btnsazi2='<button name="soal3" id="soal3" value="'.$btnsolcount['0']['sol3'].'-'.$idproduct.'-3"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp3(this)">'.$btnsolcount['0']['sol3'].'</button><button name="soal3" id="soal3" value="'.$btnsolcount['1']['sol3'].'-'.$idproduct.'-3"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp3(this)">'.$btnsolcount['1']['sol3'].'</button><button name="soal3" id="soal3" value="'.$btnsolcount['2']['sol3'].'-'.$idproduct.'-3"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp3(this)">'.$btnsolcount['2']['sol3'].'</button>';}
	if($btnsolcount2==4){$btnsazi2='<button name="soal3" id="soal3" value="'.$btnsolcount['0']['sol3'].'-'.$idproduct.'-3"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp3(this)">'.$btnsolcount['0']['sol3'].'</button><button name="soal3" id="soal3" value="'.$btnsolcount['1']['sol3'].'-'.$idproduct.'-3"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp3(this)">'.$btnsolcount['1']['sol3'].'</button><button name="soal3" id="soal3" value="'.$btnsolcount['2']['sol3'].'-'.$idproduct.'-3"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp3(this)">'.$btnsolcount['2']['sol3'].'</button><button name="soal3" id="soal3" value="'.$btnsolcount['3']['sol3'].'-'.$idproduct.'-3"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp3(this)">'.$btnsolcount['3']['sol3'].'</button>';}
            if($btnsolcount['0']['sol3']==""){


                $isfinalsoal=1;
                $btnsazi2=0;


                if($btnsolcount['0']['fori']==1 & $btnsolcount['0']['doro']==1){

                    $pop1matn=$btnsolcount['0']['deliver_time_fori'];
                    $pop1_price=$btnsolcount['0']['price_fori_doro'];

                    if($type==1){
                        $pop1_price= $pop1_price * 1000;
                    }
                    $pop1_price_change=number_format($pop1_price,0,'.',',');
                    $pop1='<button name="price1" id="price1" value="فوری دو رو-'.$idproduct.'-99-'.$pop1_price.'"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp4(this)">فوری دو رو--'.$pop1_price_change.'تومان</button>';}


                if($btnsolcount['0']['fori']==1 & $btnsolcount['0']['yero']==1){
                    $pop1matn=$btnsolcount['0']['deliver_time_fori'];
                    $pop2_price=$btnsolcount['0']['price_fori_yero'];
                    if($type==1){
                        $pop2_price= $pop2_price * 1000;
                    }
                    $pop2_price_change=number_format($pop2_price,0,'.',',');
                    $pop2='<button name="price2" id="price2" value="فوری یک رو-'.$idproduct.'-99-'.$pop2_price.'"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp4(this)">فوری یک رو--'.$pop2_price_change.'تومان</button>';}

                if($btnsolcount['0']['no_fori']==1 & $btnsolcount['0']['doro']==1){
                    $pop2matn=$btnsolcount['0']['deliver_time_no_fori'];
                    $pop3_price=$btnsolcount['0']['price_no_fori_doro'];
                    if($type==1){
                        $pop3_price= $pop3_price * 1000;
                    }
                    $pop3_price_change=number_format($pop3_price,0,'.',',');
                    $pop3='<button name="price3" id="price3" value="عادی دو رو-'.$idproduct.'-99-'.$pop3_price.'"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp4(this)">عادی دو رو--'.$pop3_price_change.'تومان</button>';}


                if($btnsolcount['0']['no_fori']==1 & $btnsolcount['0']['yero']==1){
                    $pop2matn=$btnsolcount['0']['deliver_time_no_fori'];
                    $pop4_price=$btnsolcount['0']['price_no_fori_yero'];
                    if($type==1){
                        $pop4_price= $pop4_price * 1000;
                    }
                    $pop4_price_change=number_format($pop4_price,0,'.',',');
                    $pop4='<button name="price4" id="price4" value="عادی یک رو-'.$idproduct.'-99-'.$pop4_price.'"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp4(this)">عادی یک رو--'.$pop4_price_change.'تومان</button>';}

                if($pop1=="" or $pop1==NULL){$pop1="";}
                if($pop2=="" or $pop2==NULL){$pop2="";}
                if($pop3=="" or $pop3==NULL){$pop3="";}
                if($pop4=="" or $pop4==NULL){$pop4="";}
            }
            else{$isfinalsoal=0;}


$soalposit1= $fgt2['fgt']['0']['soalposit'];
$idproduct1= $fgt2['fgt']['0']['idproduct'];
$farijavab1= $fgt2['fgt']['0']['farijavab'];


$json=json_encode(array(
				"statusCode"=>200,
				"backbtn1"=>$btnsazi2,
                "isfinal"=>$isfinalsoal,
                "pop1"=>$pop1,
                "pop2"=>$pop2,
                "pop3"=>$pop3,
                "pop4"=>$pop4,
                "pop1matn"=>$pop1matn,
                "pop2matn"=>$pop2matn,
                "pop1_price"=>$pop1_price,
                "pop2_price"=>$pop2_price,
                "pop3_price"=>$pop3_price,
                "pop4_price"=>$pop4_price,
				"html"=>'<div name="ttty" id="ttty"><div class="category-filter"><div class="category-filter-box"><div class="category-filter-box-title"><h4 class="fw-bold">'.$discountList885999["0"]["qsoal3"].'</h4></div><div class="category-filter-box-desc"><div class="form-group form-check"><div name="content4" id="content4"></div></div></div></div></div></div>',
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
            $query = "WHERE aid=$idproduct  ORDER BY `nim_product`.`aid` ASC";
            $discountList885999= $fee->Getproductlist($query);
	$btnsolcount = $fee->Getsol1fromsol4($idproduct,$soalaval,$soalaval2,$soalaval3);
	$btnsolcount2 = $fee->Getsol1fromsol4counts($idproduct,$soalaval,$soalaval2,$soalaval3);
            $pop1matn=$btnsolcount['0']['deliver_time_fori'];
            $pop2matn=$btnsolcount['0']['deliver_time_no_fori'];

            if($btnsolcount['0']['fori']==1 & $btnsolcount['0']['doro']==1){
                $pop1matn=$btnsolcount['0']['deliver_time_fori'];
                $pop1_price=$btnsolcount['0']['price_fori_doro'];
                $pop1='<button name="price1" id="price1" value="فوری دو رو-'.$idproduct.'-99-'.$pop1_price.'"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp4(this)">فوری دو رو--'.$pop1_price.'تومان</button>';}


            if($btnsolcount['0']['fori']==1 & $btnsolcount['0']['yero']==1){
                $pop1matn=$btnsolcount['0']['deliver_time_fori'];
                $pop2_price=$btnsolcount['0']['price_fori_yero'];
                $pop2='<button name="price2" id="price2" value="فوری یک رو-'.$idproduct.'-99-'.$pop2_price.'"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp4(this)">فوری یک رو--'.$pop2_price.'تومان</button>';}

            if($btnsolcount['0']['no_fori']==1 & $btnsolcount['0']['doro']==1){
                $pop2matn=$btnsolcount['0']['deliver_time_no_fori'];
                $pop3_price=$btnsolcount['0']['price_no_fori_doro'];
                $pop3='<button name="price3" id="price3" value="عادی دو رو-'.$idproduct.'-99-'.$pop3_price.'"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp4(this)">عادی دو رو--'.$pop3_price.'تومان</button>';}


            if($btnsolcount['0']['no_fori']==1 & $btnsolcount['0']['yero']==1){
                $pop2matn=$btnsolcount['0']['deliver_time_no_fori'];
                $pop4_price=$btnsolcount['0']['price_no_fori_yero'];
                $pop4='<button name="price4" id="price4" value="عادی یک رو-'.$idproduct.'-99-'.$pop4_price.'"  type="button" class="btn btn-outline btn-rounded mb-5" onclick="showStudentProp4(this)">عادی یک رو--'.$pop4_price.'تومان</button>';}




            if($pop1=="" or $pop1==NULL){$pop1="";}
    if($pop2=="" or $pop2==NULL){$pop2="";}
    if($pop3=="" or $pop3==NULL){$pop3="";}
    if($pop4=="" or $pop4==NULL){$pop4="";}
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
                "pop1matn"=>$pop1matn,
                "pop2matn"=>$pop2matn,
				"pop1_price"=>$pop1_price,
				"pop2_price"=>$pop2_price,
				"pop3_price"=>$pop3_price,
				"pop4_price"=>$pop4_price,
				"html"=>'<div name="ttty" id="ttty"><div class="category-filter"><div class="category-filter-box"><div class="category-filter-box-title"><h4 class="fw-bold">'.$discountList885999["0"]["qsoal3"].'</h4></div><div class="category-filter-box-desc"><div class="form-group form-check"><div name="content5" id="content5"></div></div></div></div></div></div>',
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
        $type= $_REQUEST['type'];
		$price1= $_REQUEST['pse1'];
		$price2= $_REQUEST['pse2'];
		$price3= $_REQUEST['pse3'];
		$price4= $_REQUEST['pse4'];
		$val= $_REQUEST['x'];
		
	
$cooin=1;
		 if($cooin==1){
             if ($type==1) {
                 $price1 = $price1 / 1000;
                 $price2 = $price2 / 1000;
                 $price3 = $price3 / 1000;
                 $price4 = $price4 / 1000;
             }
			$fglprice1 = $price1  * $val;
			$fglprice2 = $price2 * $val;
			$fglprice3 = $price3 * $val;
			$fglprice4 = $price4 * $val;
             $fglprice1_change=number_format($fglprice1,0,'.',',');
             $fglprice2_change=number_format($fglprice2,0,'.',',');
             $fglprice3_change=number_format($fglprice3,0,'.',',');
             $fglprice4_change=number_format($fglprice4,0,'.',',');
			$btn_fglprice1 ='فوری یک رو - '.$fglprice1_change.' تومان';
			$btn_fglprice2 ='فوری دو رو - '.$fglprice2_change.' تومان';
			$btn_fglprice3 ='عادی یک رو '.$fglprice3_change.' تومان';
			$btn_fglprice4 ='عادی دو رو '.$fglprice4_change.' تومان';
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
        $type= $_REQUEST['type'];
        $name= $_REQUEST['name'];
        $idproduct= $_REQUEST['idproduct'];
        $pricefinal= $_REQUEST['pricefinal'];
            if($type==1){

                $pricefinal=$pricefinal / 1000;
            }
          $fglprice1 = $pricefinal * $x;
            $fglprice1_change=number_format($fglprice1,0,'.',',');
		session_start();
		$json=json_encode(array(
				"statusCode"=>200,
				"count"=>$x,
                "name"=>$name,
                "idproduct"=>$idproduct,
            "pricefinal_show"=>$fglprice1_change,
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
		if($amount=='تنوع را انتخاب کنید'){
			echo json_encode(array(
				"statusCode"=>210,
				"state"=>"0"


			),JSON_UNESCAPED_UNICODE);
			exit;
		}
		$counttttt = $fee->Addshoplistbasket($productid,$uusername,$amount,$product,$product2,$unid);
		

            if($counttttt==1){

                echo json_encode(array(
                    "statusCode"=>200,
                    "state"=>"1",
                    "url"=>'cupfile?unid='.$unid.'',
                    "unid"=>$unid


                ),JSON_UNESCAPED_UNICODE);

            }
            else{
                echo'problem';

            }

		break;


    case "shop_list2":
        $productid= $_REQUEST['x'];
        $amount= $_REQUEST['y'];

        $product2=$_SESSION["product2"];
        $product="shop_pro";




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
        $counttttt = $fee->Addshoplistbasket($productid,$uusername,$amount,$product,$product2,$unid);

        if($counttttt==1){

            echo json_encode(array(
                "statusCode"=>200,
                "state"=>"1",
                "url"=>'basket',
                "unid"=>$unid


            ),JSON_UNESCAPED_UNICODE);

        }


        break;

		case "send_getway":


        $getway= $_REQUEST['getway'];
		$addr= $_REQUEST['addr'];
		$unid= $_REQUEST['unid'];

		
		$json=json_encode(array(
				"addr"=>$addr
				),JSON_UNESCAPED_UNICODE);
				
				

			
			$fee = new ManageFees();
			$counttttt = $fee->Updateshoplist($json,$unid);
            $counttttt2 = $fee->deletebasketallitem($uusername);
			if($counttttt==1){
			if ($getway=="paypack"){
			echo json_encode(array(
				"statusCode"=>200,
				"state"=>"1",
				"url"=>'target?GS='.$unid.'',
				"unid"=>$unid
				

			),JSON_UNESCAPED_UNICODE);

            }
                if ($getway=="sadad"){
                    echo json_encode(array(
                        "statusCode"=>200,
                        "state"=>"1",
                        "url"=>'target2?GS='.$unid.'',
                        "unid"=>$unid


                    ),JSON_UNESCAPED_UNICODE);

                }
			
		}

		break;

    case "getcity":
        $fee = new ManageFees();
        $proviid= $_REQUEST['proviid'];
        $counttttt = $fee->Getprovince2($proviid);
        $counttttt_count = $fee->Getprovince2count($proviid);

        if($counttttt_count==12){
            $optsazi='
<option name="'.$counttttt["0"]["id"].'" id="'.$counttttt["0"]["id"].'">'.$counttttt["0"]["name"].'</option>
<option name="'.$counttttt["1"]["id"].'" id="'.$counttttt["1"]["id"].'">'.$counttttt["1"]["name"].'</option>
<option name="'.$counttttt["2"]["id"].'" id="'.$counttttt["2"]["id"].'">'.$counttttt["2"]["name"].'</option>
<option name="'.$counttttt["3"]["id"].'" id="'.$counttttt["3"]["id"].'">'.$counttttt["3"]["name"].'</option>
<option name="'.$counttttt["4"]["id"].'" id="'.$counttttt["4"]["id"].'">'.$counttttt["4"]["name"].'</option>
<option name="'.$counttttt["5"]["id"].'" id="'.$counttttt["5"]["id"].'">'.$counttttt["5"]["name"].'</option>
<option name="'.$counttttt["6"]["id"].'" id="'.$counttttt["6"]["id"].'">'.$counttttt["6"]["name"].'</option>
<option name="'.$counttttt["7"]["id"].'" id="'.$counttttt["7"]["id"].'">'.$counttttt["7"]["name"].'</option>
<option name="'.$counttttt["8"]["id"].'" id="'.$counttttt["8"]["id"].'">'.$counttttt["8"]["name"].'</option>
<option name="'.$counttttt["9"]["id"].'" id="'.$counttttt["9"]["id"].'">'.$counttttt["9"]["name"].'</option>
<option name="'.$counttttt["10"]["id"].'" id="'.$counttttt["10"]["id"].'">'.$counttttt["10"]["name"].'</option>
<option name="'.$counttttt["11"]["id"].'" id="'.$counttttt["11"]["id"].'">'.$counttttt["11"]["name"].'</option>
        ';}
        if($counttttt_count==43)
        {
            $optsazi='
            
            <option ">'.$counttttt["0"]["name"].'</option>
<option ">'.$counttttt["1"]["name"].'</option>
<option ">'.$counttttt["2"]["name"].'</option>
<option ">'.$counttttt["3"]["name"].'</option>
<option ">'.$counttttt["4"]["name"].'</option>
<option ">'.$counttttt["5"]["name"].'</option>
<option ">'.$counttttt["6"]["name"].'</option>
<option ">'.$counttttt["7"]["name"].'</option>
<option ">'.$counttttt["8"]["name"].'</option>
<option ">'.$counttttt["9"]["name"].'</option>
<option ">'.$counttttt["10"]["name"].'</option>
<option >'.$counttttt["11"]["name"].'</option>
<option >'.$counttttt["12"]["name"].'</option>
<option >'.$counttttt["13"]["name"].'</option>
<option >'.$counttttt["14"]["name"].'</option>
<option >'.$counttttt["15"]["name"].'</option>
<option >'.$counttttt["16"]["name"].'</option>
<option >'.$counttttt["17"]["name"].'</option>
<option >'.$counttttt["18"]["name"].'</option>
<option >'.$counttttt["19"]["name"].'</option>
<option >'.$counttttt["20"]["name"].'</option>
<option >'.$counttttt["21"]["name"].'</option>
<option >'.$counttttt["22"]["name"].'</option>
<option >'.$counttttt["23"]["name"].'</option>
<option >'.$counttttt["24"]["name"].'</option>
<option >'.$counttttt["25"]["name"].'</option>
<option >'.$counttttt["26"]["name"].'</option>
<option >'.$counttttt["27"]["name"].'</option>
<option >'.$counttttt["28"]["name"].'</option>
<option >'.$counttttt["29"]["name"].'</option>
<option >'.$counttttt["30"]["name"].'</option>
<option >'.$counttttt["31"]["name"].'</option>
<option >'.$counttttt["32"]["name"].'</option>
<option >'.$counttttt["33"]["name"].'</option>
<option >'.$counttttt["34"]["name"].'</option>
<option >'.$counttttt["35"]["name"].'</option>
<option >'.$counttttt["36"]["name"].'</option>
<option >'.$counttttt["37"]["name"].'</option>
<option >'.$counttttt["38"]["name"].'</option>
<option >'.$counttttt["39"]["name"].'</option>
<option >'.$counttttt["40"]["name"].'</option>
<option >'.$counttttt["41"]["name"].'</option>
<option >'.$counttttt["42"]["name"].'</option>
            ';
        }
        if($counttttt_count==46)
        {
            $optsazi='
<option ">'.$counttttt["0"]["name"].'</option>
<option ">'.$counttttt["1"]["name"].'</option>
<option ">'.$counttttt["2"]["name"].'</option>
<option ">'.$counttttt["3"]["name"].'</option>
<option ">'.$counttttt["4"]["name"].'</option>
<option ">'.$counttttt["5"]["name"].'</option>
<option ">'.$counttttt["6"]["name"].'</option>
<option ">'.$counttttt["7"]["name"].'</option>
<option ">'.$counttttt["8"]["name"].'</option>
<option ">'.$counttttt["9"]["name"].'</option>
<option ">'.$counttttt["10"]["name"].'</option>
<option >'.$counttttt["11"]["name"].'</option>
<option >'.$counttttt["12"]["name"].'</option>
<option >'.$counttttt["13"]["name"].'</option>
<option >'.$counttttt["14"]["name"].'</option>
<option >'.$counttttt["15"]["name"].'</option>
<option >'.$counttttt["16"]["name"].'</option>
<option >'.$counttttt["17"]["name"].'</option>
<option >'.$counttttt["18"]["name"].'</option>
<option >'.$counttttt["19"]["name"].'</option>
<option >'.$counttttt["20"]["name"].'</option>
<option >'.$counttttt["21"]["name"].'</option>
<option >'.$counttttt["22"]["name"].'</option>
<option >'.$counttttt["23"]["name"].'</option>
<option >'.$counttttt["24"]["name"].'</option>
<option >'.$counttttt["25"]["name"].'</option>
<option >'.$counttttt["26"]["name"].'</option>
<option >'.$counttttt["27"]["name"].'</option>
<option >'.$counttttt["28"]["name"].'</option>
<option >'.$counttttt["29"]["name"].'</option>
<option >'.$counttttt["30"]["name"].'</option>
<option >'.$counttttt["31"]["name"].'</option>
<option >'.$counttttt["32"]["name"].'</option>
<option >'.$counttttt["33"]["name"].'</option>
<option >'.$counttttt["34"]["name"].'</option>
<option >'.$counttttt["35"]["name"].'</option>
<option >'.$counttttt["36"]["name"].'</option>
<option >'.$counttttt["37"]["name"].'</option>
<option >'.$counttttt["38"]["name"].'</option>
<option >'.$counttttt["39"]["name"].'</option>
<option >'.$counttttt["40"]["name"].'</option>
<option >'.$counttttt["41"]["name"].'</option>
<option >'.$counttttt["42"]["name"].'</option>
<option >'.$counttttt["43"]["name"].'</option>
<option >'.$counttttt["44"]["name"].'</option>
<option >'.$counttttt["45"]["name"].'</option>
    ';
        }
        if($counttttt_count==58)
        {
            $optsazi='
            <option ">'.$counttttt["0"]["name"].'</option>
<option ">'.$counttttt["1"]["name"].'</option>
<option ">'.$counttttt["2"]["name"].'</option>
<option ">'.$counttttt["3"]["name"].'</option>
<option ">'.$counttttt["4"]["name"].'</option>
<option ">'.$counttttt["5"]["name"].'</option>
<option ">'.$counttttt["6"]["name"].'</option>
<option ">'.$counttttt["7"]["name"].'</option>
<option ">'.$counttttt["8"]["name"].'</option>
<option ">'.$counttttt["9"]["name"].'</option>
<option ">'.$counttttt["10"]["name"].'</option>
<option >'.$counttttt["11"]["name"].'</option>
<option >'.$counttttt["12"]["name"].'</option>
<option >'.$counttttt["13"]["name"].'</option>
<option >'.$counttttt["14"]["name"].'</option>
<option >'.$counttttt["15"]["name"].'</option>
<option >'.$counttttt["16"]["name"].'</option>
<option >'.$counttttt["17"]["name"].'</option>
<option >'.$counttttt["18"]["name"].'</option>
<option >'.$counttttt["19"]["name"].'</option>
<option >'.$counttttt["20"]["name"].'</option>
<option >'.$counttttt["21"]["name"].'</option>
<option >'.$counttttt["22"]["name"].'</option>
<option >'.$counttttt["23"]["name"].'</option>
<option >'.$counttttt["24"]["name"].'</option>
<option >'.$counttttt["25"]["name"].'</option>
<option >'.$counttttt["26"]["name"].'</option>
<option >'.$counttttt["27"]["name"].'</option>
<option >'.$counttttt["28"]["name"].'</option>
<option >'.$counttttt["29"]["name"].'</option>
<option >'.$counttttt["30"]["name"].'</option>
<option >'.$counttttt["31"]["name"].'</option>
<option >'.$counttttt["32"]["name"].'</option>
<option >'.$counttttt["33"]["name"].'</option>
<option >'.$counttttt["34"]["name"].'</option>
<option >'.$counttttt["35"]["name"].'</option>
<option >'.$counttttt["36"]["name"].'</option>
<option >'.$counttttt["37"]["name"].'</option>
<option >'.$counttttt["38"]["name"].'</option>
<option >'.$counttttt["39"]["name"].'</option>
<option >'.$counttttt["40"]["name"].'</option>
<option >'.$counttttt["41"]["name"].'</option>
<option >'.$counttttt["42"]["name"].'</option>
<option >'.$counttttt["43"]["name"].'</option>
<option >'.$counttttt["44"]["name"].'</option>
<option >'.$counttttt["45"]["name"].'</option>
<option >'.$counttttt["46"]["name"].'</option>
<option >'.$counttttt["47"]["name"].'</option>
<option >'.$counttttt["48"]["name"].'</option>
<option >'.$counttttt["49"]["name"].'</option>
<option >'.$counttttt["50"]["name"].'</option>
<option >'.$counttttt["51"]["name"].'</option>
<option >'.$counttttt["52"]["name"].'</option>
<option >'.$counttttt["53"]["name"].'</option>
<option >'.$counttttt["54"]["name"].'</option>
<option >'.$counttttt["55"]["name"].'</option>
<option >'.$counttttt["56"]["name"].'</option>
<option >'.$counttttt["57"]["name"].'</option>

 ';
        }

        if($counttttt_count==60)
        {
            $optsazi='
            <option ">'.$counttttt["0"]["name"].'</option>
<option ">'.$counttttt["1"]["name"].'</option>
<option ">'.$counttttt["2"]["name"].'</option>
<option ">'.$counttttt["3"]["name"].'</option>
<option ">'.$counttttt["4"]["name"].'</option>
<option ">'.$counttttt["5"]["name"].'</option>
<option ">'.$counttttt["6"]["name"].'</option>
<option ">'.$counttttt["7"]["name"].'</option>
<option ">'.$counttttt["8"]["name"].'</option>
<option ">'.$counttttt["9"]["name"].'</option>
<option ">'.$counttttt["10"]["name"].'</option>
<option >'.$counttttt["11"]["name"].'</option>
<option >'.$counttttt["12"]["name"].'</option>
<option >'.$counttttt["13"]["name"].'</option>
<option >'.$counttttt["14"]["name"].'</option>
<option >'.$counttttt["15"]["name"].'</option>
<option >'.$counttttt["16"]["name"].'</option>
<option >'.$counttttt["17"]["name"].'</option>
<option >'.$counttttt["18"]["name"].'</option>
<option >'.$counttttt["19"]["name"].'</option>
<option >'.$counttttt["20"]["name"].'</option>
<option >'.$counttttt["21"]["name"].'</option>
<option >'.$counttttt["22"]["name"].'</option>
<option >'.$counttttt["23"]["name"].'</option>
<option >'.$counttttt["24"]["name"].'</option>
<option >'.$counttttt["25"]["name"].'</option>
<option >'.$counttttt["26"]["name"].'</option>
<option >'.$counttttt["27"]["name"].'</option>
<option >'.$counttttt["28"]["name"].'</option>
<option >'.$counttttt["29"]["name"].'</option>
<option >'.$counttttt["30"]["name"].'</option>
<option >'.$counttttt["31"]["name"].'</option>
<option >'.$counttttt["32"]["name"].'</option>
<option >'.$counttttt["33"]["name"].'</option>
<option >'.$counttttt["34"]["name"].'</option>
<option >'.$counttttt["35"]["name"].'</option>
<option >'.$counttttt["36"]["name"].'</option>
<option >'.$counttttt["37"]["name"].'</option>
<option >'.$counttttt["38"]["name"].'</option>
<option >'.$counttttt["39"]["name"].'</option>
<option >'.$counttttt["40"]["name"].'</option>
<option >'.$counttttt["41"]["name"].'</option>
<option >'.$counttttt["42"]["name"].'</option>
<option >'.$counttttt["43"]["name"].'</option>
<option >'.$counttttt["44"]["name"].'</option>
<option >'.$counttttt["45"]["name"].'</option>
<option >'.$counttttt["46"]["name"].'</option>
<option >'.$counttttt["47"]["name"].'</option>
<option >'.$counttttt["48"]["name"].'</option>
<option >'.$counttttt["49"]["name"].'</option>
<option >'.$counttttt["50"]["name"].'</option>
<option >'.$counttttt["51"]["name"].'</option>
<option >'.$counttttt["52"]["name"].'</option>
<option >'.$counttttt["53"]["name"].'</option>
<option >'.$counttttt["54"]["name"].'</option>
<option >'.$counttttt["55"]["name"].'</option>
<option >'.$counttttt["56"]["name"].'</option>
<option >'.$counttttt["57"]["name"].'</option>
<option >'.$counttttt["58"]["name"].'</option>
<option >'.$counttttt["59"]["name"].'</option>


            
 ';
        }

        if($counttttt_count==61)
        {
            $optsazi='
            <option ">'.$counttttt["0"]["name"].'</option>
<option ">'.$counttttt["1"]["name"].'</option>
<option ">'.$counttttt["2"]["name"].'</option>
<option ">'.$counttttt["3"]["name"].'</option>
<option ">'.$counttttt["4"]["name"].'</option>
<option ">'.$counttttt["5"]["name"].'</option>
<option ">'.$counttttt["6"]["name"].'</option>
<option ">'.$counttttt["7"]["name"].'</option>
<option ">'.$counttttt["8"]["name"].'</option>
<option ">'.$counttttt["9"]["name"].'</option>
<option ">'.$counttttt["10"]["name"].'</option>
<option >'.$counttttt["11"]["name"].'</option>
<option >'.$counttttt["12"]["name"].'</option>
<option >'.$counttttt["13"]["name"].'</option>
<option >'.$counttttt["14"]["name"].'</option>
<option >'.$counttttt["15"]["name"].'</option>
<option >'.$counttttt["16"]["name"].'</option>
<option >'.$counttttt["17"]["name"].'</option>
<option >'.$counttttt["18"]["name"].'</option>
<option >'.$counttttt["19"]["name"].'</option>
<option >'.$counttttt["20"]["name"].'</option>
<option >'.$counttttt["21"]["name"].'</option>
<option >'.$counttttt["22"]["name"].'</option>
<option >'.$counttttt["23"]["name"].'</option>
<option >'.$counttttt["24"]["name"].'</option>
<option >'.$counttttt["25"]["name"].'</option>
<option >'.$counttttt["26"]["name"].'</option>
<option >'.$counttttt["27"]["name"].'</option>
<option >'.$counttttt["28"]["name"].'</option>
<option >'.$counttttt["29"]["name"].'</option>
<option >'.$counttttt["30"]["name"].'</option>
<option >'.$counttttt["31"]["name"].'</option>
<option >'.$counttttt["32"]["name"].'</option>
<option >'.$counttttt["33"]["name"].'</option>
<option >'.$counttttt["34"]["name"].'</option>
<option >'.$counttttt["35"]["name"].'</option>
<option >'.$counttttt["36"]["name"].'</option>
<option >'.$counttttt["37"]["name"].'</option>
<option >'.$counttttt["38"]["name"].'</option>
<option >'.$counttttt["39"]["name"].'</option>
<option >'.$counttttt["40"]["name"].'</option>
<option >'.$counttttt["41"]["name"].'</option>
<option >'.$counttttt["42"]["name"].'</option>
<option >'.$counttttt["43"]["name"].'</option>
<option >'.$counttttt["44"]["name"].'</option>
<option >'.$counttttt["45"]["name"].'</option>
<option >'.$counttttt["46"]["name"].'</option>
<option >'.$counttttt["47"]["name"].'</option>
<option >'.$counttttt["48"]["name"].'</option>
<option >'.$counttttt["49"]["name"].'</option>
<option >'.$counttttt["50"]["name"].'</option>
<option >'.$counttttt["51"]["name"].'</option>
<option >'.$counttttt["52"]["name"].'</option>
<option >'.$counttttt["53"]["name"].'</option>
<option >'.$counttttt["54"]["name"].'</option>
<option >'.$counttttt["55"]["name"].'</option>
<option >'.$counttttt["56"]["name"].'</option>
<option >'.$counttttt["57"]["name"].'</option>
<option >'.$counttttt["58"]["name"].'</option>
<option >'.$counttttt["59"]["name"].'</option>
<option >'.$counttttt["60"]["name"].'</option>


 ';
        }


        if($counttttt_count==63)
        {
            $optsazi='
            <option ">'.$counttttt["0"]["name"].'</option>
<option ">'.$counttttt["1"]["name"].'</option>
<option ">'.$counttttt["2"]["name"].'</option>
<option ">'.$counttttt["3"]["name"].'</option>
<option ">'.$counttttt["4"]["name"].'</option>
<option ">'.$counttttt["5"]["name"].'</option>
<option ">'.$counttttt["6"]["name"].'</option>
<option ">'.$counttttt["7"]["name"].'</option>
<option ">'.$counttttt["8"]["name"].'</option>
<option ">'.$counttttt["9"]["name"].'</option>
<option ">'.$counttttt["10"]["name"].'</option>
<option >'.$counttttt["11"]["name"].'</option>
<option >'.$counttttt["12"]["name"].'</option>
<option >'.$counttttt["13"]["name"].'</option>
<option >'.$counttttt["14"]["name"].'</option>
<option >'.$counttttt["15"]["name"].'</option>
<option >'.$counttttt["16"]["name"].'</option>
<option >'.$counttttt["17"]["name"].'</option>
<option >'.$counttttt["18"]["name"].'</option>
<option >'.$counttttt["19"]["name"].'</option>
<option >'.$counttttt["20"]["name"].'</option>
<option >'.$counttttt["21"]["name"].'</option>
<option >'.$counttttt["22"]["name"].'</option>
<option >'.$counttttt["23"]["name"].'</option>
<option >'.$counttttt["24"]["name"].'</option>
<option >'.$counttttt["25"]["name"].'</option>
<option >'.$counttttt["26"]["name"].'</option>
<option >'.$counttttt["27"]["name"].'</option>
<option >'.$counttttt["28"]["name"].'</option>
<option >'.$counttttt["29"]["name"].'</option>
<option >'.$counttttt["30"]["name"].'</option>
<option >'.$counttttt["31"]["name"].'</option>
<option >'.$counttttt["32"]["name"].'</option>
<option >'.$counttttt["33"]["name"].'</option>
<option >'.$counttttt["34"]["name"].'</option>
<option >'.$counttttt["35"]["name"].'</option>
<option >'.$counttttt["36"]["name"].'</option>
<option >'.$counttttt["37"]["name"].'</option>
<option >'.$counttttt["38"]["name"].'</option>
<option >'.$counttttt["39"]["name"].'</option>
<option >'.$counttttt["40"]["name"].'</option>
<option >'.$counttttt["41"]["name"].'</option>
<option >'.$counttttt["42"]["name"].'</option>
<option >'.$counttttt["43"]["name"].'</option>
<option >'.$counttttt["44"]["name"].'</option>
<option >'.$counttttt["45"]["name"].'</option>
<option >'.$counttttt["46"]["name"].'</option>
<option >'.$counttttt["47"]["name"].'</option>
<option >'.$counttttt["48"]["name"].'</option>
<option >'.$counttttt["49"]["name"].'</option>
<option >'.$counttttt["50"]["name"].'</option>
<option >'.$counttttt["51"]["name"].'</option>
<option >'.$counttttt["52"]["name"].'</option>
<option >'.$counttttt["53"]["name"].'</option>
<option >'.$counttttt["54"]["name"].'</option>
<option >'.$counttttt["55"]["name"].'</option>
<option >'.$counttttt["56"]["name"].'</option>
<option >'.$counttttt["57"]["name"].'</option>
<option >'.$counttttt["58"]["name"].'</option>
<option >'.$counttttt["59"]["name"].'</option>
<option >'.$counttttt["60"]["name"].'</option>
<option >'.$counttttt["61"]["name"].'</option>
<option >'.$counttttt["62"]["name"].'</option>


 ';
        }

        if($counttttt_count==67)
        {
            $optsazi='
            <option ">'.$counttttt["0"]["name"].'</option>
<option ">'.$counttttt["1"]["name"].'</option>
<option ">'.$counttttt["2"]["name"].'</option>
<option ">'.$counttttt["3"]["name"].'</option>
<option ">'.$counttttt["4"]["name"].'</option>
<option ">'.$counttttt["5"]["name"].'</option>
<option ">'.$counttttt["6"]["name"].'</option>
<option ">'.$counttttt["7"]["name"].'</option>
<option ">'.$counttttt["8"]["name"].'</option>
<option ">'.$counttttt["9"]["name"].'</option>
<option ">'.$counttttt["10"]["name"].'</option>
<option >'.$counttttt["11"]["name"].'</option>
<option >'.$counttttt["12"]["name"].'</option>
<option >'.$counttttt["13"]["name"].'</option>
<option >'.$counttttt["14"]["name"].'</option>
<option >'.$counttttt["15"]["name"].'</option>
<option >'.$counttttt["16"]["name"].'</option>
<option >'.$counttttt["17"]["name"].'</option>
<option >'.$counttttt["18"]["name"].'</option>
<option >'.$counttttt["19"]["name"].'</option>
<option >'.$counttttt["20"]["name"].'</option>
<option >'.$counttttt["21"]["name"].'</option>
<option >'.$counttttt["22"]["name"].'</option>
<option >'.$counttttt["23"]["name"].'</option>
<option >'.$counttttt["24"]["name"].'</option>
<option >'.$counttttt["25"]["name"].'</option>
<option >'.$counttttt["26"]["name"].'</option>
<option >'.$counttttt["27"]["name"].'</option>
<option >'.$counttttt["28"]["name"].'</option>
<option >'.$counttttt["29"]["name"].'</option>
<option >'.$counttttt["30"]["name"].'</option>
<option >'.$counttttt["31"]["name"].'</option>
<option >'.$counttttt["32"]["name"].'</option>
<option >'.$counttttt["33"]["name"].'</option>
<option >'.$counttttt["34"]["name"].'</option>
<option >'.$counttttt["35"]["name"].'</option>
<option >'.$counttttt["36"]["name"].'</option>
<option >'.$counttttt["37"]["name"].'</option>
<option >'.$counttttt["38"]["name"].'</option>
<option >'.$counttttt["39"]["name"].'</option>
<option >'.$counttttt["40"]["name"].'</option>
<option >'.$counttttt["41"]["name"].'</option>
<option >'.$counttttt["42"]["name"].'</option>
<option >'.$counttttt["43"]["name"].'</option>
<option >'.$counttttt["44"]["name"].'</option>
<option >'.$counttttt["45"]["name"].'</option>
<option >'.$counttttt["46"]["name"].'</option>
<option >'.$counttttt["47"]["name"].'</option>
<option >'.$counttttt["48"]["name"].'</option>
<option >'.$counttttt["49"]["name"].'</option>
<option >'.$counttttt["50"]["name"].'</option>
<option >'.$counttttt["51"]["name"].'</option>
<option >'.$counttttt["52"]["name"].'</option>
<option >'.$counttttt["53"]["name"].'</option>
<option >'.$counttttt["54"]["name"].'</option>
<option >'.$counttttt["55"]["name"].'</option>
<option >'.$counttttt["56"]["name"].'</option>
<option >'.$counttttt["57"]["name"].'</option>
<option >'.$counttttt["58"]["name"].'</option>
<option >'.$counttttt["59"]["name"].'</option>
<option >'.$counttttt["60"]["name"].'</option>
<option >'.$counttttt["61"]["name"].'</option>
<option >'.$counttttt["62"]["name"].'</option>
<option >'.$counttttt["63"]["name"].'</option>
<option >'.$counttttt["64"]["name"].'</option>
<option >'.$counttttt["65"]["name"].'</option>
<option >'.$counttttt["66"]["name"].'</option>


            
 ';
        }

        if($counttttt_count==69)
        {
            $optsazi='
            <option ">'.$counttttt["0"]["name"].'</option>
<option ">'.$counttttt["1"]["name"].'</option>
<option ">'.$counttttt["2"]["name"].'</option>
<option ">'.$counttttt["3"]["name"].'</option>
<option ">'.$counttttt["4"]["name"].'</option>
<option ">'.$counttttt["5"]["name"].'</option>
<option ">'.$counttttt["6"]["name"].'</option>
<option ">'.$counttttt["7"]["name"].'</option>
<option ">'.$counttttt["8"]["name"].'</option>
<option ">'.$counttttt["9"]["name"].'</option>
<option ">'.$counttttt["10"]["name"].'</option>
<option >'.$counttttt["11"]["name"].'</option>
<option >'.$counttttt["12"]["name"].'</option>
<option >'.$counttttt["13"]["name"].'</option>
<option >'.$counttttt["14"]["name"].'</option>
<option >'.$counttttt["15"]["name"].'</option>
<option >'.$counttttt["16"]["name"].'</option>
<option >'.$counttttt["17"]["name"].'</option>
<option >'.$counttttt["18"]["name"].'</option>
<option >'.$counttttt["19"]["name"].'</option>
<option >'.$counttttt["20"]["name"].'</option>
<option >'.$counttttt["21"]["name"].'</option>
<option >'.$counttttt["22"]["name"].'</option>
<option >'.$counttttt["23"]["name"].'</option>
<option >'.$counttttt["24"]["name"].'</option>
<option >'.$counttttt["25"]["name"].'</option>
<option >'.$counttttt["26"]["name"].'</option>
<option >'.$counttttt["27"]["name"].'</option>
<option >'.$counttttt["28"]["name"].'</option>
<option >'.$counttttt["29"]["name"].'</option>
<option >'.$counttttt["30"]["name"].'</option>
<option >'.$counttttt["31"]["name"].'</option>
<option >'.$counttttt["32"]["name"].'</option>
<option >'.$counttttt["33"]["name"].'</option>
<option >'.$counttttt["34"]["name"].'</option>
<option >'.$counttttt["35"]["name"].'</option>
<option >'.$counttttt["36"]["name"].'</option>
<option >'.$counttttt["37"]["name"].'</option>
<option >'.$counttttt["38"]["name"].'</option>
<option >'.$counttttt["39"]["name"].'</option>
<option >'.$counttttt["40"]["name"].'</option>
<option >'.$counttttt["41"]["name"].'</option>
<option >'.$counttttt["42"]["name"].'</option>
<option >'.$counttttt["43"]["name"].'</option>
<option >'.$counttttt["44"]["name"].'</option>
<option >'.$counttttt["45"]["name"].'</option>
<option >'.$counttttt["46"]["name"].'</option>
<option >'.$counttttt["47"]["name"].'</option>
<option >'.$counttttt["48"]["name"].'</option>
<option >'.$counttttt["49"]["name"].'</option>
<option >'.$counttttt["50"]["name"].'</option>
<option >'.$counttttt["51"]["name"].'</option>
<option >'.$counttttt["52"]["name"].'</option>
<option >'.$counttttt["53"]["name"].'</option>
<option >'.$counttttt["54"]["name"].'</option>
<option >'.$counttttt["55"]["name"].'</option>
<option >'.$counttttt["56"]["name"].'</option>
<option >'.$counttttt["57"]["name"].'</option>
<option >'.$counttttt["58"]["name"].'</option>
<option >'.$counttttt["59"]["name"].'</option>
<option >'.$counttttt["60"]["name"].'</option>
<option >'.$counttttt["61"]["name"].'</option>
<option >'.$counttttt["62"]["name"].'</option>
<option >'.$counttttt["63"]["name"].'</option>
<option >'.$counttttt["64"]["name"].'</option>
<option >'.$counttttt["65"]["name"].'</option>
<option >'.$counttttt["66"]["name"].'</option>
<option >'.$counttttt["67"]["name"].'</option>
<option >'.$counttttt["68"]["name"].'</option>



 ';
        }

        if($counttttt_count==76)
        {
            $optsazi='
            <option ">'.$counttttt["0"]["name"].'</option>
<option ">'.$counttttt["1"]["name"].'</option>
<option ">'.$counttttt["2"]["name"].'</option>
<option ">'.$counttttt["3"]["name"].'</option>
<option ">'.$counttttt["4"]["name"].'</option>
<option ">'.$counttttt["5"]["name"].'</option>
<option ">'.$counttttt["6"]["name"].'</option>
<option ">'.$counttttt["7"]["name"].'</option>
<option ">'.$counttttt["8"]["name"].'</option>
<option ">'.$counttttt["9"]["name"].'</option>
<option ">'.$counttttt["10"]["name"].'</option>
<option >'.$counttttt["11"]["name"].'</option>
<option >'.$counttttt["12"]["name"].'</option>
<option >'.$counttttt["13"]["name"].'</option>
<option >'.$counttttt["14"]["name"].'</option>
<option >'.$counttttt["15"]["name"].'</option>
<option >'.$counttttt["16"]["name"].'</option>
<option >'.$counttttt["17"]["name"].'</option>
<option >'.$counttttt["18"]["name"].'</option>
<option >'.$counttttt["19"]["name"].'</option>
<option >'.$counttttt["20"]["name"].'</option>
<option >'.$counttttt["21"]["name"].'</option>
<option >'.$counttttt["22"]["name"].'</option>
<option >'.$counttttt["23"]["name"].'</option>
<option >'.$counttttt["24"]["name"].'</option>
<option >'.$counttttt["25"]["name"].'</option>
<option >'.$counttttt["26"]["name"].'</option>
<option >'.$counttttt["27"]["name"].'</option>
<option >'.$counttttt["28"]["name"].'</option>
<option >'.$counttttt["29"]["name"].'</option>
<option >'.$counttttt["30"]["name"].'</option>
<option >'.$counttttt["31"]["name"].'</option>
<option >'.$counttttt["32"]["name"].'</option>
<option >'.$counttttt["33"]["name"].'</option>
<option >'.$counttttt["34"]["name"].'</option>
<option >'.$counttttt["35"]["name"].'</option>
<option >'.$counttttt["36"]["name"].'</option>
<option >'.$counttttt["37"]["name"].'</option>
<option >'.$counttttt["38"]["name"].'</option>
<option >'.$counttttt["39"]["name"].'</option>
<option >'.$counttttt["40"]["name"].'</option>
<option >'.$counttttt["41"]["name"].'</option>
<option >'.$counttttt["42"]["name"].'</option>
<option >'.$counttttt["43"]["name"].'</option>
<option >'.$counttttt["44"]["name"].'</option>
<option >'.$counttttt["45"]["name"].'</option>
<option >'.$counttttt["46"]["name"].'</option>
<option >'.$counttttt["47"]["name"].'</option>
<option >'.$counttttt["48"]["name"].'</option>
<option >'.$counttttt["49"]["name"].'</option>
<option >'.$counttttt["50"]["name"].'</option>
<option >'.$counttttt["51"]["name"].'</option>
<option >'.$counttttt["52"]["name"].'</option>
<option >'.$counttttt["53"]["name"].'</option>
<option >'.$counttttt["54"]["name"].'</option>
<option >'.$counttttt["55"]["name"].'</option>
<option >'.$counttttt["56"]["name"].'</option>
<option >'.$counttttt["57"]["name"].'</option>
<option >'.$counttttt["58"]["name"].'</option>
<option >'.$counttttt["59"]["name"].'</option>
<option >'.$counttttt["60"]["name"].'</option>
<option >'.$counttttt["61"]["name"].'</option>
<option >'.$counttttt["62"]["name"].'</option>
<option >'.$counttttt["63"]["name"].'</option>
<option >'.$counttttt["64"]["name"].'</option>
<option >'.$counttttt["65"]["name"].'</option>
<option >'.$counttttt["66"]["name"].'</option>
<option >'.$counttttt["67"]["name"].'</option>
<option >'.$counttttt["68"]["name"].'</option>
<option >'.$counttttt["69"]["name"].'</option>
<option >'.$counttttt["70"]["name"].'</option>
<option >'.$counttttt["71"]["name"].'</option>
<option >'.$counttttt["72"]["name"].'</option>
<option >'.$counttttt["73"]["name"].'</option>
<option >'.$counttttt["74"]["name"].'</option>
<option >'.$counttttt["75"]["name"].'</option>



 ';
        }

        if($counttttt_count==82)
        {
            $optsazi='
            <option ">'.$counttttt["0"]["name"].'</option>
<option ">'.$counttttt["1"]["name"].'</option>
<option ">'.$counttttt["2"]["name"].'</option>
<option ">'.$counttttt["3"]["name"].'</option>
<option ">'.$counttttt["4"]["name"].'</option>
<option ">'.$counttttt["5"]["name"].'</option>
<option ">'.$counttttt["6"]["name"].'</option>
<option ">'.$counttttt["7"]["name"].'</option>
<option ">'.$counttttt["8"]["name"].'</option>
<option ">'.$counttttt["9"]["name"].'</option>
<option ">'.$counttttt["10"]["name"].'</option>
<option >'.$counttttt["11"]["name"].'</option>
<option >'.$counttttt["12"]["name"].'</option>
<option >'.$counttttt["13"]["name"].'</option>
<option >'.$counttttt["14"]["name"].'</option>
<option >'.$counttttt["15"]["name"].'</option>
<option >'.$counttttt["16"]["name"].'</option>
<option >'.$counttttt["17"]["name"].'</option>
<option >'.$counttttt["18"]["name"].'</option>
<option >'.$counttttt["19"]["name"].'</option>
<option >'.$counttttt["20"]["name"].'</option>
<option >'.$counttttt["21"]["name"].'</option>
<option >'.$counttttt["22"]["name"].'</option>
<option >'.$counttttt["23"]["name"].'</option>
<option >'.$counttttt["24"]["name"].'</option>
<option >'.$counttttt["25"]["name"].'</option>
<option >'.$counttttt["26"]["name"].'</option>
<option >'.$counttttt["27"]["name"].'</option>
<option >'.$counttttt["28"]["name"].'</option>
<option >'.$counttttt["29"]["name"].'</option>
<option >'.$counttttt["30"]["name"].'</option>
<option >'.$counttttt["31"]["name"].'</option>
<option >'.$counttttt["32"]["name"].'</option>
<option >'.$counttttt["33"]["name"].'</option>
<option >'.$counttttt["34"]["name"].'</option>
<option >'.$counttttt["35"]["name"].'</option>
<option >'.$counttttt["36"]["name"].'</option>
<option >'.$counttttt["37"]["name"].'</option>
<option >'.$counttttt["38"]["name"].'</option>
<option >'.$counttttt["39"]["name"].'</option>
<option >'.$counttttt["40"]["name"].'</option>
<option >'.$counttttt["41"]["name"].'</option>
<option >'.$counttttt["42"]["name"].'</option>
<option >'.$counttttt["43"]["name"].'</option>
<option >'.$counttttt["44"]["name"].'</option>
<option >'.$counttttt["45"]["name"].'</option>
<option >'.$counttttt["46"]["name"].'</option>
<option >'.$counttttt["47"]["name"].'</option>
<option >'.$counttttt["48"]["name"].'</option>
<option >'.$counttttt["49"]["name"].'</option>
<option >'.$counttttt["50"]["name"].'</option>
<option >'.$counttttt["51"]["name"].'</option>
<option >'.$counttttt["52"]["name"].'</option>
<option >'.$counttttt["53"]["name"].'</option>
<option >'.$counttttt["54"]["name"].'</option>
<option >'.$counttttt["55"]["name"].'</option>
<option >'.$counttttt["56"]["name"].'</option>
<option >'.$counttttt["57"]["name"].'</option>
<option >'.$counttttt["58"]["name"].'</option>
<option >'.$counttttt["59"]["name"].'</option>
<option >'.$counttttt["60"]["name"].'</option>
<option >'.$counttttt["61"]["name"].'</option>
<option >'.$counttttt["62"]["name"].'</option>
<option >'.$counttttt["63"]["name"].'</option>
<option >'.$counttttt["64"]["name"].'</option>
<option >'.$counttttt["65"]["name"].'</option>
<option >'.$counttttt["66"]["name"].'</option>
<option >'.$counttttt["67"]["name"].'</option>
<option >'.$counttttt["68"]["name"].'</option>
<option >'.$counttttt["69"]["name"].'</option>
<option >'.$counttttt["70"]["name"].'</option>
<option >'.$counttttt["71"]["name"].'</option>
<option >'.$counttttt["72"]["name"].'</option>
<option >'.$counttttt["73"]["name"].'</option>
<option >'.$counttttt["74"]["name"].'</option>
<option >'.$counttttt["75"]["name"].'</option>
<option >'.$counttttt["76"]["name"].'</option>
<option >'.$counttttt["77"]["name"].'</option>
<option >'.$counttttt["78"]["name"].'</option>
<option >'.$counttttt["79"]["name"].'</option>
<option >'.$counttttt["80"]["name"].'</option>
<option >'.$counttttt["81"]["name"].'</option>



 ';
        }

        if($counttttt_count==87)
        {
            $optsazi='
            <option ">'.$counttttt["0"]["name"].'</option>
<option ">'.$counttttt["1"]["name"].'</option>
<option ">'.$counttttt["2"]["name"].'</option>
<option ">'.$counttttt["3"]["name"].'</option>
<option ">'.$counttttt["4"]["name"].'</option>
<option ">'.$counttttt["5"]["name"].'</option>
<option ">'.$counttttt["6"]["name"].'</option>
<option ">'.$counttttt["7"]["name"].'</option>
<option ">'.$counttttt["8"]["name"].'</option>
<option ">'.$counttttt["9"]["name"].'</option>
<option ">'.$counttttt["10"]["name"].'</option>
<option >'.$counttttt["11"]["name"].'</option>
<option >'.$counttttt["12"]["name"].'</option>
<option >'.$counttttt["13"]["name"].'</option>
<option >'.$counttttt["14"]["name"].'</option>
<option >'.$counttttt["15"]["name"].'</option>
<option >'.$counttttt["16"]["name"].'</option>
<option >'.$counttttt["17"]["name"].'</option>
<option >'.$counttttt["18"]["name"].'</option>
<option >'.$counttttt["19"]["name"].'</option>
<option >'.$counttttt["20"]["name"].'</option>
<option >'.$counttttt["21"]["name"].'</option>
<option >'.$counttttt["22"]["name"].'</option>
<option >'.$counttttt["23"]["name"].'</option>
<option >'.$counttttt["24"]["name"].'</option>
<option >'.$counttttt["25"]["name"].'</option>
<option >'.$counttttt["26"]["name"].'</option>
<option >'.$counttttt["27"]["name"].'</option>
<option >'.$counttttt["28"]["name"].'</option>
<option >'.$counttttt["29"]["name"].'</option>
<option >'.$counttttt["30"]["name"].'</option>
<option >'.$counttttt["31"]["name"].'</option>
<option >'.$counttttt["32"]["name"].'</option>
<option >'.$counttttt["33"]["name"].'</option>
<option >'.$counttttt["34"]["name"].'</option>
<option >'.$counttttt["35"]["name"].'</option>
<option >'.$counttttt["36"]["name"].'</option>
<option >'.$counttttt["37"]["name"].'</option>
<option >'.$counttttt["38"]["name"].'</option>
<option >'.$counttttt["39"]["name"].'</option>
<option >'.$counttttt["40"]["name"].'</option>
<option >'.$counttttt["41"]["name"].'</option>
<option >'.$counttttt["42"]["name"].'</option>
<option >'.$counttttt["43"]["name"].'</option>
<option >'.$counttttt["44"]["name"].'</option>
<option >'.$counttttt["45"]["name"].'</option>
<option >'.$counttttt["46"]["name"].'</option>
<option >'.$counttttt["47"]["name"].'</option>
<option >'.$counttttt["48"]["name"].'</option>
<option >'.$counttttt["49"]["name"].'</option>
<option >'.$counttttt["50"]["name"].'</option>
<option >'.$counttttt["51"]["name"].'</option>
<option >'.$counttttt["52"]["name"].'</option>
<option >'.$counttttt["53"]["name"].'</option>
<option >'.$counttttt["54"]["name"].'</option>
<option >'.$counttttt["55"]["name"].'</option>
<option >'.$counttttt["56"]["name"].'</option>
<option >'.$counttttt["57"]["name"].'</option>
<option >'.$counttttt["58"]["name"].'</option>
<option >'.$counttttt["59"]["name"].'</option>
<option >'.$counttttt["60"]["name"].'</option>
<option >'.$counttttt["61"]["name"].'</option>
<option >'.$counttttt["62"]["name"].'</option>
<option >'.$counttttt["63"]["name"].'</option>
<option >'.$counttttt["64"]["name"].'</option>
<option >'.$counttttt["65"]["name"].'</option>
<option >'.$counttttt["66"]["name"].'</option>
<option >'.$counttttt["67"]["name"].'</option>
<option >'.$counttttt["68"]["name"].'</option>
<option >'.$counttttt["69"]["name"].'</option>
<option >'.$counttttt["70"]["name"].'</option>
<option >'.$counttttt["71"]["name"].'</option>
<option >'.$counttttt["72"]["name"].'</option>
<option >'.$counttttt["73"]["name"].'</option>
<option >'.$counttttt["74"]["name"].'</option>
<option >'.$counttttt["75"]["name"].'</option>
<option >'.$counttttt["76"]["name"].'</option>
<option >'.$counttttt["77"]["name"].'</option>
<option >'.$counttttt["78"]["name"].'</option>
<option >'.$counttttt["79"]["name"].'</option>
<option >'.$counttttt["80"]["name"].'</option>
<option >'.$counttttt["81"]["name"].'</option>
<option >'.$counttttt["82"]["name"].'</option>
<option >'.$counttttt["83"]["name"].'</option>
<option >'.$counttttt["84"]["name"].'</option>
<option >'.$counttttt["85"]["name"].'</option>
<option >'.$counttttt["86"]["name"].'</option>

 ';
        }


        if($counttttt_count==90)
        {
            $optsazi='
            <option ">'.$counttttt["0"]["name"].'</option>
<option ">'.$counttttt["1"]["name"].'</option>
<option ">'.$counttttt["2"]["name"].'</option>
<option ">'.$counttttt["3"]["name"].'</option>
<option ">'.$counttttt["4"]["name"].'</option>
<option ">'.$counttttt["5"]["name"].'</option>
<option ">'.$counttttt["6"]["name"].'</option>
<option ">'.$counttttt["7"]["name"].'</option>
<option ">'.$counttttt["8"]["name"].'</option>
<option ">'.$counttttt["9"]["name"].'</option>
<option ">'.$counttttt["10"]["name"].'</option>
<option >'.$counttttt["11"]["name"].'</option>
<option >'.$counttttt["12"]["name"].'</option>
<option >'.$counttttt["13"]["name"].'</option>
<option >'.$counttttt["14"]["name"].'</option>
<option >'.$counttttt["15"]["name"].'</option>
<option >'.$counttttt["16"]["name"].'</option>
<option >'.$counttttt["17"]["name"].'</option>
<option >'.$counttttt["18"]["name"].'</option>
<option >'.$counttttt["19"]["name"].'</option>
<option >'.$counttttt["20"]["name"].'</option>
<option >'.$counttttt["21"]["name"].'</option>
<option >'.$counttttt["22"]["name"].'</option>
<option >'.$counttttt["23"]["name"].'</option>
<option >'.$counttttt["24"]["name"].'</option>
<option >'.$counttttt["25"]["name"].'</option>
<option >'.$counttttt["26"]["name"].'</option>
<option >'.$counttttt["27"]["name"].'</option>
<option >'.$counttttt["28"]["name"].'</option>
<option >'.$counttttt["29"]["name"].'</option>
<option >'.$counttttt["30"]["name"].'</option>
<option >'.$counttttt["31"]["name"].'</option>
<option >'.$counttttt["32"]["name"].'</option>
<option >'.$counttttt["33"]["name"].'</option>
<option >'.$counttttt["34"]["name"].'</option>
<option >'.$counttttt["35"]["name"].'</option>
<option >'.$counttttt["36"]["name"].'</option>
<option >'.$counttttt["37"]["name"].'</option>
<option >'.$counttttt["38"]["name"].'</option>
<option >'.$counttttt["39"]["name"].'</option>
<option >'.$counttttt["40"]["name"].'</option>
<option >'.$counttttt["41"]["name"].'</option>
<option >'.$counttttt["42"]["name"].'</option>
<option >'.$counttttt["43"]["name"].'</option>
<option >'.$counttttt["44"]["name"].'</option>
<option >'.$counttttt["45"]["name"].'</option>
<option >'.$counttttt["46"]["name"].'</option>
<option >'.$counttttt["47"]["name"].'</option>
<option >'.$counttttt["48"]["name"].'</option>
<option >'.$counttttt["49"]["name"].'</option>
<option >'.$counttttt["50"]["name"].'</option>
<option >'.$counttttt["51"]["name"].'</option>
<option >'.$counttttt["52"]["name"].'</option>
<option >'.$counttttt["53"]["name"].'</option>
<option >'.$counttttt["54"]["name"].'</option>
<option >'.$counttttt["55"]["name"].'</option>
<option >'.$counttttt["56"]["name"].'</option>
<option >'.$counttttt["57"]["name"].'</option>
<option >'.$counttttt["58"]["name"].'</option>
<option >'.$counttttt["59"]["name"].'</option>
<option >'.$counttttt["60"]["name"].'</option>
<option >'.$counttttt["61"]["name"].'</option>
<option >'.$counttttt["62"]["name"].'</option>
<option >'.$counttttt["63"]["name"].'</option>
<option >'.$counttttt["64"]["name"].'</option>
<option >'.$counttttt["65"]["name"].'</option>
<option >'.$counttttt["66"]["name"].'</option>
<option >'.$counttttt["67"]["name"].'</option>
<option >'.$counttttt["68"]["name"].'</option>
<option >'.$counttttt["69"]["name"].'</option>
<option >'.$counttttt["70"]["name"].'</option>
<option >'.$counttttt["71"]["name"].'</option>
<option >'.$counttttt["72"]["name"].'</option>
<option >'.$counttttt["73"]["name"].'</option>
<option >'.$counttttt["74"]["name"].'</option>
<option >'.$counttttt["75"]["name"].'</option>
<option >'.$counttttt["76"]["name"].'</option>
<option >'.$counttttt["77"]["name"].'</option>
<option >'.$counttttt["78"]["name"].'</option>
<option >'.$counttttt["79"]["name"].'</option>
<option >'.$counttttt["80"]["name"].'</option>
<option >'.$counttttt["81"]["name"].'</option>
<option >'.$counttttt["82"]["name"].'</option>
<option >'.$counttttt["83"]["name"].'</option>
<option >'.$counttttt["84"]["name"].'</option>
<option >'.$counttttt["85"]["name"].'</option>
<option >'.$counttttt["86"]["name"].'</option>
<option >'.$counttttt["87"]["name"].'</option>
<option >'.$counttttt["88"]["name"].'</option>
<option >'.$counttttt["89"]["name"].'</option>



             ';
        }


        if($counttttt_count==92)
        {
            $optsazi='
            <option ">'.$counttttt["0"]["name"].'</option>
<option ">'.$counttttt["1"]["name"].'</option>
<option ">'.$counttttt["2"]["name"].'</option>
<option ">'.$counttttt["3"]["name"].'</option>
<option ">'.$counttttt["4"]["name"].'</option>
<option ">'.$counttttt["5"]["name"].'</option>
<option ">'.$counttttt["6"]["name"].'</option>
<option ">'.$counttttt["7"]["name"].'</option>
<option ">'.$counttttt["8"]["name"].'</option>
<option ">'.$counttttt["9"]["name"].'</option>
<option ">'.$counttttt["10"]["name"].'</option>
<option >'.$counttttt["11"]["name"].'</option>
<option >'.$counttttt["12"]["name"].'</option>
<option >'.$counttttt["13"]["name"].'</option>
<option >'.$counttttt["14"]["name"].'</option>
<option >'.$counttttt["15"]["name"].'</option>
<option >'.$counttttt["16"]["name"].'</option>
<option >'.$counttttt["17"]["name"].'</option>
<option >'.$counttttt["18"]["name"].'</option>
<option >'.$counttttt["19"]["name"].'</option>
<option >'.$counttttt["20"]["name"].'</option>
<option >'.$counttttt["21"]["name"].'</option>
<option >'.$counttttt["22"]["name"].'</option>
<option >'.$counttttt["23"]["name"].'</option>
<option >'.$counttttt["24"]["name"].'</option>
<option >'.$counttttt["25"]["name"].'</option>
<option >'.$counttttt["26"]["name"].'</option>
<option >'.$counttttt["27"]["name"].'</option>
<option >'.$counttttt["28"]["name"].'</option>
<option >'.$counttttt["29"]["name"].'</option>
<option >'.$counttttt["30"]["name"].'</option>
<option >'.$counttttt["31"]["name"].'</option>
<option >'.$counttttt["32"]["name"].'</option>
<option >'.$counttttt["33"]["name"].'</option>
<option >'.$counttttt["34"]["name"].'</option>
<option >'.$counttttt["35"]["name"].'</option>
<option >'.$counttttt["36"]["name"].'</option>
<option >'.$counttttt["37"]["name"].'</option>
<option >'.$counttttt["38"]["name"].'</option>
<option >'.$counttttt["39"]["name"].'</option>
<option >'.$counttttt["40"]["name"].'</option>
<option >'.$counttttt["41"]["name"].'</option>
<option >'.$counttttt["42"]["name"].'</option>
<option >'.$counttttt["43"]["name"].'</option>
<option >'.$counttttt["44"]["name"].'</option>
<option >'.$counttttt["45"]["name"].'</option>
<option >'.$counttttt["46"]["name"].'</option>
<option >'.$counttttt["47"]["name"].'</option>
<option >'.$counttttt["48"]["name"].'</option>
<option >'.$counttttt["49"]["name"].'</option>
<option >'.$counttttt["50"]["name"].'</option>
<option >'.$counttttt["51"]["name"].'</option>
<option >'.$counttttt["52"]["name"].'</option>
<option >'.$counttttt["53"]["name"].'</option>
<option >'.$counttttt["54"]["name"].'</option>
<option >'.$counttttt["55"]["name"].'</option>
<option >'.$counttttt["56"]["name"].'</option>
<option >'.$counttttt["57"]["name"].'</option>
<option >'.$counttttt["58"]["name"].'</option>
<option >'.$counttttt["59"]["name"].'</option>
<option >'.$counttttt["60"]["name"].'</option>
<option >'.$counttttt["61"]["name"].'</option>
<option >'.$counttttt["62"]["name"].'</option>
<option >'.$counttttt["63"]["name"].'</option>
<option >'.$counttttt["64"]["name"].'</option>
<option >'.$counttttt["65"]["name"].'</option>
<option >'.$counttttt["66"]["name"].'</option>
<option >'.$counttttt["67"]["name"].'</option>
<option >'.$counttttt["68"]["name"].'</option>
<option >'.$counttttt["69"]["name"].'</option>
<option >'.$counttttt["70"]["name"].'</option>
<option >'.$counttttt["71"]["name"].'</option>
<option >'.$counttttt["72"]["name"].'</option>
<option >'.$counttttt["73"]["name"].'</option>
<option >'.$counttttt["74"]["name"].'</option>
<option >'.$counttttt["75"]["name"].'</option>
<option >'.$counttttt["76"]["name"].'</option>
<option >'.$counttttt["77"]["name"].'</option>
<option >'.$counttttt["78"]["name"].'</option>
<option >'.$counttttt["79"]["name"].'</option>
<option >'.$counttttt["80"]["name"].'</option>
<option >'.$counttttt["81"]["name"].'</option>
<option >'.$counttttt["82"]["name"].'</option>
<option >'.$counttttt["83"]["name"].'</option>
<option >'.$counttttt["84"]["name"].'</option>
<option >'.$counttttt["85"]["name"].'</option>
<option >'.$counttttt["86"]["name"].'</option>
<option >'.$counttttt["87"]["name"].'</option>
<option >'.$counttttt["88"]["name"].'</option>
<option >'.$counttttt["89"]["name"].'</option>
<option >'.$counttttt["90"]["name"].'</option>
<option >'.$counttttt["91"]["name"].'</option>



            
             ';
        }

        if($counttttt_count==94)
        {
            $optsazi='
            <option ">'.$counttttt["0"]["name"].'</option>
<option ">'.$counttttt["1"]["name"].'</option>
<option ">'.$counttttt["2"]["name"].'</option>
<option ">'.$counttttt["3"]["name"].'</option>
<option ">'.$counttttt["4"]["name"].'</option>
<option ">'.$counttttt["5"]["name"].'</option>
<option ">'.$counttttt["6"]["name"].'</option>
<option ">'.$counttttt["7"]["name"].'</option>
<option ">'.$counttttt["8"]["name"].'</option>
<option ">'.$counttttt["9"]["name"].'</option>
<option ">'.$counttttt["10"]["name"].'</option>
<option >'.$counttttt["11"]["name"].'</option>
<option >'.$counttttt["12"]["name"].'</option>
<option >'.$counttttt["13"]["name"].'</option>
<option >'.$counttttt["14"]["name"].'</option>
<option >'.$counttttt["15"]["name"].'</option>
<option >'.$counttttt["16"]["name"].'</option>
<option >'.$counttttt["17"]["name"].'</option>
<option >'.$counttttt["18"]["name"].'</option>
<option >'.$counttttt["19"]["name"].'</option>
<option >'.$counttttt["20"]["name"].'</option>
<option >'.$counttttt["21"]["name"].'</option>
<option >'.$counttttt["22"]["name"].'</option>
<option >'.$counttttt["23"]["name"].'</option>
<option >'.$counttttt["24"]["name"].'</option>
<option >'.$counttttt["25"]["name"].'</option>
<option >'.$counttttt["26"]["name"].'</option>
<option >'.$counttttt["27"]["name"].'</option>
<option >'.$counttttt["28"]["name"].'</option>
<option >'.$counttttt["29"]["name"].'</option>
<option >'.$counttttt["30"]["name"].'</option>
<option >'.$counttttt["31"]["name"].'</option>
<option >'.$counttttt["32"]["name"].'</option>
<option >'.$counttttt["33"]["name"].'</option>
<option >'.$counttttt["34"]["name"].'</option>
<option >'.$counttttt["35"]["name"].'</option>
<option >'.$counttttt["36"]["name"].'</option>
<option >'.$counttttt["37"]["name"].'</option>
<option >'.$counttttt["38"]["name"].'</option>
<option >'.$counttttt["39"]["name"].'</option>
<option >'.$counttttt["40"]["name"].'</option>
<option >'.$counttttt["41"]["name"].'</option>
<option >'.$counttttt["42"]["name"].'</option>
<option >'.$counttttt["43"]["name"].'</option>
<option >'.$counttttt["44"]["name"].'</option>
<option >'.$counttttt["45"]["name"].'</option>
<option >'.$counttttt["46"]["name"].'</option>
<option >'.$counttttt["47"]["name"].'</option>
<option >'.$counttttt["48"]["name"].'</option>
<option >'.$counttttt["49"]["name"].'</option>
<option >'.$counttttt["50"]["name"].'</option>
<option >'.$counttttt["51"]["name"].'</option>
<option >'.$counttttt["52"]["name"].'</option>
<option >'.$counttttt["53"]["name"].'</option>
<option >'.$counttttt["54"]["name"].'</option>
<option >'.$counttttt["55"]["name"].'</option>
<option >'.$counttttt["56"]["name"].'</option>
<option >'.$counttttt["57"]["name"].'</option>
<option >'.$counttttt["58"]["name"].'</option>
<option >'.$counttttt["59"]["name"].'</option>
<option >'.$counttttt["60"]["name"].'</option>
<option >'.$counttttt["61"]["name"].'</option>
<option >'.$counttttt["62"]["name"].'</option>
<option >'.$counttttt["63"]["name"].'</option>
<option >'.$counttttt["64"]["name"].'</option>
<option >'.$counttttt["65"]["name"].'</option>
<option >'.$counttttt["66"]["name"].'</option>
<option >'.$counttttt["67"]["name"].'</option>
<option >'.$counttttt["68"]["name"].'</option>
<option >'.$counttttt["69"]["name"].'</option>
<option >'.$counttttt["70"]["name"].'</option>
<option >'.$counttttt["71"]["name"].'</option>
<option >'.$counttttt["72"]["name"].'</option>
<option >'.$counttttt["73"]["name"].'</option>
<option >'.$counttttt["74"]["name"].'</option>
<option >'.$counttttt["75"]["name"].'</option>
<option >'.$counttttt["76"]["name"].'</option>
<option >'.$counttttt["77"]["name"].'</option>
<option >'.$counttttt["78"]["name"].'</option>
<option >'.$counttttt["79"]["name"].'</option>
<option >'.$counttttt["80"]["name"].'</option>
<option >'.$counttttt["81"]["name"].'</option>
<option >'.$counttttt["82"]["name"].'</option>
<option >'.$counttttt["83"]["name"].'</option>
<option >'.$counttttt["84"]["name"].'</option>
<option >'.$counttttt["85"]["name"].'</option>
<option >'.$counttttt["86"]["name"].'</option>
<option >'.$counttttt["87"]["name"].'</option>
<option >'.$counttttt["88"]["name"].'</option>
<option >'.$counttttt["89"]["name"].'</option>
<option >'.$counttttt["90"]["name"].'</option>
<option >'.$counttttt["91"]["name"].'</option>
<option >'.$counttttt["92"]["name"].'</option>
<option >'.$counttttt["93"]["name"].'</option>


             ';
        }

        if($counttttt_count==100)
        {
            $optsazi='
            <option ">'.$counttttt["0"]["name"].'</option>
<option ">'.$counttttt["1"]["name"].'</option>
<option ">'.$counttttt["2"]["name"].'</option>
<option ">'.$counttttt["3"]["name"].'</option>
<option ">'.$counttttt["4"]["name"].'</option>
<option ">'.$counttttt["5"]["name"].'</option>
<option ">'.$counttttt["6"]["name"].'</option>
<option ">'.$counttttt["7"]["name"].'</option>
<option ">'.$counttttt["8"]["name"].'</option>
<option ">'.$counttttt["9"]["name"].'</option>
<option ">'.$counttttt["10"]["name"].'</option>
<option >'.$counttttt["11"]["name"].'</option>
<option >'.$counttttt["12"]["name"].'</option>
<option >'.$counttttt["13"]["name"].'</option>
<option >'.$counttttt["14"]["name"].'</option>
<option >'.$counttttt["15"]["name"].'</option>
<option >'.$counttttt["16"]["name"].'</option>
<option >'.$counttttt["17"]["name"].'</option>
<option >'.$counttttt["18"]["name"].'</option>
<option >'.$counttttt["19"]["name"].'</option>
<option >'.$counttttt["20"]["name"].'</option>
<option >'.$counttttt["21"]["name"].'</option>
<option >'.$counttttt["22"]["name"].'</option>
<option >'.$counttttt["23"]["name"].'</option>
<option >'.$counttttt["24"]["name"].'</option>
<option >'.$counttttt["25"]["name"].'</option>
<option >'.$counttttt["26"]["name"].'</option>
<option >'.$counttttt["27"]["name"].'</option>
<option >'.$counttttt["28"]["name"].'</option>
<option >'.$counttttt["29"]["name"].'</option>
<option >'.$counttttt["30"]["name"].'</option>
<option >'.$counttttt["31"]["name"].'</option>
<option >'.$counttttt["32"]["name"].'</option>
<option >'.$counttttt["33"]["name"].'</option>
<option >'.$counttttt["34"]["name"].'</option>
<option >'.$counttttt["35"]["name"].'</option>
<option >'.$counttttt["36"]["name"].'</option>
<option >'.$counttttt["37"]["name"].'</option>
<option >'.$counttttt["38"]["name"].'</option>
<option >'.$counttttt["39"]["name"].'</option>
<option >'.$counttttt["40"]["name"].'</option>
<option >'.$counttttt["41"]["name"].'</option>
<option >'.$counttttt["42"]["name"].'</option>
<option >'.$counttttt["43"]["name"].'</option>
<option >'.$counttttt["44"]["name"].'</option>
<option >'.$counttttt["45"]["name"].'</option>
<option >'.$counttttt["46"]["name"].'</option>
<option >'.$counttttt["47"]["name"].'</option>
<option >'.$counttttt["48"]["name"].'</option>
<option >'.$counttttt["49"]["name"].'</option>
<option >'.$counttttt["50"]["name"].'</option>
<option >'.$counttttt["51"]["name"].'</option>
<option >'.$counttttt["52"]["name"].'</option>
<option >'.$counttttt["53"]["name"].'</option>
<option >'.$counttttt["54"]["name"].'</option>
<option >'.$counttttt["55"]["name"].'</option>
<option >'.$counttttt["56"]["name"].'</option>
<option >'.$counttttt["57"]["name"].'</option>
<option >'.$counttttt["58"]["name"].'</option>
<option >'.$counttttt["59"]["name"].'</option>
<option >'.$counttttt["60"]["name"].'</option>
<option >'.$counttttt["61"]["name"].'</option>
<option >'.$counttttt["62"]["name"].'</option>
<option >'.$counttttt["63"]["name"].'</option>
<option >'.$counttttt["64"]["name"].'</option>
<option >'.$counttttt["65"]["name"].'</option>
<option >'.$counttttt["66"]["name"].'</option>
<option >'.$counttttt["67"]["name"].'</option>
<option >'.$counttttt["68"]["name"].'</option>
<option >'.$counttttt["69"]["name"].'</option>
<option >'.$counttttt["70"]["name"].'</option>
<option >'.$counttttt["71"]["name"].'</option>
<option >'.$counttttt["72"]["name"].'</option>
<option >'.$counttttt["73"]["name"].'</option>
<option >'.$counttttt["74"]["name"].'</option>
<option >'.$counttttt["75"]["name"].'</option>
<option >'.$counttttt["76"]["name"].'</option>
<option >'.$counttttt["77"]["name"].'</option>
<option >'.$counttttt["78"]["name"].'</option>
<option >'.$counttttt["79"]["name"].'</option>
<option >'.$counttttt["80"]["name"].'</option>
<option >'.$counttttt["81"]["name"].'</option>
<option >'.$counttttt["82"]["name"].'</option>
<option >'.$counttttt["83"]["name"].'</option>
<option >'.$counttttt["84"]["name"].'</option>
<option >'.$counttttt["85"]["name"].'</option>
<option >'.$counttttt["86"]["name"].'</option>
<option >'.$counttttt["87"]["name"].'</option>
<option >'.$counttttt["88"]["name"].'</option>
<option >'.$counttttt["89"]["name"].'</option>
<option >'.$counttttt["90"]["name"].'</option>
<option >'.$counttttt["91"]["name"].'</option>
<option >'.$counttttt["92"]["name"].'</option>
<option >'.$counttttt["93"]["name"].'</option>
<option >'.$counttttt["94"]["name"].'</option>
<option >'.$counttttt["95"]["name"].'</option>
<option >'.$counttttt["96"]["name"].'</option>
<option >'.$counttttt["97"]["name"].'</option>
<option >'.$counttttt["98"]["name"].'</option>
<option >'.$counttttt["99"]["name"].'</option>


             ';
        }

        if($counttttt_count==108)
        {
            $optsazi='
            <option ">'.$counttttt["0"]["name"].'</option>
<option ">'.$counttttt["1"]["name"].'</option>
<option ">'.$counttttt["2"]["name"].'</option>
<option ">'.$counttttt["3"]["name"].'</option>
<option ">'.$counttttt["4"]["name"].'</option>
<option ">'.$counttttt["5"]["name"].'</option>
<option ">'.$counttttt["6"]["name"].'</option>
<option ">'.$counttttt["7"]["name"].'</option>
<option ">'.$counttttt["8"]["name"].'</option>
<option ">'.$counttttt["9"]["name"].'</option>
<option ">'.$counttttt["10"]["name"].'</option>
<option >'.$counttttt["11"]["name"].'</option>
<option >'.$counttttt["12"]["name"].'</option>
<option >'.$counttttt["13"]["name"].'</option>
<option >'.$counttttt["14"]["name"].'</option>
<option >'.$counttttt["15"]["name"].'</option>
<option >'.$counttttt["16"]["name"].'</option>
<option >'.$counttttt["17"]["name"].'</option>
<option >'.$counttttt["18"]["name"].'</option>
<option >'.$counttttt["19"]["name"].'</option>
<option >'.$counttttt["20"]["name"].'</option>
<option >'.$counttttt["21"]["name"].'</option>
<option >'.$counttttt["22"]["name"].'</option>
<option >'.$counttttt["23"]["name"].'</option>
<option >'.$counttttt["24"]["name"].'</option>
<option >'.$counttttt["25"]["name"].'</option>
<option >'.$counttttt["26"]["name"].'</option>
<option >'.$counttttt["27"]["name"].'</option>
<option >'.$counttttt["28"]["name"].'</option>
<option >'.$counttttt["29"]["name"].'</option>
<option >'.$counttttt["30"]["name"].'</option>
<option >'.$counttttt["31"]["name"].'</option>
<option >'.$counttttt["32"]["name"].'</option>
<option >'.$counttttt["33"]["name"].'</option>
<option >'.$counttttt["34"]["name"].'</option>
<option >'.$counttttt["35"]["name"].'</option>
<option >'.$counttttt["36"]["name"].'</option>
<option >'.$counttttt["37"]["name"].'</option>
<option >'.$counttttt["38"]["name"].'</option>
<option >'.$counttttt["39"]["name"].'</option>
<option >'.$counttttt["40"]["name"].'</option>
<option >'.$counttttt["41"]["name"].'</option>
<option >'.$counttttt["42"]["name"].'</option>
<option >'.$counttttt["43"]["name"].'</option>
<option >'.$counttttt["44"]["name"].'</option>
<option >'.$counttttt["45"]["name"].'</option>
<option >'.$counttttt["46"]["name"].'</option>
<option >'.$counttttt["47"]["name"].'</option>
<option >'.$counttttt["48"]["name"].'</option>
<option >'.$counttttt["49"]["name"].'</option>
<option >'.$counttttt["50"]["name"].'</option>
<option >'.$counttttt["51"]["name"].'</option>
<option >'.$counttttt["52"]["name"].'</option>
<option >'.$counttttt["53"]["name"].'</option>
<option >'.$counttttt["54"]["name"].'</option>
<option >'.$counttttt["55"]["name"].'</option>
<option >'.$counttttt["56"]["name"].'</option>
<option >'.$counttttt["57"]["name"].'</option>
<option >'.$counttttt["58"]["name"].'</option>
<option >'.$counttttt["59"]["name"].'</option>
<option >'.$counttttt["60"]["name"].'</option>
<option >'.$counttttt["61"]["name"].'</option>
<option >'.$counttttt["62"]["name"].'</option>
<option >'.$counttttt["63"]["name"].'</option>
<option >'.$counttttt["64"]["name"].'</option>
<option >'.$counttttt["65"]["name"].'</option>
<option >'.$counttttt["66"]["name"].'</option>
<option >'.$counttttt["67"]["name"].'</option>
<option >'.$counttttt["68"]["name"].'</option>
<option >'.$counttttt["69"]["name"].'</option>
<option >'.$counttttt["70"]["name"].'</option>
<option >'.$counttttt["71"]["name"].'</option>
<option >'.$counttttt["72"]["name"].'</option>
<option >'.$counttttt["73"]["name"].'</option>
<option >'.$counttttt["74"]["name"].'</option>
<option >'.$counttttt["75"]["name"].'</option>
<option >'.$counttttt["76"]["name"].'</option>
<option >'.$counttttt["77"]["name"].'</option>
<option >'.$counttttt["78"]["name"].'</option>
<option >'.$counttttt["79"]["name"].'</option>
<option >'.$counttttt["80"]["name"].'</option>
<option >'.$counttttt["81"]["name"].'</option>
<option >'.$counttttt["82"]["name"].'</option>
<option >'.$counttttt["83"]["name"].'</option>
<option >'.$counttttt["84"]["name"].'</option>
<option >'.$counttttt["85"]["name"].'</option>
<option >'.$counttttt["86"]["name"].'</option>
<option >'.$counttttt["87"]["name"].'</option>
<option >'.$counttttt["88"]["name"].'</option>
<option >'.$counttttt["89"]["name"].'</option>
<option >'.$counttttt["90"]["name"].'</option>
<option >'.$counttttt["91"]["name"].'</option>
<option >'.$counttttt["92"]["name"].'</option>
<option >'.$counttttt["93"]["name"].'</option>
<option >'.$counttttt["94"]["name"].'</option>
<option >'.$counttttt["95"]["name"].'</option>
<option >'.$counttttt["96"]["name"].'</option>
<option >'.$counttttt["97"]["name"].'</option>
<option >'.$counttttt["98"]["name"].'</option>
<option >'.$counttttt["99"]["name"].'</option>
<option >'.$counttttt["100"]["name"].'</option>
<option >'.$counttttt["101"]["name"].'</option>
<option >'.$counttttt["102"]["name"].'</option>
<option >'.$counttttt["103"]["name"].'</option>
<option >'.$counttttt["104"]["name"].'</option>
<option >'.$counttttt["105"]["name"].'</option>
<option >'.$counttttt["106"]["name"].'</option>
<option >'.$counttttt["107"]["name"].'</option>


                 ';
        }

        if($counttttt_count==109)
        {
            $optsazi='
            <option ">'.$counttttt["0"]["name"].'</option>
<option ">'.$counttttt["1"]["name"].'</option>
<option ">'.$counttttt["2"]["name"].'</option>
<option ">'.$counttttt["3"]["name"].'</option>
<option ">'.$counttttt["4"]["name"].'</option>
<option ">'.$counttttt["5"]["name"].'</option>
<option ">'.$counttttt["6"]["name"].'</option>
<option ">'.$counttttt["7"]["name"].'</option>
<option ">'.$counttttt["8"]["name"].'</option>
<option ">'.$counttttt["9"]["name"].'</option>
<option ">'.$counttttt["10"]["name"].'</option>
<option >'.$counttttt["11"]["name"].'</option>
<option >'.$counttttt["12"]["name"].'</option>
<option >'.$counttttt["13"]["name"].'</option>
<option >'.$counttttt["14"]["name"].'</option>
<option >'.$counttttt["15"]["name"].'</option>
<option >'.$counttttt["16"]["name"].'</option>
<option >'.$counttttt["17"]["name"].'</option>
<option >'.$counttttt["18"]["name"].'</option>
<option >'.$counttttt["19"]["name"].'</option>
<option >'.$counttttt["20"]["name"].'</option>
<option >'.$counttttt["21"]["name"].'</option>
<option >'.$counttttt["22"]["name"].'</option>
<option >'.$counttttt["23"]["name"].'</option>
<option >'.$counttttt["24"]["name"].'</option>
<option >'.$counttttt["25"]["name"].'</option>
<option >'.$counttttt["26"]["name"].'</option>
<option >'.$counttttt["27"]["name"].'</option>
<option >'.$counttttt["28"]["name"].'</option>
<option >'.$counttttt["29"]["name"].'</option>
<option >'.$counttttt["30"]["name"].'</option>
<option >'.$counttttt["31"]["name"].'</option>
<option >'.$counttttt["32"]["name"].'</option>
<option >'.$counttttt["33"]["name"].'</option>
<option >'.$counttttt["34"]["name"].'</option>
<option >'.$counttttt["35"]["name"].'</option>
<option >'.$counttttt["36"]["name"].'</option>
<option >'.$counttttt["37"]["name"].'</option>
<option >'.$counttttt["38"]["name"].'</option>
<option >'.$counttttt["39"]["name"].'</option>
<option >'.$counttttt["40"]["name"].'</option>
<option >'.$counttttt["41"]["name"].'</option>
<option >'.$counttttt["42"]["name"].'</option>
<option >'.$counttttt["43"]["name"].'</option>
<option >'.$counttttt["44"]["name"].'</option>
<option >'.$counttttt["45"]["name"].'</option>
<option >'.$counttttt["46"]["name"].'</option>
<option >'.$counttttt["47"]["name"].'</option>
<option >'.$counttttt["48"]["name"].'</option>
<option >'.$counttttt["49"]["name"].'</option>
<option >'.$counttttt["50"]["name"].'</option>
<option >'.$counttttt["51"]["name"].'</option>
<option >'.$counttttt["52"]["name"].'</option>
<option >'.$counttttt["53"]["name"].'</option>
<option >'.$counttttt["54"]["name"].'</option>
<option >'.$counttttt["55"]["name"].'</option>
<option >'.$counttttt["56"]["name"].'</option>
<option >'.$counttttt["57"]["name"].'</option>
<option >'.$counttttt["58"]["name"].'</option>
<option >'.$counttttt["59"]["name"].'</option>
<option >'.$counttttt["60"]["name"].'</option>
<option >'.$counttttt["61"]["name"].'</option>
<option >'.$counttttt["62"]["name"].'</option>
<option >'.$counttttt["63"]["name"].'</option>
<option >'.$counttttt["64"]["name"].'</option>
<option >'.$counttttt["65"]["name"].'</option>
<option >'.$counttttt["66"]["name"].'</option>
<option >'.$counttttt["67"]["name"].'</option>
<option >'.$counttttt["68"]["name"].'</option>
<option >'.$counttttt["69"]["name"].'</option>
<option >'.$counttttt["70"]["name"].'</option>
<option >'.$counttttt["71"]["name"].'</option>
<option >'.$counttttt["72"]["name"].'</option>
<option >'.$counttttt["73"]["name"].'</option>
<option >'.$counttttt["74"]["name"].'</option>
<option >'.$counttttt["75"]["name"].'</option>
<option >'.$counttttt["76"]["name"].'</option>
<option >'.$counttttt["77"]["name"].'</option>
<option >'.$counttttt["78"]["name"].'</option>
<option >'.$counttttt["79"]["name"].'</option>
<option >'.$counttttt["80"]["name"].'</option>
<option >'.$counttttt["81"]["name"].'</option>
<option >'.$counttttt["82"]["name"].'</option>
<option >'.$counttttt["83"]["name"].'</option>
<option >'.$counttttt["84"]["name"].'</option>
<option >'.$counttttt["85"]["name"].'</option>
<option >'.$counttttt["86"]["name"].'</option>
<option >'.$counttttt["87"]["name"].'</option>
<option >'.$counttttt["88"]["name"].'</option>
<option >'.$counttttt["89"]["name"].'</option>
<option >'.$counttttt["90"]["name"].'</option>
<option >'.$counttttt["91"]["name"].'</option>
<option >'.$counttttt["92"]["name"].'</option>
<option >'.$counttttt["93"]["name"].'</option>
<option >'.$counttttt["94"]["name"].'</option>
<option >'.$counttttt["95"]["name"].'</option>
<option >'.$counttttt["96"]["name"].'</option>
<option >'.$counttttt["97"]["name"].'</option>
<option >'.$counttttt["98"]["name"].'</option>
<option >'.$counttttt["99"]["name"].'</option>
<option >'.$counttttt["100"]["name"].'</option>
<option >'.$counttttt["101"]["name"].'</option>
<option >'.$counttttt["102"]["name"].'</option>
<option >'.$counttttt["103"]["name"].'</option>
<option >'.$counttttt["104"]["name"].'</option>
<option >'.$counttttt["105"]["name"].'</option>
<option >'.$counttttt["106"]["name"].'</option>
<option >'.$counttttt["107"]["name"].'</option>
<option >'.$counttttt["108"]["name"].'</option>


                 ';
        }

        if($counttttt_count==112)
        {
            $optsazi='
            <option ">'.$counttttt["0"]["name"].'</option>
<option ">'.$counttttt["1"]["name"].'</option>
<option ">'.$counttttt["2"]["name"].'</option>
<option ">'.$counttttt["3"]["name"].'</option>
<option ">'.$counttttt["4"]["name"].'</option>
<option ">'.$counttttt["5"]["name"].'</option>
<option ">'.$counttttt["6"]["name"].'</option>
<option ">'.$counttttt["7"]["name"].'</option>
<option ">'.$counttttt["8"]["name"].'</option>
<option ">'.$counttttt["9"]["name"].'</option>
<option ">'.$counttttt["10"]["name"].'</option>
<option >'.$counttttt["11"]["name"].'</option>
<option >'.$counttttt["12"]["name"].'</option>
<option >'.$counttttt["13"]["name"].'</option>
<option >'.$counttttt["14"]["name"].'</option>
<option >'.$counttttt["15"]["name"].'</option>
<option >'.$counttttt["16"]["name"].'</option>
<option >'.$counttttt["17"]["name"].'</option>
<option >'.$counttttt["18"]["name"].'</option>
<option >'.$counttttt["19"]["name"].'</option>
<option >'.$counttttt["20"]["name"].'</option>
<option >'.$counttttt["21"]["name"].'</option>
<option >'.$counttttt["22"]["name"].'</option>
<option >'.$counttttt["23"]["name"].'</option>
<option >'.$counttttt["24"]["name"].'</option>
<option >'.$counttttt["25"]["name"].'</option>
<option >'.$counttttt["26"]["name"].'</option>
<option >'.$counttttt["27"]["name"].'</option>
<option >'.$counttttt["28"]["name"].'</option>
<option >'.$counttttt["29"]["name"].'</option>
<option >'.$counttttt["30"]["name"].'</option>
<option >'.$counttttt["31"]["name"].'</option>
<option >'.$counttttt["32"]["name"].'</option>
<option >'.$counttttt["33"]["name"].'</option>
<option >'.$counttttt["34"]["name"].'</option>
<option >'.$counttttt["35"]["name"].'</option>
<option >'.$counttttt["36"]["name"].'</option>
<option >'.$counttttt["37"]["name"].'</option>
<option >'.$counttttt["38"]["name"].'</option>
<option >'.$counttttt["39"]["name"].'</option>
<option >'.$counttttt["40"]["name"].'</option>
<option >'.$counttttt["41"]["name"].'</option>
<option >'.$counttttt["42"]["name"].'</option>
<option >'.$counttttt["43"]["name"].'</option>
<option >'.$counttttt["44"]["name"].'</option>
<option >'.$counttttt["45"]["name"].'</option>
<option >'.$counttttt["46"]["name"].'</option>
<option >'.$counttttt["47"]["name"].'</option>
<option >'.$counttttt["48"]["name"].'</option>
<option >'.$counttttt["49"]["name"].'</option>
<option >'.$counttttt["50"]["name"].'</option>
<option >'.$counttttt["51"]["name"].'</option>
<option >'.$counttttt["52"]["name"].'</option>
<option >'.$counttttt["53"]["name"].'</option>
<option >'.$counttttt["54"]["name"].'</option>
<option >'.$counttttt["55"]["name"].'</option>
<option >'.$counttttt["56"]["name"].'</option>
<option >'.$counttttt["57"]["name"].'</option>
<option >'.$counttttt["58"]["name"].'</option>
<option >'.$counttttt["59"]["name"].'</option>
<option >'.$counttttt["60"]["name"].'</option>
<option >'.$counttttt["61"]["name"].'</option>
<option >'.$counttttt["62"]["name"].'</option>
<option >'.$counttttt["63"]["name"].'</option>
<option >'.$counttttt["64"]["name"].'</option>
<option >'.$counttttt["65"]["name"].'</option>
<option >'.$counttttt["66"]["name"].'</option>
<option >'.$counttttt["67"]["name"].'</option>
<option >'.$counttttt["68"]["name"].'</option>
<option >'.$counttttt["69"]["name"].'</option>
<option >'.$counttttt["70"]["name"].'</option>
<option >'.$counttttt["71"]["name"].'</option>
<option >'.$counttttt["72"]["name"].'</option>
<option >'.$counttttt["73"]["name"].'</option>
<option >'.$counttttt["74"]["name"].'</option>
<option >'.$counttttt["75"]["name"].'</option>
<option >'.$counttttt["76"]["name"].'</option>
<option >'.$counttttt["77"]["name"].'</option>
<option >'.$counttttt["78"]["name"].'</option>
<option >'.$counttttt["79"]["name"].'</option>
<option >'.$counttttt["80"]["name"].'</option>
<option >'.$counttttt["81"]["name"].'</option>
<option >'.$counttttt["82"]["name"].'</option>
<option >'.$counttttt["83"]["name"].'</option>
<option >'.$counttttt["84"]["name"].'</option>
<option >'.$counttttt["85"]["name"].'</option>
<option >'.$counttttt["86"]["name"].'</option>
<option >'.$counttttt["87"]["name"].'</option>
<option >'.$counttttt["88"]["name"].'</option>
<option >'.$counttttt["89"]["name"].'</option>
<option >'.$counttttt["90"]["name"].'</option>
<option >'.$counttttt["91"]["name"].'</option>
<option >'.$counttttt["92"]["name"].'</option>
<option >'.$counttttt["93"]["name"].'</option>
<option >'.$counttttt["94"]["name"].'</option>
<option >'.$counttttt["95"]["name"].'</option>
<option >'.$counttttt["96"]["name"].'</option>
<option >'.$counttttt["97"]["name"].'</option>
<option >'.$counttttt["98"]["name"].'</option>
<option >'.$counttttt["99"]["name"].'</option>
<option >'.$counttttt["100"]["name"].'</option>
<option >'.$counttttt["101"]["name"].'</option>
<option >'.$counttttt["102"]["name"].'</option>
<option >'.$counttttt["103"]["name"].'</option>
<option >'.$counttttt["104"]["name"].'</option>
<option >'.$counttttt["105"]["name"].'</option>
<option >'.$counttttt["106"]["name"].'</option>
<option >'.$counttttt["107"]["name"].'</option>
<option >'.$counttttt["108"]["name"].'</option>
<option >'.$counttttt["109"]["name"].'</option>
<option >'.$counttttt["110"]["name"].'</option>
<option >'.$counttttt["111"]["name"].'</option>


                 ';
        }

        if($counttttt_count==133)
        {
            $optsazi='
            <option ">'.$counttttt["0"]["name"].'</option>
<option ">'.$counttttt["1"]["name"].'</option>
<option ">'.$counttttt["2"]["name"].'</option>
<option ">'.$counttttt["3"]["name"].'</option>
<option ">'.$counttttt["4"]["name"].'</option>
<option ">'.$counttttt["5"]["name"].'</option>
<option ">'.$counttttt["6"]["name"].'</option>
<option ">'.$counttttt["7"]["name"].'</option>
<option ">'.$counttttt["8"]["name"].'</option>
<option ">'.$counttttt["9"]["name"].'</option>
<option ">'.$counttttt["10"]["name"].'</option>
<option >'.$counttttt["11"]["name"].'</option>
<option >'.$counttttt["12"]["name"].'</option>
<option >'.$counttttt["13"]["name"].'</option>
<option >'.$counttttt["14"]["name"].'</option>
<option >'.$counttttt["15"]["name"].'</option>
<option >'.$counttttt["16"]["name"].'</option>
<option >'.$counttttt["17"]["name"].'</option>
<option >'.$counttttt["18"]["name"].'</option>
<option >'.$counttttt["19"]["name"].'</option>
<option >'.$counttttt["20"]["name"].'</option>
<option >'.$counttttt["21"]["name"].'</option>
<option >'.$counttttt["22"]["name"].'</option>
<option >'.$counttttt["23"]["name"].'</option>
<option >'.$counttttt["24"]["name"].'</option>
<option >'.$counttttt["25"]["name"].'</option>
<option >'.$counttttt["26"]["name"].'</option>
<option >'.$counttttt["27"]["name"].'</option>
<option >'.$counttttt["28"]["name"].'</option>
<option >'.$counttttt["29"]["name"].'</option>
<option >'.$counttttt["30"]["name"].'</option>
<option >'.$counttttt["31"]["name"].'</option>
<option >'.$counttttt["32"]["name"].'</option>
<option >'.$counttttt["33"]["name"].'</option>
<option >'.$counttttt["34"]["name"].'</option>
<option >'.$counttttt["35"]["name"].'</option>
<option >'.$counttttt["36"]["name"].'</option>
<option >'.$counttttt["37"]["name"].'</option>
<option >'.$counttttt["38"]["name"].'</option>
<option >'.$counttttt["39"]["name"].'</option>
<option >'.$counttttt["40"]["name"].'</option>
<option >'.$counttttt["41"]["name"].'</option>
<option >'.$counttttt["42"]["name"].'</option>
<option >'.$counttttt["43"]["name"].'</option>
<option >'.$counttttt["44"]["name"].'</option>
<option >'.$counttttt["45"]["name"].'</option>
<option >'.$counttttt["46"]["name"].'</option>
<option >'.$counttttt["47"]["name"].'</option>
<option >'.$counttttt["48"]["name"].'</option>
<option >'.$counttttt["49"]["name"].'</option>
<option >'.$counttttt["50"]["name"].'</option>
<option >'.$counttttt["51"]["name"].'</option>
<option >'.$counttttt["52"]["name"].'</option>
<option >'.$counttttt["53"]["name"].'</option>
<option >'.$counttttt["54"]["name"].'</option>
<option >'.$counttttt["55"]["name"].'</option>
<option >'.$counttttt["56"]["name"].'</option>
<option >'.$counttttt["57"]["name"].'</option>
<option >'.$counttttt["58"]["name"].'</option>
<option >'.$counttttt["59"]["name"].'</option>
<option >'.$counttttt["60"]["name"].'</option>
<option >'.$counttttt["61"]["name"].'</option>
<option >'.$counttttt["62"]["name"].'</option>
<option >'.$counttttt["63"]["name"].'</option>
<option >'.$counttttt["64"]["name"].'</option>
<option >'.$counttttt["65"]["name"].'</option>
<option >'.$counttttt["66"]["name"].'</option>
<option >'.$counttttt["67"]["name"].'</option>
<option >'.$counttttt["68"]["name"].'</option>
<option >'.$counttttt["69"]["name"].'</option>
<option >'.$counttttt["70"]["name"].'</option>
<option >'.$counttttt["71"]["name"].'</option>
<option >'.$counttttt["72"]["name"].'</option>
<option >'.$counttttt["73"]["name"].'</option>
<option >'.$counttttt["74"]["name"].'</option>
<option >'.$counttttt["75"]["name"].'</option>
<option >'.$counttttt["76"]["name"].'</option>
<option >'.$counttttt["77"]["name"].'</option>
<option >'.$counttttt["78"]["name"].'</option>
<option >'.$counttttt["79"]["name"].'</option>
<option >'.$counttttt["80"]["name"].'</option>
<option >'.$counttttt["81"]["name"].'</option>
<option >'.$counttttt["82"]["name"].'</option>
<option >'.$counttttt["83"]["name"].'</option>
<option >'.$counttttt["84"]["name"].'</option>
<option >'.$counttttt["85"]["name"].'</option>
<option >'.$counttttt["86"]["name"].'</option>
<option >'.$counttttt["87"]["name"].'</option>
<option >'.$counttttt["88"]["name"].'</option>
<option >'.$counttttt["89"]["name"].'</option>
<option >'.$counttttt["90"]["name"].'</option>
<option >'.$counttttt["91"]["name"].'</option>
<option >'.$counttttt["92"]["name"].'</option>
<option >'.$counttttt["93"]["name"].'</option>
<option >'.$counttttt["94"]["name"].'</option>
<option >'.$counttttt["95"]["name"].'</option>
<option >'.$counttttt["96"]["name"].'</option>
<option >'.$counttttt["97"]["name"].'</option>
<option >'.$counttttt["98"]["name"].'</option>
<option >'.$counttttt["99"]["name"].'</option>
<option >'.$counttttt["100"]["name"].'</option>
<option >'.$counttttt["101"]["name"].'</option>
<option >'.$counttttt["102"]["name"].'</option>
<option >'.$counttttt["103"]["name"].'</option>
<option >'.$counttttt["104"]["name"].'</option>
<option >'.$counttttt["105"]["name"].'</option>
<option >'.$counttttt["106"]["name"].'</option>
<option >'.$counttttt["107"]["name"].'</option>
<option >'.$counttttt["108"]["name"].'</option>
<option >'.$counttttt["109"]["name"].'</option>
<option >'.$counttttt["110"]["name"].'</option>
<option >'.$counttttt["111"]["name"].'</option>
<option >'.$counttttt["112"]["name"].'</option>
<option >'.$counttttt["113"]["name"].'</option>
<option >'.$counttttt["114"]["name"].'</option>
<option >'.$counttttt["115"]["name"].'</option>
<option >'.$counttttt["116"]["name"].'</option>
<option >'.$counttttt["117"]["name"].'</option>
<option >'.$counttttt["118"]["name"].'</option>
<option >'.$counttttt["119"]["name"].'</option>
<option >'.$counttttt["120"]["name"].'</option>
<option >'.$counttttt["121"]["name"].'</option>
<option >'.$counttttt["122"]["name"].'</option>
<option >'.$counttttt["123"]["name"].'</option>
<option >'.$counttttt["124"]["name"].'</option>
<option >'.$counttttt["125"]["name"].'</option>
<option >'.$counttttt["126"]["name"].'</option>
<option >'.$counttttt["127"]["name"].'</option>
<option >'.$counttttt["128"]["name"].'</option>
<option >'.$counttttt["129"]["name"].'</option>
<option >'.$counttttt["130"]["name"].'</option>
<option >'.$counttttt["131"]["name"].'</option>
<option >'.$counttttt["132"]["name"].'</option>


                 ';
        }
        if($counttttt_count==143)
        {
            $optsazi='
            <option ">'.$counttttt["0"]["name"].'</option>
<option ">'.$counttttt["1"]["name"].'</option>
<option ">'.$counttttt["2"]["name"].'</option>
<option ">'.$counttttt["3"]["name"].'</option>
<option ">'.$counttttt["4"]["name"].'</option>
<option ">'.$counttttt["5"]["name"].'</option>
<option ">'.$counttttt["6"]["name"].'</option>
<option ">'.$counttttt["7"]["name"].'</option>
<option ">'.$counttttt["8"]["name"].'</option>
<option ">'.$counttttt["9"]["name"].'</option>
<option ">'.$counttttt["10"]["name"].'</option>
<option >'.$counttttt["11"]["name"].'</option>
<option >'.$counttttt["12"]["name"].'</option>
<option >'.$counttttt["13"]["name"].'</option>
<option >'.$counttttt["14"]["name"].'</option>
<option >'.$counttttt["15"]["name"].'</option>
<option >'.$counttttt["16"]["name"].'</option>
<option >'.$counttttt["17"]["name"].'</option>
<option >'.$counttttt["18"]["name"].'</option>
<option >'.$counttttt["19"]["name"].'</option>
<option >'.$counttttt["20"]["name"].'</option>
<option >'.$counttttt["21"]["name"].'</option>
<option >'.$counttttt["22"]["name"].'</option>
<option >'.$counttttt["23"]["name"].'</option>
<option >'.$counttttt["24"]["name"].'</option>
<option >'.$counttttt["25"]["name"].'</option>
<option >'.$counttttt["26"]["name"].'</option>
<option >'.$counttttt["27"]["name"].'</option>
<option >'.$counttttt["28"]["name"].'</option>
<option >'.$counttttt["29"]["name"].'</option>
<option >'.$counttttt["30"]["name"].'</option>
<option >'.$counttttt["31"]["name"].'</option>
<option >'.$counttttt["32"]["name"].'</option>
<option >'.$counttttt["33"]["name"].'</option>
<option >'.$counttttt["34"]["name"].'</option>
<option >'.$counttttt["35"]["name"].'</option>
<option >'.$counttttt["36"]["name"].'</option>
<option >'.$counttttt["37"]["name"].'</option>
<option >'.$counttttt["38"]["name"].'</option>
<option >'.$counttttt["39"]["name"].'</option>
<option >'.$counttttt["40"]["name"].'</option>
<option >'.$counttttt["41"]["name"].'</option>
<option >'.$counttttt["42"]["name"].'</option>
<option >'.$counttttt["43"]["name"].'</option>
<option >'.$counttttt["44"]["name"].'</option>
<option >'.$counttttt["45"]["name"].'</option>
<option >'.$counttttt["46"]["name"].'</option>
<option >'.$counttttt["47"]["name"].'</option>
<option >'.$counttttt["48"]["name"].'</option>
<option >'.$counttttt["49"]["name"].'</option>
<option >'.$counttttt["50"]["name"].'</option>
<option >'.$counttttt["51"]["name"].'</option>
<option >'.$counttttt["52"]["name"].'</option>
<option >'.$counttttt["53"]["name"].'</option>
<option >'.$counttttt["54"]["name"].'</option>
<option >'.$counttttt["55"]["name"].'</option>
<option >'.$counttttt["56"]["name"].'</option>
<option >'.$counttttt["57"]["name"].'</option>
<option >'.$counttttt["58"]["name"].'</option>
<option >'.$counttttt["59"]["name"].'</option>
<option >'.$counttttt["60"]["name"].'</option>
<option >'.$counttttt["61"]["name"].'</option>
<option >'.$counttttt["62"]["name"].'</option>
<option >'.$counttttt["63"]["name"].'</option>
<option >'.$counttttt["64"]["name"].'</option>
<option >'.$counttttt["65"]["name"].'</option>
<option >'.$counttttt["66"]["name"].'</option>
<option >'.$counttttt["67"]["name"].'</option>
<option >'.$counttttt["68"]["name"].'</option>
<option >'.$counttttt["69"]["name"].'</option>
<option >'.$counttttt["70"]["name"].'</option>
<option >'.$counttttt["71"]["name"].'</option>
<option >'.$counttttt["72"]["name"].'</option>
<option >'.$counttttt["73"]["name"].'</option>
<option >'.$counttttt["74"]["name"].'</option>
<option >'.$counttttt["75"]["name"].'</option>
<option >'.$counttttt["76"]["name"].'</option>
<option >'.$counttttt["77"]["name"].'</option>
<option >'.$counttttt["78"]["name"].'</option>
<option >'.$counttttt["79"]["name"].'</option>
<option >'.$counttttt["80"]["name"].'</option>
<option >'.$counttttt["81"]["name"].'</option>
<option >'.$counttttt["82"]["name"].'</option>
<option >'.$counttttt["83"]["name"].'</option>
<option >'.$counttttt["84"]["name"].'</option>
<option >'.$counttttt["85"]["name"].'</option>
<option >'.$counttttt["86"]["name"].'</option>
<option >'.$counttttt["87"]["name"].'</option>
<option >'.$counttttt["88"]["name"].'</option>
<option >'.$counttttt["89"]["name"].'</option>
<option >'.$counttttt["90"]["name"].'</option>
<option >'.$counttttt["91"]["name"].'</option>
<option >'.$counttttt["92"]["name"].'</option>
<option >'.$counttttt["93"]["name"].'</option>
<option >'.$counttttt["94"]["name"].'</option>
<option >'.$counttttt["95"]["name"].'</option>
<option >'.$counttttt["96"]["name"].'</option>
<option >'.$counttttt["97"]["name"].'</option>
<option >'.$counttttt["98"]["name"].'</option>
<option >'.$counttttt["99"]["name"].'</option>
<option >'.$counttttt["100"]["name"].'</option>
<option >'.$counttttt["101"]["name"].'</option>
<option >'.$counttttt["102"]["name"].'</option>
<option >'.$counttttt["103"]["name"].'</option>
<option >'.$counttttt["104"]["name"].'</option>
<option >'.$counttttt["105"]["name"].'</option>
<option >'.$counttttt["106"]["name"].'</option>
<option >'.$counttttt["107"]["name"].'</option>
<option >'.$counttttt["108"]["name"].'</option>
<option >'.$counttttt["109"]["name"].'</option>
<option >'.$counttttt["110"]["name"].'</option>
<option >'.$counttttt["111"]["name"].'</option>
<option >'.$counttttt["112"]["name"].'</option>
<option >'.$counttttt["113"]["name"].'</option>
<option >'.$counttttt["114"]["name"].'</option>
<option >'.$counttttt["115"]["name"].'</option>
<option >'.$counttttt["116"]["name"].'</option>
<option >'.$counttttt["117"]["name"].'</option>
<option >'.$counttttt["118"]["name"].'</option>
<option >'.$counttttt["119"]["name"].'</option>
<option >'.$counttttt["120"]["name"].'</option>
<option >'.$counttttt["121"]["name"].'</option>
<option >'.$counttttt["122"]["name"].'</option>
<option >'.$counttttt["123"]["name"].'</option>
<option >'.$counttttt["124"]["name"].'</option>
<option >'.$counttttt["125"]["name"].'</option>
<option >'.$counttttt["126"]["name"].'</option>
<option >'.$counttttt["127"]["name"].'</option>
<option >'.$counttttt["128"]["name"].'</option>
<option >'.$counttttt["129"]["name"].'</option>
<option >'.$counttttt["130"]["name"].'</option>
<option >'.$counttttt["131"]["name"].'</option>
<option >'.$counttttt["132"]["name"].'</option>
<option >'.$counttttt["133"]["name"].'</option>
<option >'.$counttttt["134"]["name"].'</option>
<option >'.$counttttt["135"]["name"].'</option>
<option >'.$counttttt["136"]["name"].'</option>
<option >'.$counttttt["137"]["name"].'</option>
<option >'.$counttttt["138"]["name"].'</option>
<option >'.$counttttt["139"]["name"].'</option>
<option >'.$counttttt["140"]["name"].'</option>
<option >'.$counttttt["141"]["name"].'</option>
<option >'.$counttttt["142"]["name"].'</option>


                 ';
        }

        if($counttttt_count==149)
        {
            $optsazi='
            <option ">'.$counttttt["0"]["name"].'</option>
<option ">'.$counttttt["1"]["name"].'</option>
<option ">'.$counttttt["2"]["name"].'</option>
<option ">'.$counttttt["3"]["name"].'</option>
<option ">'.$counttttt["4"]["name"].'</option>
<option ">'.$counttttt["5"]["name"].'</option>
<option ">'.$counttttt["6"]["name"].'</option>
<option ">'.$counttttt["7"]["name"].'</option>
<option ">'.$counttttt["8"]["name"].'</option>
<option ">'.$counttttt["9"]["name"].'</option>
<option ">'.$counttttt["10"]["name"].'</option>
<option >'.$counttttt["11"]["name"].'</option>
<option >'.$counttttt["12"]["name"].'</option>
<option >'.$counttttt["13"]["name"].'</option>
<option >'.$counttttt["14"]["name"].'</option>
<option >'.$counttttt["15"]["name"].'</option>
<option >'.$counttttt["16"]["name"].'</option>
<option >'.$counttttt["17"]["name"].'</option>
<option >'.$counttttt["18"]["name"].'</option>
<option >'.$counttttt["19"]["name"].'</option>
<option >'.$counttttt["20"]["name"].'</option>
<option >'.$counttttt["21"]["name"].'</option>
<option >'.$counttttt["22"]["name"].'</option>
<option >'.$counttttt["23"]["name"].'</option>
<option >'.$counttttt["24"]["name"].'</option>
<option >'.$counttttt["25"]["name"].'</option>
<option >'.$counttttt["26"]["name"].'</option>
<option >'.$counttttt["27"]["name"].'</option>
<option >'.$counttttt["28"]["name"].'</option>
<option >'.$counttttt["29"]["name"].'</option>
<option >'.$counttttt["30"]["name"].'</option>
<option >'.$counttttt["31"]["name"].'</option>
<option >'.$counttttt["32"]["name"].'</option>
<option >'.$counttttt["33"]["name"].'</option>
<option >'.$counttttt["34"]["name"].'</option>
<option >'.$counttttt["35"]["name"].'</option>
<option >'.$counttttt["36"]["name"].'</option>
<option >'.$counttttt["37"]["name"].'</option>
<option >'.$counttttt["38"]["name"].'</option>
<option >'.$counttttt["39"]["name"].'</option>
<option >'.$counttttt["40"]["name"].'</option>
<option >'.$counttttt["41"]["name"].'</option>
<option >'.$counttttt["42"]["name"].'</option>
<option >'.$counttttt["43"]["name"].'</option>
<option >'.$counttttt["44"]["name"].'</option>
<option >'.$counttttt["45"]["name"].'</option>
<option >'.$counttttt["46"]["name"].'</option>
<option >'.$counttttt["47"]["name"].'</option>
<option >'.$counttttt["48"]["name"].'</option>
<option >'.$counttttt["49"]["name"].'</option>
<option >'.$counttttt["50"]["name"].'</option>
<option >'.$counttttt["51"]["name"].'</option>
<option >'.$counttttt["52"]["name"].'</option>
<option >'.$counttttt["53"]["name"].'</option>
<option >'.$counttttt["54"]["name"].'</option>
<option >'.$counttttt["55"]["name"].'</option>
<option >'.$counttttt["56"]["name"].'</option>
<option >'.$counttttt["57"]["name"].'</option>
<option >'.$counttttt["58"]["name"].'</option>
<option >'.$counttttt["59"]["name"].'</option>
<option >'.$counttttt["60"]["name"].'</option>
<option >'.$counttttt["61"]["name"].'</option>
<option >'.$counttttt["62"]["name"].'</option>
<option >'.$counttttt["63"]["name"].'</option>
<option >'.$counttttt["64"]["name"].'</option>
<option >'.$counttttt["65"]["name"].'</option>
<option >'.$counttttt["66"]["name"].'</option>
<option >'.$counttttt["67"]["name"].'</option>
<option >'.$counttttt["68"]["name"].'</option>
<option >'.$counttttt["69"]["name"].'</option>
<option >'.$counttttt["70"]["name"].'</option>
<option >'.$counttttt["71"]["name"].'</option>
<option >'.$counttttt["72"]["name"].'</option>
<option >'.$counttttt["73"]["name"].'</option>
<option >'.$counttttt["74"]["name"].'</option>
<option >'.$counttttt["75"]["name"].'</option>
<option >'.$counttttt["76"]["name"].'</option>
<option >'.$counttttt["77"]["name"].'</option>
<option >'.$counttttt["78"]["name"].'</option>
<option >'.$counttttt["79"]["name"].'</option>
<option >'.$counttttt["80"]["name"].'</option>
<option >'.$counttttt["81"]["name"].'</option>
<option >'.$counttttt["82"]["name"].'</option>
<option >'.$counttttt["83"]["name"].'</option>
<option >'.$counttttt["84"]["name"].'</option>
<option >'.$counttttt["85"]["name"].'</option>
<option >'.$counttttt["86"]["name"].'</option>
<option >'.$counttttt["87"]["name"].'</option>
<option >'.$counttttt["88"]["name"].'</option>
<option >'.$counttttt["89"]["name"].'</option>
<option >'.$counttttt["90"]["name"].'</option>
<option >'.$counttttt["91"]["name"].'</option>
<option >'.$counttttt["92"]["name"].'</option>
<option >'.$counttttt["93"]["name"].'</option>
<option >'.$counttttt["94"]["name"].'</option>
<option >'.$counttttt["95"]["name"].'</option>
<option >'.$counttttt["96"]["name"].'</option>
<option >'.$counttttt["97"]["name"].'</option>
<option >'.$counttttt["98"]["name"].'</option>
<option >'.$counttttt["99"]["name"].'</option>
<option >'.$counttttt["100"]["name"].'</option>
<option >'.$counttttt["101"]["name"].'</option>
<option >'.$counttttt["102"]["name"].'</option>
<option >'.$counttttt["103"]["name"].'</option>
<option >'.$counttttt["104"]["name"].'</option>
<option >'.$counttttt["105"]["name"].'</option>
<option >'.$counttttt["106"]["name"].'</option>
<option >'.$counttttt["107"]["name"].'</option>
<option >'.$counttttt["108"]["name"].'</option>
<option >'.$counttttt["109"]["name"].'</option>
<option >'.$counttttt["110"]["name"].'</option>
<option >'.$counttttt["111"]["name"].'</option>
<option >'.$counttttt["112"]["name"].'</option>
<option >'.$counttttt["113"]["name"].'</option>
<option >'.$counttttt["114"]["name"].'</option>
<option >'.$counttttt["115"]["name"].'</option>
<option >'.$counttttt["116"]["name"].'</option>
<option >'.$counttttt["117"]["name"].'</option>
<option >'.$counttttt["118"]["name"].'</option>
<option >'.$counttttt["119"]["name"].'</option>
<option >'.$counttttt["120"]["name"].'</option>
<option >'.$counttttt["121"]["name"].'</option>
<option >'.$counttttt["122"]["name"].'</option>
<option >'.$counttttt["123"]["name"].'</option>
<option >'.$counttttt["124"]["name"].'</option>
<option >'.$counttttt["125"]["name"].'</option>
<option >'.$counttttt["126"]["name"].'</option>
<option >'.$counttttt["127"]["name"].'</option>
<option >'.$counttttt["128"]["name"].'</option>
<option >'.$counttttt["129"]["name"].'</option>
<option >'.$counttttt["130"]["name"].'</option>
<option >'.$counttttt["131"]["name"].'</option>
<option >'.$counttttt["132"]["name"].'</option>
<option >'.$counttttt["133"]["name"].'</option>
<option >'.$counttttt["134"]["name"].'</option>
<option >'.$counttttt["135"]["name"].'</option>
<option >'.$counttttt["136"]["name"].'</option>
<option >'.$counttttt["137"]["name"].'</option>
<option >'.$counttttt["138"]["name"].'</option>
<option >'.$counttttt["139"]["name"].'</option>
<option >'.$counttttt["140"]["name"].'</option>
<option >'.$counttttt["141"]["name"].'</option>
<option >'.$counttttt["142"]["name"].'</option>
<option >'.$counttttt["143"]["name"].'</option>
<option >'.$counttttt["144"]["name"].'</option>
<option >'.$counttttt["145"]["name"].'</option>
<option >'.$counttttt["146"]["name"].'</option>
<option >'.$counttttt["147"]["name"].'</option>
<option >'.$counttttt["148"]["name"].'</option>


                 ';
        }

        if($counttttt_count==185)
        {
            $optsazi='
            <option ">'.$counttttt["0"]["name"].'</option>
<option ">'.$counttttt["1"]["name"].'</option>
<option ">'.$counttttt["2"]["name"].'</option>
<option ">'.$counttttt["3"]["name"].'</option>
<option ">'.$counttttt["4"]["name"].'</option>
<option ">'.$counttttt["5"]["name"].'</option>
<option ">'.$counttttt["6"]["name"].'</option>
<option ">'.$counttttt["7"]["name"].'</option>
<option ">'.$counttttt["8"]["name"].'</option>
<option ">'.$counttttt["9"]["name"].'</option>
<option ">'.$counttttt["10"]["name"].'</option>
<option >'.$counttttt["11"]["name"].'</option>
<option >'.$counttttt["12"]["name"].'</option>
<option >'.$counttttt["13"]["name"].'</option>
<option >'.$counttttt["14"]["name"].'</option>
<option >'.$counttttt["15"]["name"].'</option>
<option >'.$counttttt["16"]["name"].'</option>
<option >'.$counttttt["17"]["name"].'</option>
<option >'.$counttttt["18"]["name"].'</option>
<option >'.$counttttt["19"]["name"].'</option>
<option >'.$counttttt["20"]["name"].'</option>
<option >'.$counttttt["21"]["name"].'</option>
<option >'.$counttttt["22"]["name"].'</option>
<option >'.$counttttt["23"]["name"].'</option>
<option >'.$counttttt["24"]["name"].'</option>
<option >'.$counttttt["25"]["name"].'</option>
<option >'.$counttttt["26"]["name"].'</option>
<option >'.$counttttt["27"]["name"].'</option>
<option >'.$counttttt["28"]["name"].'</option>
<option >'.$counttttt["29"]["name"].'</option>
<option >'.$counttttt["30"]["name"].'</option>
<option >'.$counttttt["31"]["name"].'</option>
<option >'.$counttttt["32"]["name"].'</option>
<option >'.$counttttt["33"]["name"].'</option>
<option >'.$counttttt["34"]["name"].'</option>
<option >'.$counttttt["35"]["name"].'</option>
<option >'.$counttttt["36"]["name"].'</option>
<option >'.$counttttt["37"]["name"].'</option>
<option >'.$counttttt["38"]["name"].'</option>
<option >'.$counttttt["39"]["name"].'</option>
<option >'.$counttttt["40"]["name"].'</option>
<option >'.$counttttt["41"]["name"].'</option>
<option >'.$counttttt["42"]["name"].'</option>
<option >'.$counttttt["43"]["name"].'</option>
<option >'.$counttttt["44"]["name"].'</option>
<option >'.$counttttt["45"]["name"].'</option>
<option >'.$counttttt["46"]["name"].'</option>
<option >'.$counttttt["47"]["name"].'</option>
<option >'.$counttttt["48"]["name"].'</option>
<option >'.$counttttt["49"]["name"].'</option>
<option >'.$counttttt["50"]["name"].'</option>
<option >'.$counttttt["51"]["name"].'</option>
<option >'.$counttttt["52"]["name"].'</option>
<option >'.$counttttt["53"]["name"].'</option>
<option >'.$counttttt["54"]["name"].'</option>
<option >'.$counttttt["55"]["name"].'</option>
<option >'.$counttttt["56"]["name"].'</option>
<option >'.$counttttt["57"]["name"].'</option>
<option >'.$counttttt["58"]["name"].'</option>
<option >'.$counttttt["59"]["name"].'</option>
<option >'.$counttttt["60"]["name"].'</option>
<option >'.$counttttt["61"]["name"].'</option>
<option >'.$counttttt["62"]["name"].'</option>
<option >'.$counttttt["63"]["name"].'</option>
<option >'.$counttttt["64"]["name"].'</option>
<option >'.$counttttt["65"]["name"].'</option>
<option >'.$counttttt["66"]["name"].'</option>
<option >'.$counttttt["67"]["name"].'</option>
<option >'.$counttttt["68"]["name"].'</option>
<option >'.$counttttt["69"]["name"].'</option>
<option >'.$counttttt["70"]["name"].'</option>
<option >'.$counttttt["71"]["name"].'</option>
<option >'.$counttttt["72"]["name"].'</option>
<option >'.$counttttt["73"]["name"].'</option>
<option >'.$counttttt["74"]["name"].'</option>
<option >'.$counttttt["75"]["name"].'</option>
<option >'.$counttttt["76"]["name"].'</option>
<option >'.$counttttt["77"]["name"].'</option>
<option >'.$counttttt["78"]["name"].'</option>
<option >'.$counttttt["79"]["name"].'</option>
<option >'.$counttttt["80"]["name"].'</option>
<option >'.$counttttt["81"]["name"].'</option>
<option >'.$counttttt["82"]["name"].'</option>
<option >'.$counttttt["83"]["name"].'</option>
<option >'.$counttttt["84"]["name"].'</option>
<option >'.$counttttt["85"]["name"].'</option>
<option >'.$counttttt["86"]["name"].'</option>
<option >'.$counttttt["87"]["name"].'</option>
<option >'.$counttttt["88"]["name"].'</option>
<option >'.$counttttt["89"]["name"].'</option>
<option >'.$counttttt["90"]["name"].'</option>
<option >'.$counttttt["91"]["name"].'</option>
<option >'.$counttttt["92"]["name"].'</option>
<option >'.$counttttt["93"]["name"].'</option>
<option >'.$counttttt["94"]["name"].'</option>
<option >'.$counttttt["95"]["name"].'</option>
<option >'.$counttttt["96"]["name"].'</option>
<option >'.$counttttt["97"]["name"].'</option>
<option >'.$counttttt["98"]["name"].'</option>
<option >'.$counttttt["99"]["name"].'</option>
<option >'.$counttttt["100"]["name"].'</option>
<option >'.$counttttt["101"]["name"].'</option>
<option >'.$counttttt["102"]["name"].'</option>
<option >'.$counttttt["103"]["name"].'</option>
<option >'.$counttttt["104"]["name"].'</option>
<option >'.$counttttt["105"]["name"].'</option>
<option >'.$counttttt["106"]["name"].'</option>
<option >'.$counttttt["107"]["name"].'</option>
<option >'.$counttttt["108"]["name"].'</option>
<option >'.$counttttt["109"]["name"].'</option>
<option >'.$counttttt["110"]["name"].'</option>
<option >'.$counttttt["111"]["name"].'</option>
<option >'.$counttttt["112"]["name"].'</option>
<option >'.$counttttt["113"]["name"].'</option>
<option >'.$counttttt["114"]["name"].'</option>
<option >'.$counttttt["115"]["name"].'</option>
<option >'.$counttttt["116"]["name"].'</option>
<option >'.$counttttt["117"]["name"].'</option>
<option >'.$counttttt["118"]["name"].'</option>
<option >'.$counttttt["119"]["name"].'</option>
<option >'.$counttttt["120"]["name"].'</option>
<option >'.$counttttt["121"]["name"].'</option>
<option >'.$counttttt["122"]["name"].'</option>
<option >'.$counttttt["123"]["name"].'</option>
<option >'.$counttttt["124"]["name"].'</option>
<option >'.$counttttt["125"]["name"].'</option>
<option >'.$counttttt["126"]["name"].'</option>
<option >'.$counttttt["127"]["name"].'</option>
<option >'.$counttttt["128"]["name"].'</option>
<option >'.$counttttt["129"]["name"].'</option>
<option >'.$counttttt["130"]["name"].'</option>
<option >'.$counttttt["131"]["name"].'</option>
<option >'.$counttttt["132"]["name"].'</option>
<option >'.$counttttt["133"]["name"].'</option>
<option >'.$counttttt["134"]["name"].'</option>
<option >'.$counttttt["135"]["name"].'</option>
<option >'.$counttttt["136"]["name"].'</option>
<option >'.$counttttt["137"]["name"].'</option>
<option >'.$counttttt["138"]["name"].'</option>
<option >'.$counttttt["139"]["name"].'</option>
<option >'.$counttttt["140"]["name"].'</option>
<option >'.$counttttt["141"]["name"].'</option>
<option >'.$counttttt["142"]["name"].'</option>
<option >'.$counttttt["143"]["name"].'</option>
<option >'.$counttttt["144"]["name"].'</option>
<option >'.$counttttt["145"]["name"].'</option>
<option >'.$counttttt["146"]["name"].'</option>
<option >'.$counttttt["147"]["name"].'</option>
<option >'.$counttttt["148"]["name"].'</option>
<option >'.$counttttt["149"]["name"].'</option>
<option >'.$counttttt["150"]["name"].'</option>
<option >'.$counttttt["151"]["name"].'</option>
<option >'.$counttttt["152"]["name"].'</option>
<option >'.$counttttt["153"]["name"].'</option>
<option >'.$counttttt["154"]["name"].'</option>
<option >'.$counttttt["155"]["name"].'</option>
<option >'.$counttttt["156"]["name"].'</option>
<option >'.$counttttt["157"]["name"].'</option>
<option >'.$counttttt["158"]["name"].'</option>
<option >'.$counttttt["159"]["name"].'</option>
<option >'.$counttttt["160"]["name"].'</option>
<option >'.$counttttt["161"]["name"].'</option>
<option >'.$counttttt["162"]["name"].'</option>
<option >'.$counttttt["163"]["name"].'</option>
<option >'.$counttttt["164"]["name"].'</option>
<option >'.$counttttt["165"]["name"].'</option>
<option >'.$counttttt["166"]["name"].'</option>
<option >'.$counttttt["167"]["name"].'</option>
<option >'.$counttttt["168"]["name"].'</option>
<option >'.$counttttt["169"]["name"].'</option>
<option >'.$counttttt["170"]["name"].'</option>
<option >'.$counttttt["171"]["name"].'</option>
<option >'.$counttttt["172"]["name"].'</option>
<option >'.$counttttt["173"]["name"].'</option>
<option >'.$counttttt["174"]["name"].'</option>
<option >'.$counttttt["175"]["name"].'</option>
<option >'.$counttttt["176"]["name"].'</option>
<option >'.$counttttt["177"]["name"].'</option>
<option >'.$counttttt["178"]["name"].'</option>
<option >'.$counttttt["179"]["name"].'</option>
<option >'.$counttttt["180"]["name"].'</option>
<option >'.$counttttt["181"]["name"].'</option>
<option >'.$counttttt["182"]["name"].'</option>
<option >'.$counttttt["183"]["name"].'</option>
<option >'.$counttttt["184"]["name"].'</option>


                 ';
        }

        if($counttttt_count==196)
        {
            $optsazi='        
             <option ">'.$counttttt["0"]["name"].'</option>
<option ">'.$counttttt["1"]["name"].'</option>
<option ">'.$counttttt["2"]["name"].'</option>
<option ">'.$counttttt["3"]["name"].'</option>
<option ">'.$counttttt["4"]["name"].'</option>
<option ">'.$counttttt["5"]["name"].'</option>
<option ">'.$counttttt["6"]["name"].'</option>
<option ">'.$counttttt["7"]["name"].'</option>
<option ">'.$counttttt["8"]["name"].'</option>
<option ">'.$counttttt["9"]["name"].'</option>
<option ">'.$counttttt["10"]["name"].'</option>
<option >'.$counttttt["11"]["name"].'</option>
<option >'.$counttttt["12"]["name"].'</option>
<option >'.$counttttt["13"]["name"].'</option>
<option >'.$counttttt["14"]["name"].'</option>
<option >'.$counttttt["15"]["name"].'</option>
<option >'.$counttttt["16"]["name"].'</option>
<option >'.$counttttt["17"]["name"].'</option>
<option >'.$counttttt["18"]["name"].'</option>
<option >'.$counttttt["19"]["name"].'</option>
<option >'.$counttttt["20"]["name"].'</option>
<option >'.$counttttt["21"]["name"].'</option>
<option >'.$counttttt["22"]["name"].'</option>
<option >'.$counttttt["23"]["name"].'</option>
<option >'.$counttttt["24"]["name"].'</option>
<option >'.$counttttt["25"]["name"].'</option>
<option >'.$counttttt["26"]["name"].'</option>
<option >'.$counttttt["27"]["name"].'</option>
<option >'.$counttttt["28"]["name"].'</option>
<option >'.$counttttt["29"]["name"].'</option>
<option >'.$counttttt["30"]["name"].'</option>
<option >'.$counttttt["31"]["name"].'</option>
<option >'.$counttttt["32"]["name"].'</option>
<option >'.$counttttt["33"]["name"].'</option>
<option >'.$counttttt["34"]["name"].'</option>
<option >'.$counttttt["35"]["name"].'</option>
<option >'.$counttttt["36"]["name"].'</option>
<option >'.$counttttt["37"]["name"].'</option>
<option >'.$counttttt["38"]["name"].'</option>
<option >'.$counttttt["39"]["name"].'</option>
<option >'.$counttttt["40"]["name"].'</option>
<option >'.$counttttt["41"]["name"].'</option>
<option >'.$counttttt["42"]["name"].'</option>
<option >'.$counttttt["43"]["name"].'</option>
<option >'.$counttttt["44"]["name"].'</option>
<option >'.$counttttt["45"]["name"].'</option>
<option >'.$counttttt["46"]["name"].'</option>
<option >'.$counttttt["47"]["name"].'</option>
<option >'.$counttttt["48"]["name"].'</option>
<option >'.$counttttt["49"]["name"].'</option>
<option >'.$counttttt["50"]["name"].'</option>
<option >'.$counttttt["51"]["name"].'</option>
<option >'.$counttttt["52"]["name"].'</option>
<option >'.$counttttt["53"]["name"].'</option>
<option >'.$counttttt["54"]["name"].'</option>
<option >'.$counttttt["55"]["name"].'</option>
<option >'.$counttttt["56"]["name"].'</option>
<option >'.$counttttt["57"]["name"].'</option>
<option >'.$counttttt["58"]["name"].'</option>
<option >'.$counttttt["59"]["name"].'</option>
<option >'.$counttttt["60"]["name"].'</option>
<option >'.$counttttt["61"]["name"].'</option>
<option >'.$counttttt["62"]["name"].'</option>
<option >'.$counttttt["63"]["name"].'</option>
<option >'.$counttttt["64"]["name"].'</option>
<option >'.$counttttt["65"]["name"].'</option>
<option >'.$counttttt["66"]["name"].'</option>
<option >'.$counttttt["67"]["name"].'</option>
<option >'.$counttttt["68"]["name"].'</option>
<option >'.$counttttt["69"]["name"].'</option>
<option >'.$counttttt["70"]["name"].'</option>
<option >'.$counttttt["71"]["name"].'</option>
<option >'.$counttttt["72"]["name"].'</option>
<option >'.$counttttt["73"]["name"].'</option>
<option >'.$counttttt["74"]["name"].'</option>
<option >'.$counttttt["75"]["name"].'</option>
<option >'.$counttttt["76"]["name"].'</option>
<option >'.$counttttt["77"]["name"].'</option>
<option >'.$counttttt["78"]["name"].'</option>
<option >'.$counttttt["79"]["name"].'</option>
<option >'.$counttttt["80"]["name"].'</option>
<option >'.$counttttt["81"]["name"].'</option>
<option >'.$counttttt["82"]["name"].'</option>
<option >'.$counttttt["83"]["name"].'</option>
<option >'.$counttttt["84"]["name"].'</option>
<option >'.$counttttt["85"]["name"].'</option>
<option >'.$counttttt["86"]["name"].'</option>
<option >'.$counttttt["87"]["name"].'</option>
<option >'.$counttttt["88"]["name"].'</option>
<option >'.$counttttt["89"]["name"].'</option>
<option >'.$counttttt["90"]["name"].'</option>
<option >'.$counttttt["91"]["name"].'</option>
<option >'.$counttttt["92"]["name"].'</option>
<option >'.$counttttt["93"]["name"].'</option>
<option >'.$counttttt["94"]["name"].'</option>
<option >'.$counttttt["95"]["name"].'</option>
<option >'.$counttttt["96"]["name"].'</option>
<option >'.$counttttt["97"]["name"].'</option>
<option >'.$counttttt["98"]["name"].'</option>
<option >'.$counttttt["99"]["name"].'</option>
<option >'.$counttttt["100"]["name"].'</option>
<option >'.$counttttt["101"]["name"].'</option>
<option >'.$counttttt["102"]["name"].'</option>
<option >'.$counttttt["103"]["name"].'</option>
<option >'.$counttttt["104"]["name"].'</option>
<option >'.$counttttt["105"]["name"].'</option>
<option >'.$counttttt["106"]["name"].'</option>
<option >'.$counttttt["107"]["name"].'</option>
<option >'.$counttttt["108"]["name"].'</option>
<option >'.$counttttt["109"]["name"].'</option>
<option >'.$counttttt["110"]["name"].'</option>
<option >'.$counttttt["111"]["name"].'</option>
<option >'.$counttttt["112"]["name"].'</option>
<option >'.$counttttt["113"]["name"].'</option>
<option >'.$counttttt["114"]["name"].'</option>
<option >'.$counttttt["115"]["name"].'</option>
<option >'.$counttttt["116"]["name"].'</option>
<option >'.$counttttt["117"]["name"].'</option>
<option >'.$counttttt["118"]["name"].'</option>
<option >'.$counttttt["119"]["name"].'</option>
<option >'.$counttttt["120"]["name"].'</option>
<option >'.$counttttt["121"]["name"].'</option>
<option >'.$counttttt["122"]["name"].'</option>
<option >'.$counttttt["123"]["name"].'</option>
<option >'.$counttttt["124"]["name"].'</option>
<option >'.$counttttt["125"]["name"].'</option>
<option >'.$counttttt["126"]["name"].'</option>
<option >'.$counttttt["127"]["name"].'</option>
<option >'.$counttttt["128"]["name"].'</option>
<option >'.$counttttt["129"]["name"].'</option>
<option >'.$counttttt["130"]["name"].'</option>
<option >'.$counttttt["131"]["name"].'</option>
<option >'.$counttttt["132"]["name"].'</option>
<option >'.$counttttt["133"]["name"].'</option>
<option >'.$counttttt["134"]["name"].'</option>
<option >'.$counttttt["135"]["name"].'</option>
<option >'.$counttttt["136"]["name"].'</option>
<option >'.$counttttt["137"]["name"].'</option>
<option >'.$counttttt["138"]["name"].'</option>
<option >'.$counttttt["139"]["name"].'</option>
<option >'.$counttttt["140"]["name"].'</option>
<option >'.$counttttt["141"]["name"].'</option>
<option >'.$counttttt["142"]["name"].'</option>
<option >'.$counttttt["143"]["name"].'</option>
<option >'.$counttttt["144"]["name"].'</option>
<option >'.$counttttt["145"]["name"].'</option>
<option >'.$counttttt["146"]["name"].'</option>
<option >'.$counttttt["147"]["name"].'</option>
<option >'.$counttttt["148"]["name"].'</option>
<option >'.$counttttt["149"]["name"].'</option>
<option >'.$counttttt["150"]["name"].'</option>
<option >'.$counttttt["151"]["name"].'</option>
<option >'.$counttttt["152"]["name"].'</option>
<option >'.$counttttt["153"]["name"].'</option>
<option >'.$counttttt["154"]["name"].'</option>
<option >'.$counttttt["155"]["name"].'</option>
<option >'.$counttttt["156"]["name"].'</option>
<option >'.$counttttt["157"]["name"].'</option>
<option >'.$counttttt["158"]["name"].'</option>
<option >'.$counttttt["159"]["name"].'</option>
<option >'.$counttttt["160"]["name"].'</option>
<option >'.$counttttt["161"]["name"].'</option>
<option >'.$counttttt["162"]["name"].'</option>
<option >'.$counttttt["163"]["name"].'</option>
<option >'.$counttttt["164"]["name"].'</option>
<option >'.$counttttt["165"]["name"].'</option>
<option >'.$counttttt["166"]["name"].'</option>
<option >'.$counttttt["167"]["name"].'</option>
<option >'.$counttttt["168"]["name"].'</option>
<option >'.$counttttt["169"]["name"].'</option>
<option >'.$counttttt["170"]["name"].'</option>
<option >'.$counttttt["171"]["name"].'</option>
<option >'.$counttttt["172"]["name"].'</option>
<option >'.$counttttt["173"]["name"].'</option>
<option >'.$counttttt["174"]["name"].'</option>
<option >'.$counttttt["175"]["name"].'</option>
<option >'.$counttttt["176"]["name"].'</option>
<option >'.$counttttt["177"]["name"].'</option>
<option >'.$counttttt["178"]["name"].'</option>
<option >'.$counttttt["179"]["name"].'</option>
<option >'.$counttttt["180"]["name"].'</option>
<option >'.$counttttt["181"]["name"].'</option>
<option >'.$counttttt["182"]["name"].'</option>
<option >'.$counttttt["183"]["name"].'</option>
<option >'.$counttttt["184"]["name"].'</option>
<option >'.$counttttt["185"]["name"].'</option>
<option >'.$counttttt["186"]["name"].'</option>
<option >'.$counttttt["187"]["name"].'</option>
<option >'.$counttttt["188"]["name"].'</option>
<option >'.$counttttt["189"]["name"].'</option>
<option >'.$counttttt["190"]["name"].'</option>
<option >'.$counttttt["191"]["name"].'</option>
<option >'.$counttttt["192"]["name"].'</option>
<option >'.$counttttt["193"]["name"].'</option>
<option >'.$counttttt["194"]["name"].'</option>
<option >'.$counttttt["194"]["name"].'</option>


             ';
        }

        if($counttttt_count==200)
        {
            $optsazi='   
             <option ">'.$counttttt["0"]["name"].'</option>
<option ">'.$counttttt["1"]["name"].'</option>
<option ">'.$counttttt["2"]["name"].'</option>
<option ">'.$counttttt["3"]["name"].'</option>
<option ">'.$counttttt["4"]["name"].'</option>
<option ">'.$counttttt["5"]["name"].'</option>
<option ">'.$counttttt["6"]["name"].'</option>
<option ">'.$counttttt["7"]["name"].'</option>
<option ">'.$counttttt["8"]["name"].'</option>
<option ">'.$counttttt["9"]["name"].'</option>
<option ">'.$counttttt["10"]["name"].'</option>
<option >'.$counttttt["11"]["name"].'</option>
<option >'.$counttttt["12"]["name"].'</option>
<option >'.$counttttt["13"]["name"].'</option>
<option >'.$counttttt["14"]["name"].'</option>
<option >'.$counttttt["15"]["name"].'</option>
<option >'.$counttttt["16"]["name"].'</option>
<option >'.$counttttt["17"]["name"].'</option>
<option >'.$counttttt["18"]["name"].'</option>
<option >'.$counttttt["19"]["name"].'</option>
<option >'.$counttttt["20"]["name"].'</option>
<option >'.$counttttt["21"]["name"].'</option>
<option >'.$counttttt["22"]["name"].'</option>
<option >'.$counttttt["23"]["name"].'</option>
<option >'.$counttttt["24"]["name"].'</option>
<option >'.$counttttt["25"]["name"].'</option>
<option >'.$counttttt["26"]["name"].'</option>
<option >'.$counttttt["27"]["name"].'</option>
<option >'.$counttttt["28"]["name"].'</option>
<option >'.$counttttt["29"]["name"].'</option>
<option >'.$counttttt["30"]["name"].'</option>
<option >'.$counttttt["31"]["name"].'</option>
<option >'.$counttttt["32"]["name"].'</option>
<option >'.$counttttt["33"]["name"].'</option>
<option >'.$counttttt["34"]["name"].'</option>
<option >'.$counttttt["35"]["name"].'</option>
<option >'.$counttttt["36"]["name"].'</option>
<option >'.$counttttt["37"]["name"].'</option>
<option >'.$counttttt["38"]["name"].'</option>
<option >'.$counttttt["39"]["name"].'</option>
<option >'.$counttttt["40"]["name"].'</option>
<option >'.$counttttt["41"]["name"].'</option>
<option >'.$counttttt["42"]["name"].'</option>
<option >'.$counttttt["43"]["name"].'</option>
<option >'.$counttttt["44"]["name"].'</option>
<option >'.$counttttt["45"]["name"].'</option>
<option >'.$counttttt["46"]["name"].'</option>
<option >'.$counttttt["47"]["name"].'</option>
<option >'.$counttttt["48"]["name"].'</option>
<option >'.$counttttt["49"]["name"].'</option>
<option >'.$counttttt["50"]["name"].'</option>
<option >'.$counttttt["51"]["name"].'</option>
<option >'.$counttttt["52"]["name"].'</option>
<option >'.$counttttt["53"]["name"].'</option>
<option >'.$counttttt["54"]["name"].'</option>
<option >'.$counttttt["55"]["name"].'</option>
<option >'.$counttttt["56"]["name"].'</option>
<option >'.$counttttt["57"]["name"].'</option>
<option >'.$counttttt["58"]["name"].'</option>
<option >'.$counttttt["59"]["name"].'</option>
<option >'.$counttttt["60"]["name"].'</option>
<option >'.$counttttt["61"]["name"].'</option>
<option >'.$counttttt["62"]["name"].'</option>
<option >'.$counttttt["63"]["name"].'</option>
<option >'.$counttttt["64"]["name"].'</option>
<option >'.$counttttt["65"]["name"].'</option>
<option >'.$counttttt["66"]["name"].'</option>
<option >'.$counttttt["67"]["name"].'</option>
<option >'.$counttttt["68"]["name"].'</option>
<option >'.$counttttt["69"]["name"].'</option>
<option >'.$counttttt["70"]["name"].'</option>
<option >'.$counttttt["71"]["name"].'</option>
<option >'.$counttttt["72"]["name"].'</option>
<option >'.$counttttt["73"]["name"].'</option>
<option >'.$counttttt["74"]["name"].'</option>
<option >'.$counttttt["75"]["name"].'</option>
<option >'.$counttttt["76"]["name"].'</option>
<option >'.$counttttt["77"]["name"].'</option>
<option >'.$counttttt["78"]["name"].'</option>
<option >'.$counttttt["79"]["name"].'</option>
<option >'.$counttttt["80"]["name"].'</option>
<option >'.$counttttt["81"]["name"].'</option>
<option >'.$counttttt["82"]["name"].'</option>
<option >'.$counttttt["83"]["name"].'</option>
<option >'.$counttttt["84"]["name"].'</option>
<option >'.$counttttt["85"]["name"].'</option>
<option >'.$counttttt["86"]["name"].'</option>
<option >'.$counttttt["87"]["name"].'</option>
<option >'.$counttttt["88"]["name"].'</option>
<option >'.$counttttt["89"]["name"].'</option>
<option >'.$counttttt["90"]["name"].'</option>
<option >'.$counttttt["91"]["name"].'</option>
<option >'.$counttttt["92"]["name"].'</option>
<option >'.$counttttt["93"]["name"].'</option>
<option >'.$counttttt["94"]["name"].'</option>
<option >'.$counttttt["95"]["name"].'</option>
<option >'.$counttttt["96"]["name"].'</option>
<option >'.$counttttt["97"]["name"].'</option>
<option >'.$counttttt["98"]["name"].'</option>
<option >'.$counttttt["99"]["name"].'</option>
<option >'.$counttttt["100"]["name"].'</option>
<option >'.$counttttt["101"]["name"].'</option>
<option >'.$counttttt["102"]["name"].'</option>
<option >'.$counttttt["103"]["name"].'</option>
<option >'.$counttttt["104"]["name"].'</option>
<option >'.$counttttt["105"]["name"].'</option>
<option >'.$counttttt["106"]["name"].'</option>
<option >'.$counttttt["107"]["name"].'</option>
<option >'.$counttttt["108"]["name"].'</option>
<option >'.$counttttt["109"]["name"].'</option>
<option >'.$counttttt["110"]["name"].'</option>
<option >'.$counttttt["111"]["name"].'</option>
<option >'.$counttttt["112"]["name"].'</option>
<option >'.$counttttt["113"]["name"].'</option>
<option >'.$counttttt["114"]["name"].'</option>
<option >'.$counttttt["115"]["name"].'</option>
<option >'.$counttttt["116"]["name"].'</option>
<option >'.$counttttt["117"]["name"].'</option>
<option >'.$counttttt["118"]["name"].'</option>
<option >'.$counttttt["119"]["name"].'</option>
<option >'.$counttttt["120"]["name"].'</option>
<option >'.$counttttt["121"]["name"].'</option>
<option >'.$counttttt["122"]["name"].'</option>
<option >'.$counttttt["123"]["name"].'</option>
<option >'.$counttttt["124"]["name"].'</option>
<option >'.$counttttt["125"]["name"].'</option>
<option >'.$counttttt["126"]["name"].'</option>
<option >'.$counttttt["127"]["name"].'</option>
<option >'.$counttttt["128"]["name"].'</option>
<option >'.$counttttt["129"]["name"].'</option>
<option >'.$counttttt["130"]["name"].'</option>
<option >'.$counttttt["131"]["name"].'</option>
<option >'.$counttttt["132"]["name"].'</option>
<option >'.$counttttt["133"]["name"].'</option>
<option >'.$counttttt["134"]["name"].'</option>
<option >'.$counttttt["135"]["name"].'</option>
<option >'.$counttttt["136"]["name"].'</option>
<option >'.$counttttt["137"]["name"].'</option>
<option >'.$counttttt["138"]["name"].'</option>
<option >'.$counttttt["139"]["name"].'</option>
<option >'.$counttttt["140"]["name"].'</option>
<option >'.$counttttt["141"]["name"].'</option>
<option >'.$counttttt["142"]["name"].'</option>
<option >'.$counttttt["143"]["name"].'</option>
<option >'.$counttttt["144"]["name"].'</option>
<option >'.$counttttt["145"]["name"].'</option>
<option >'.$counttttt["146"]["name"].'</option>
<option >'.$counttttt["147"]["name"].'</option>
<option >'.$counttttt["148"]["name"].'</option>
<option >'.$counttttt["149"]["name"].'</option>
<option >'.$counttttt["150"]["name"].'</option>
<option >'.$counttttt["151"]["name"].'</option>
<option >'.$counttttt["152"]["name"].'</option>
<option >'.$counttttt["153"]["name"].'</option>
<option >'.$counttttt["154"]["name"].'</option>
<option >'.$counttttt["155"]["name"].'</option>
<option >'.$counttttt["156"]["name"].'</option>
<option >'.$counttttt["157"]["name"].'</option>
<option >'.$counttttt["158"]["name"].'</option>
<option >'.$counttttt["159"]["name"].'</option>
<option >'.$counttttt["160"]["name"].'</option>
<option >'.$counttttt["161"]["name"].'</option>
<option >'.$counttttt["162"]["name"].'</option>
<option >'.$counttttt["163"]["name"].'</option>
<option >'.$counttttt["164"]["name"].'</option>
<option >'.$counttttt["165"]["name"].'</option>
<option >'.$counttttt["166"]["name"].'</option>
<option >'.$counttttt["167"]["name"].'</option>
<option >'.$counttttt["168"]["name"].'</option>
<option >'.$counttttt["169"]["name"].'</option>
<option >'.$counttttt["170"]["name"].'</option>
<option >'.$counttttt["171"]["name"].'</option>
<option >'.$counttttt["172"]["name"].'</option>
<option >'.$counttttt["173"]["name"].'</option>
<option >'.$counttttt["174"]["name"].'</option>
<option >'.$counttttt["175"]["name"].'</option>
<option >'.$counttttt["176"]["name"].'</option>
<option >'.$counttttt["177"]["name"].'</option>
<option >'.$counttttt["178"]["name"].'</option>
<option >'.$counttttt["179"]["name"].'</option>
<option >'.$counttttt["180"]["name"].'</option>
<option >'.$counttttt["181"]["name"].'</option>
<option >'.$counttttt["182"]["name"].'</option>
<option >'.$counttttt["183"]["name"].'</option>
<option >'.$counttttt["184"]["name"].'</option>
<option >'.$counttttt["185"]["name"].'</option>
<option >'.$counttttt["186"]["name"].'</option>
<option >'.$counttttt["187"]["name"].'</option>
<option >'.$counttttt["188"]["name"].'</option>
<option >'.$counttttt["189"]["name"].'</option>
<option >'.$counttttt["190"]["name"].'</option>
<option >'.$counttttt["191"]["name"].'</option>
<option >'.$counttttt["192"]["name"].'</option>
<option >'.$counttttt["193"]["name"].'</option>
<option >'.$counttttt["194"]["name"].'</option>
<option >'.$counttttt["195"]["name"].'</option>
<option >'.$counttttt["196"]["name"].'</option>
<option >'.$counttttt["197"]["name"].'</option>
<option >'.$counttttt["198"]["name"].'</option>
<option >'.$counttttt["199"]["name"].'</option>

             ';
        }
        echo json_encode(array(
            "statusCode"=>200,
            "count"=>$counttttt_count,
            "optsazi"=>$optsazi
        ),JSON_UNESCAPED_UNICODE);
        break;


}
?>