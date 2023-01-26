<?php

$login_needed=0;
include_once('main.php');
include_once('header.php');
$student = new ManageStudents();
$fee = new ManageFees();	


if(isset($_POST['name']))
			{
			
			$name=$_POST['name'];
			$desc=$_POST['desc'];
			$avtive2=$_POST['avtive'];
			$baseprice=$_POST['baseprice'];
			$typ2e=$_POST['type'];
			$pic=$_POST['pic'];
			
			if($avtive2=="غیر فعال"){$avtive='0';}else{$avtive='1';}
			
			if($typ2e=="افست"){$type='1';}
            if($typ2e=="دیجیتال"){$type='2';}
            if($typ2e=="فروشگاهی"){$type='3';}
            if($typ2e=="اداری"){$type='4';}
			
		
$discountList = $fee->Addproductt($name,$desc,$avtive,$baseprice,$type,$pic);			

	if($discountList==1){
		
		
		echo'<center><span class="label label-success">محصول اضافه شد</span></center>';
		
	}
	
			}
		
	
			
			
			
					
					echo'
			
					
					<section>
						<div class="row">
							<div class="col-md-6">
							<form   action=""	method="post">
								<div class="form-group">
									<label for="1hashid">نام</label>
									<input type="text" name="name" id="name" class="form-control" value="" name="title" id="title">
									</div>
							</div>
							
							<div class="col-md-6">
								<div class="form-group">
									<label for="1amount">توضیحات</label>
								<div class="input-group">
	<input type="text" name="desc" id="desc" class="form-control" value="" required data-validation-required-message="This field is required"></div>

							</div>
						</div>
						
						
						
						<div class="col-md-6">
								<div class="form-group">
									<label for="1amount">آدرس عکس محصول</label>
								<div class="input-group">
	http://server/img/<input type="text" name="pic" id="pic" class="form-control" value="" required data-validation-required-message="This field is required"></div>

							</div>
						</div>
						
						
						<div class="col-md-6">
								<div class="form-group">
									<label for="baseprice">قیمت پایه محصول تومان</label>
								<div class="input-group">
	<input type="text" name="baseprice" id="baseprice" class="form-control" value="" required data-validation-required-message="This field is required"></div>
    
							</div>
						</div>
						
						
					
							<div class="col-md-6">
								<div class="form-group">
								
									<div class="controls">
										<label>نوع محصول</label>
						<select name="type" id="type"  class="form-control select2 w-p100">
						
						<option value"1" selected="selected">افست</option>
						<option value"2">دیجیتال</option>
						<option value"3">فروشگاهی</option>
						<option value"4">اداری</option>
						
					
					
						</select>
						<div class="col-md-6">
								<div class="form-group">
								
									<div class="controls">
										<label>نوع محصول</label>
						<select name="avtive" id="avtive"  class="form-control select2 w-p100">
						
						<option name="avtive" id="avtive" value"1" selected="selected">فعال</option>
						<option name="avtive" id="avtive" value"0">غیر فعال</option>
						


						  
						</select>
										
										
<br><br><br><br>
							<button type="submit" class="btn btn-rounded btn-info" ">ثبت</button>		
						</form>
						</div>	
							
						</div>
							
				
					';	
			
			
			
			
			
			
			include_once('footer.php');
			
			
	

?>