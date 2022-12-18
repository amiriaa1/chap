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
				if($avtive2=="غیر فعال"){$avtive='0';}else{$avtive='1';}
				if($typ2e=="افست"){$type='1';}else{$type='2';}
					
$discountList = $fee->Productupdate($title,$description,$type,$pic,$baseprice,$avtive,$id);	
				
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
								
									<div class="controls">
										<label>نوع محصول</label>
						<select name="type" id="type"  class="form-control select2 w-p100">
						';
						if($type==1){echo'
						
						<option value"1" selected="selected">افست</option>
						<option value"2">دیجیتال</option>
						';
						
						}
						else
						{
							echo'
							<option  value"1">افست</option>
							<option  value"2" selected="selected">دیجیتال</option>
							
							';
							
						}
						echo'
						</select>
						<div class="col-md-6">
								<div class="form-group">
								
									<div class="controls">
										<label>نوع محصول</label>
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