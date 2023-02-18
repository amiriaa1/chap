<?php

$login_needed=0;
include_once('main.php');
include_once('header.php');
$student = new ManageStudents();
$fee = new ManageFees();	


if(isset($_GET['id']))
			{
			
			$id=$_GET['id'];
			if(isset($_POST['title'])){
				
				
				$title=$_POST['title'];
				$description=$_POST['description'];
				$typ2e=$_POST['type'];
				$pic=$_POST['pic'];
				$baseprice=$_POST['baseprice'];
				$avtive2=$_POST['avtive'];

                $qsoal=$_POST['qsoal'];
                $qsoal1=$_POST['qsoal1'];
                $qsoal3=$_POST['qsoal3'];


				if($avtive2=="غیر فعال"){$avtive='0';}else{$avtive='1';}
                if($typ2e=="افست"){$type='1';}
                if($typ2e=="دیجیتال"){$type='2';}
                if($typ2e=="فروشگاهی"){$type='3';}
                if($typ2e=="اداری"){$type='4';}
                $decption1=$_POST['decption1'];
                $decption2=$_POST['decption2'];
$discountList = $fee->Productupdate($title,$description,$type,$pic,$baseprice,$avtive,$qsoal,$qsoal1,$qsoal3,$decption1,$decption2,$id);
				if($discountList==1){echo"انجام شد";}
			}
			
$query = "WHERE aid=$id  ORDER BY `nim_product`.`aid` ASC";			
$discountList = $fee->Getproductlist($query);			

	
	
			}
		
	
			
			
			
					foreach($discountList as $discountProp)
					{
						
							$title=$discountProp['title'];
							$description=$discountProp['description'];
							$type=$discountProp['type'];
						$pic=$discountProp['pic'];
						$baseprice=$discountProp['baseprice'];	
						$avtive=$discountProp['avtive'];

                        $qsoal=$discountProp['qsoal'];
                        $qsoal1=$discountProp['qsoal1'];
                        $qsoal3=$discountProp['qsoal3'];
                        $decption1=$discountProp['decption1'];
                        $decption2=$discountProp['decption2'];
                    }
					
					echo'
			
					
					<section>
						<div class="row">
							<div class="col-md-6">
							<form   action=""	method="post">
								<div class="form-group">
									<label for="1hashid">نام</label>
									<input type="text" class="form-control" value="'.$title.'" name="title" id="title">
									</div>
							</div>
							
							<div class="col-md-6">
								<div class="form-group">
									<label for="1amount">توضیحات</label>
								<div class="input-group">
	<input type="text" name="description" id="description" class="form-control" value="'.$description.'" required data-validation-required-message="This field is required"></div>

							</div>
						</div>
						
						
						
						<div class="col-md-6">
								<div class="form-group">
									<label for="1amount">آدرس عکس محصول</label>
								<div class="input-group">
	http://server/img/<input type="text" name="pic" id="pic" class="form-control" value="'.$pic.'" required data-validation-required-message="This field is required"></div>

							</div>
						</div>
						
						
						<div class="col-md-6">
								<div class="form-group">
									<label for="baseprice">قیمت پایه محصول تومان</label>
								<div class="input-group">
	<input type="text" name="baseprice" id="baseprice" class="form-control" value="'.$baseprice.'" required data-validation-required-message="This field is required"></div>
    
							</div>
						</div>
						
						<div class="col-md-6">
								<div class="form-group">
									<label for="baseprice">سوال تنوع اول</label>
								<div class="input-group">
	<input type="text" name="qsoal" id="qsoal" class="form-control" value="'.$qsoal.'" required data-validation-required-message="This field is required"></div>
    
							</div>
						</div>
						
						<div class="col-md-6">
								<div class="form-group">
									<label for="baseprice">سوال تنوع دوم</label>
								<div class="input-group">
	<input type="text" name="qsoal1" id="qsoal1" class="form-control" value="'.$qsoal1.'" required data-validation-required-message="This field is required"></div>
    
							</div>
						</div>
						
						<div class="col-md-6">
								<div class="form-group">
									<label for="baseprice">سوال تنوع سوم</label>
								<div class="input-group">
	<input type="text" name="qsoal3" id="qsoal3" class="form-control" value="'.$qsoal3.'" required data-validation-required-message="This field is required"></div>
    
							</div>
						</div>
						
						
						<div class="col-md-6">
								<div class="form-group">
									<label for="decption1">توضیحات اول</label>
								<div class="input-group">
	<input type="text" name="decption1" id="decption1" class="form-control" value="'.$decption1.'" required data-validation-required-message="This field is required"></div>
    
							</div>
						</div>
						
						
						<div class="col-md-6">
								<div class="form-group">
									<label for="decption1">توصیحات دوم</label>
								<div class="input-group">
	<input type="text" name="decption2" id="decption2" class="form-control" value="'.$decption2.'" required data-validation-required-message="This field is required"></div>
    
							</div>
						</div>
						
						
					
							<div class="col-md-6">
								<div class="form-group">
								
									<div class="controls">
										<label>نوع محصول</label>
						<select name="type" id="type"  class="form-control select2 w-p100">
						';
						if($type==1){echo'
						
						<option value"1" selected="selected">افست</option>
						<option value"2">دیجیتال</option>
						<option value"3">فروشگاهی</option>
						<option value"4">اداری</option>
						';
						
						}
if($type==2)
						{
							echo'
							<option  value"1">افست</option>
							<option  value"2" selected="selected">دیجیتال</option>
						    <option value"3">فروشگاهی</option>
					    	<option value"4">اداری</option>
							';
							
						}
if($type==3)
{
    echo'
							<option  value"1">افست</option>
							<option  value"2">دیجیتال</option>
						    <option value"3" selected="selected">فروشگاهی</option>
					    	<option value"4">اداری</option>
							';

}
if($type==4)
{
    echo'
							<option  value"1">افست</option>
							<option  value"2">دیجیتال</option>
						    <option value"3">فروشگاهی</option>
					    	<option value"4"  selected="selected">اداری</option>
							';

}
						echo'
						</select>
						<div class="col-md-6">
								<div class="form-group">
								
									<div class="controls">
										<label>وضعیت</label>
						<select name="avtive" id="avtive"  class="form-control select2 w-p100">
						';
						if($avtive==1){echo'
						
						<option name="avtive" id="avtive" value"1" selected="selected">فعال</option>
						<option name="avtive" id="avtive" value"0">غیر فعال</option>
						';
						
						}
						else
						{
							echo'
							<option name="avtive" id="avtive" value"1">فعال</option>
							<option name="avtive" id="avtive" value"0" selected="selected">غیر فعال</option>
			

							';
							
						}
						echo'
						



						  
						</select>
										
										
<br><br><br><br>
							<button type="submit" class="btn btn-rounded btn-info" ">ثبت</button>		
						</form>
						</div>	
							
						</div>
							
				
					';	
			
			
			
			
			
			
			include_once('footer.php');
			
			
	

?>