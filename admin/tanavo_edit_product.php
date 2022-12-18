<?php

$login_needed=0;
include_once('main.php');
include_once('header.php');
$student = new ManageStudents();
$fee = new ManageFees();	


if(isset($_GET['id']))
			{
			
			$id=$_GET['id'];
			$product_id=$_GET['product_id'];
		if(isset($_POST['soal'])){
			
			
			$soal=$_POST['soal'];
			$product_id=$_POST['product_id'];
			
			            $javab1=$_POST['javab1'];
						$vazn1=$_POST['vazn1'];
						
						$javab2=$_POST['javab2'];
						$vazn2=$_POST['vazn2'];
						
						$javab3=$_POST['javab3'];
						$vazn3=$_POST['vazn3'];
						
						$javab4=$_POST['javab4'];
						$vazn4=$_POST['vazn4'];
						
						$javab5=$_POST['javab5'];
						$vazn5=$_POST['vazn5'];
						
						$javab6=$_POST['javab6'];
						$vazn6=$_POST['vazn6'];
						
						$javab7=$_POST['javab7'];
						$vazn7=$_POST['vazn7'];
						
						$javab8=$_POST['javab8'];
						$vazn8=$_POST['vazn8'];
						
						$javab9=$_POST['javab9'];
						$vazn9=$_POST['vazn9'];
						
						$javab10=$_POST['javab10'];
						$vazn10=$_POST['vazn10'];
						
						
$discountList = $fee->updateproducttanavo($product_id,$soal,$javab1,$vazn1,$javab2,$vazn2,$javab3,$vazn3,$javab4,$vazn4,$javab5,$vazn5,$javab6,$vazn6,$javab7,$vazn7,$javab8,$vazn8,$javab9,$vazn9,$javab10,$vazn10,$id);
			
		}
			
		
$discountList = $fee->Getproducttanavolistbyid($id);			

	
	
			}
		
	
			
			
			
					foreach($discountList as $discountProp)
					{
						
						$soal=$discountProp['soal'];
						
						$javab1=$discountProp['javab-1'];
						$vazn1=$discountProp['vazn-1'];
						
						$javab2=$discountProp['javab-2'];
						$vazn2=$discountProp['vazn-2'];
						
						$javab3=$discountProp['javab-3'];
						$vazn3=$discountProp['vazn-3'];
						
						$javab4=$discountProp['javab-4'];
						$vazn4=$discountProp['vazn-4'];
						
						$javab5=$discountProp['javab-5'];
						$vazn5=$discountProp['vazn-5'];
						
						$javab6=$discountProp['javab-6'];
						$vazn6=$discountProp['vazn-6'];
						
						$javab7=$discountProp['javab-7'];
						$vazn7=$discountProp['vazn-7'];
						
						$javab8=$discountProp['javab-8'];
						$vazn8=$discountProp['vazn-8'];
						
						$javab9=$discountProp['javab-9'];
						$vazn9=$discountProp['vazn-9'];
						
						$javab10=$discountProp['javab-10'];
						$vazn10=$discountProp['vazn-10'];
						
							
					}
					
					echo'
			
					
					<section>
						<div class="row">
							<div class="col-md-6">
							<form   action=""	method="post">
								<div class="form-group">
									<label for="1hashid">سوال</label>
									<input type="text" class="form-control" value="'.$soal.'" name="soal" id="soal">
									</div>
							</div>
							
							<div class="col-md-6">
								<div class="form-group">
									<label for="1amount">شماره محصول  تنوع</label>
								<div class="input-group">
	<input type="text"  name="product_id" id="product_id" class="form-control" value="'.$product_id.'" ></div>

							</div>
						</div>
						
						
						
						
						
						
						
						
						
						
					
	<div class="col-md-6">
	<div class="form-group">
	<label for="1amount">جواب 1 </label>
	<div class="input-group">
	<input type="text" name="javab1" id="javab1" class="form-control" value="'.$javab1.'" ></div>

					</div>
					</div>
						
						<div class="col-md-6">
	<div class="form-group">
	<label for="1amount">وزن 1 </label>
	<div class="input-group">
	<input type="text" name="vazn1" id="vazn1" class="form-control" value="'.$vazn1.'" ></div>

					</div>
					</div>
						
						
						
						
						
						
												
						
						
						
						
					
	<div class="col-md-6">
	<div class="form-group">
	<label for="1amount">جواب 2</label>
	<div class="input-group">
	<input type="text" name="javab2" id="javab2" class="form-control" value="'.$javab2.'" ></div>

					</div>
					</div>
						
						<div class="col-md-6">
	<div class="form-group">
	<label for="1amount">وزن 2</label>
	<div class="input-group">
	<input type="text" name="vazn2" id="vazn2" class="form-control" value="'.$vazn2.'" ></div>

					</div>
					</div>
						
						
						
						
						
						
						
						
						
						
						
						
										
						
						
						
						
					
	<div class="col-md-6">
	<div class="form-group">
	<label for="1amount">جواب 3</label>
	<div class="input-group">
	<input type="text" name="javab3" id="javab3" class="form-control" value="'.$javab3.'" ></div>

					</div>
					</div>
						
						<div class="col-md-6">
	<div class="form-group">
	<label for="1amount">وزن 3</label>
	<div class="input-group">
	<input type="text" name="vazn3" id="vazn3" class="form-control" value="'.$vazn3.'" ></div>

					</div>
					</div>
						
						
						
						
						
						
						
						
						
						
						
						
										
						
						
						
						
					
	<div class="col-md-6">
	<div class="form-group">
	<label for="1amount">جواب 4 </label>
	<div class="input-group">
	<input type="text" name="javab4" id="javab4" class="form-control" value="'.$javab4.'" ></div>

					</div>
					</div>
						
						<div class="col-md-6">
	<div class="form-group">
	<label for="1amount">وزن 4 </label>
	<div class="input-group">
	<input type="text" name="vazn4" id="vazn4" class="form-control" value="'.$vazn4.'" ></div>

					</div>
					</div>
						
						
						
						
						
						
						
						
						
						
						
						
										
						
						
						
						
					
	<div class="col-md-6">
	<div class="form-group">
	<label for="1amount">جواب 5 </label>
	<div class="input-group">
	<input type="text" name="javab5" id="javab5" class="form-control" value="'.$javab5.'" ></div>

					</div>
					</div>
						
						<div class="col-md-6">
	<div class="form-group">
	<label for="1amount">وزن 5 </label>
	<div class="input-group">
	<input type="text" name="vazn5" id="vazn5" class="form-control" value="'.$vazn5.'" ></div>

					</div>
					</div>
						
						
						
						
						
						
						
						
						
						
						
						
										
						
						
						
						
					
	<div class="col-md-6">
	<div class="form-group">
	<label for="1amount">جواب 6 </label>
	<div class="input-group">
	<input type="text" name="javab6" id="javab6" class="form-control" value="'.$javab6.'" ></div>

					</div>
					</div>
						
						<div class="col-md-6">
	<div class="form-group">
	<label for="1amount">وزن 6</label>
	<div class="input-group">
	<input type="text" name="vazn6" id="vazn6" class="form-control" value="'.$vazn6.'" ></div>

					</div>
					</div>
						
						
						
						
						
						
						
						
						
						
						
						
										
						
						
						
						
					
	<div class="col-md-6">
	<div class="form-group">
	<label for="1amount">جواب 7 </label>
	<div class="input-group">
	<input type="text" name="javab7" id="javab7" class="form-control" value="'.$javab7.'" ></div>

					</div>
					</div>
						
						<div class="col-md-6">
	<div class="form-group">
	<label for="1amount">وزن 7 </label>
	<div class="input-group">
	<input type="text" name="vazn7" id="vazn7" class="form-control" value="'.$vazn7.'" ></div>

					</div>
					</div>
						
						
						
						
						
						
						
						
						
						
						
						
										
						
						
						
						
					
	<div class="col-md-6">
	<div class="form-group">
	<label for="1amount">جواب 8 </label>
	<div class="input-group">
	<input type="text" name="javab8" id="javab8" class="form-control" value="'.$javab8.'" ></div>

					</div>
					</div>
						
						<div class="col-md-6">
	<div class="form-group">
	<label for="1amount">وزن 8 </label>
	<div class="input-group">
	<input type="text" name="vazn8" id="vazn8" class="form-control" value="'.$vazn8.'" ></div>

					</div>
					</div>
						
						
						
						
						
						
						
						
						
						
						
						
										
						
						
						
						
					
	<div class="col-md-6">
	<div class="form-group">
	<label for="1amount">جواب 9 </label>
	<div class="input-group">
	<input type="text" name="javab9" id="javab9" class="form-control" value="'.$javab9.'" ></div>

					</div>
					</div>
						
						<div class="col-md-6">
	<div class="form-group">
	<label for="1amount">وزن 9</label>
	<div class="input-group">
	<input type="text" name="vazn9" id="vazn9" class="form-control" value="'.$vazn9.'" ></div>

					</div>
					</div>
						
						
						
						
						
						
						
						
						
						
						
						
										
						
						
						
						
					
	<div class="col-md-6">
	<div class="form-group">
	<label for="1amount">جواب 10</label>
	<div class="input-group">
	<input type="text" name="javab10" id="javab10" class="form-control" value="'.$javab10.'" ></div>

					</div>
					</div>
						
						<div class="col-md-6">
	<div class="form-group">
	<label for="1amount">وزن 10</label>
	<div class="input-group">
	<input type="text" name="vazn10" id="vazn10" class="form-control" value="'.$vazn10.'" ></div>

					</div>
					</div>
						
						
						
						
						
						
						
						
						
						
						
						
				
						
						
						
						
						
						
						
						</div>		
										
<br><br><br><br>
							<button type="submit" class="btn btn-rounded btn-info" ">ثبت</button>		
						</form>
						</div>	
							
						</div>
							
				
					';	
			
			
			
			
			
			
			include_once('footer.php');
			
			
	

?>