<?php

$login_needed=0;
include_once('main.php');
include_once('header.php');
$student = new ManageStudents();
$fee = new ManageFees();	


if(isset($_POST['name']))
			{

			$name=$_POST['name'];
            $textarea=$_POST['textarea'];

			$typ2e=$_POST['type'];

                $active="1";
                $pic=$_POST['pic'];
			if($typ2e=="چاپ و طراحی"){$type='1';}
            if($typ2e=="ماشین های اداری"){$type='2';}
            if($typ2e=="ملزومات اداری و دفتری"){$type='3';}
                echo'
			'.$name.'--'.$textarea.'--'.$active.'--'.$pic.'--'.$type.'
			
			';
		
$discountList = $fee->addbloginserter($name,$textarea,$active,$type,$pic);

	if($discountList==1){
		
		
		echo'<center><span class="label label-success">مطلب اضافه شد</span></center>';
		
	}
	
			}
		
	
			
			
			
					
					echo'
			
				 
					
					
						
								 
					
					<section>
					
							<div class="col-md-6">
							<form   action=""	method="post">
								<div class="form-group">
									<label for="1hashid">نام</label>
									<input type="text" name="name" id="name" class="form-control" value="" name="title" id="title">
									</div>
							</div>
							
							
							<div class="col-md-6">
							<form   action=""	method="post">
								<div class="form-group">
									<label for="1hashid">عکس</label>
									<input type="text" name="pic" id="pic" class="form-control" value="">
									</div>
							</div>
							
							
							<div class="col-md-6">
								<div class="form-group">
									<label for="1amount">توضیحات</label>
								<div class="input-group">

<h5> متن  <span class="text-danger">*</span></h5><br>
		<textarea name="textarea" id="textarea" class="form-control" required placeholder="متن "></textarea>

							</div>
						</div>
						
						
					
				
					
							<div class="col-md-6">
								<div class="form-group">
								
									<div class="controls">
									
					
						<div class="col-md-6">
								<div class="form-group">
								
									<div class="controls">
										<label>نوع مطلب</label>
						<select name="type" id="type"  class="form-control select2 w-p100">
						
						<option name="type" id="type" value"1">چاپ و طراحی</option>
						<option name="type" id="type" value"2">ماشین های اداری</option>
						<option name="type" id="type" value"3">ملزومات اداری و دفتری</option>
						

						</select>
										
										
<br><br><br><br>
							<button type="submit" class="btn btn-rounded btn-info" ">ثبت</button>		
						</form>
						</div>	
							
						
							
				
				<script src="js/vendors.min.js"></script>
	
	<!-- Crypto Admin App -->
	<script src="js/jquery.smartmenus.js"></script>
	<script src="js/menus.js"></script>
	<script src="js/template.js"></script>
	
	<!-- Crypto Admin for demo purposes -->
	<script src="js/demo.js"></script>
	
	<!-- Bootstrap markdown -->	
	<script src="assets/vendor_components/bootstrap-markdown-master/js/bootstrap-markdown-fa.js"></script>
  <script src="assets/vendor_components/bootstrap-markdown-master/js/bootstrap-markdown.fa.js"></script>
	
	<!-- marked-->	
	<script src="assets/vendor_components/marked/marked.js"></script>
	
	<!-- to markdown -->	
	<script src="assets/vendor_components/to-markdown/to-markdown.js"></script>
				
				
				
					';	
			
			
			
			
			
			
			include_once('footer.php');
			

	

?>