<?php

$login_needed=0;
include_once('main.php');
include_once('header.php');
$student = new ManageStudents();
$fee = new ManageFees();
$aid=$_GET['id'];
$query = 'WHERE aid='.$aid.' ORDER BY `nim_shop_list`.`atimestamp`  DESC';

$discountList = $fee->Getshoplistadmin($query);
$json=$discountList["0"]["data1"];
$json2=$discountList["0"]["data3"];
$fgt2 = json_decode($json,true);
$fgt3 = json_decode($json2,true);
echo'

<div class="col-12">
<div class="box box-inverse bg-dark bg-hexagons-white">
<div class="box-body">
<div class="row">						
<center><H2>اطلاعات سفارش</H2></center>
</div>
</div>
</div>
</div>



<!-- Main content -->
			<section class="content">
				<div class="row">	
					<div class="col-12">
						<div class="box">
							<div class="box-body">
								<div class="row justify-content-between">
									<div class="col-xxxl-4 col-xl-5 col-12">
										<div class="pl-md-30 pt-md-30 pr-md-80 pb-md-30 p-0">
											<h5 class="text-uppercase font-weight-700">کاربر : '.$discountList["0"]["user"].'</h5>
											<h5 class="text-uppercase font-weight-700">کد سفارش : '.$discountList["0"]["unid"].'</h5>
												<h5 class="text-uppercase font-weight-700">آدرس : '.$fgt3["addr"].' </h5>
											<h1 class="font-weight-900 text-dark mt-30">مبلغ پرداختی : '.$discountList["0"]["amount"].' تومان</h1>
											
											';
if ($fgt2["prid1"]==!""){
    $query = 'WHERE aid='.$fgt2["prid1"].'  ORDER BY `nim_product`.`aid` ASC';
    $discountList = $fee->Getproductlist($query);
    $query2 = 'WHERE name="'.$fgt2["uinid1"].'"';
    $discountList2 = $fee->Getfiles22($query2);

echo"محصول اول"; echo'<br>';
    echo'<br><a href="/'.$discountList2["0"]["location"].'">
فایل آپلود شده
</a><br>';
    echo'<br>'.$discountList["0"]["title"].'<br>'.$fgt2["javab1"].'<br>'.$fgt2["noet1"].'<br><br>';
}
                                                echo'
                                                
                                                				';
if ($fgt2["prid2"]==!""){
    $query = 'WHERE aid='.$fgt2["prid2"].'  ORDER BY `nim_product`.`aid` ASC';
    $discountList = $fee->Getproductlist($query);
    $query2 = 'WHERE name="'.$fgt2["uinid2"].'"';
    $discountList2 = $fee->Getfiles22($query2);
    echo"محصول دوم"; echo'<br>';
    echo'<br><a href="/'.$discountList2["0"]["location"].'">
فایل آپلود شده
</a><br>';
    echo'--'.$discountList["0"]["title"].'<br>'.$fgt2["javab2"].'<br>'.$fgt2["noet2"].'<br>';
}
echo'

				';
if ($fgt2["prid3"]==!""){
    $query = 'WHERE aid='.$fgt2["prid3"].'  ORDER BY `nim_product`.`aid` ASC';
    $discountList = $fee->Getproductlist($query);
    echo"محصول سوم"; echo'<br>';
    echo'<br>'.$fgt2["javab3"].'<br>'.$fgt2["noet3"].'<br>';
}
echo'

				';
if ($fgt2["prid4"]==!""){
    $query = 'WHERE aid='.$fgt2["prid4"].'  ORDER BY `nim_product`.`aid` ASC';
    $discountList = $fee->Getproductlist($query);
    echo"محصول چهارم"; echo'<br>';
    echo'<br>'.$fgt2["javab4"].'<br>'.$fgt2["noet4"].'<br>';
}
echo'

				';
if ($fgt2["prid5"]==!""){
    $query = 'WHERE aid='.$fgt2["prid5"].'  ORDER BY `nim_product`.`aid` ASC';
    $discountList = $fee->Getproductlist($query);
    echo"محصول پنجم";  echo'<br>';
    echo'<br>'.$fgt2["javab5"].'<br>'.$fgt2["noet5"].'<br>';
}
echo'
											
										
											<div class="d-md-flex d-block justify-content-between align-items-center">
												<div>
													<div class="d-flex align-items-center gap-items-3">
														
													</div>
											
												</div>
												<div>
													<div class="d-flex align-items-center gap-items-3">
													
														<div>
															
														
														</div>
													</div>
												
												</div>
											</div>
										</div>
									</div>
									


';



?>