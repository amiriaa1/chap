<?php

include_once('main.php');

$idproduct="3";
$soalaval="پاکت A4";
$soalaval2="بدون چسب";
$soalaval3="افقی";
$fee = new ManageFees();
$btnsolcount2 = $fee->Getsol1fromsol4($idproduct,$soalaval,$soalaval2,$soalaval3);

echo $btnsolcount2['0']['sol4'];
?>