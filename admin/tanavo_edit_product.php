<?php

$login_needed=0;
include_once('main.php');
include_once('header.php');
$student = new ManageStudents();
$fee = new ManageFees();


if(isset($_GET['id']))
{


    $product_id=$_GET['product_id'];
    $id=$_GET['id'];
    if(isset($_POST['name'])){


        $acomment=$_POST['name'];
        $product_id=$_GET['product_id'];
        $id=$_GET['id'];

        $javab1=$_POST['javab1'];
        $javab2=$_POST['javab2'];
        $javab3=$_POST['javab3'];
        $javab4=$_POST['javab4'];
        $fori=$_POST['fori'];
        $no_fori=$_POST['no_fori'];
        $yero=$_POST['yero'];
        $doro=$_POST['doro'];
        $fori_yero_price=$_POST['fori_yero_price'];
        $fori_doro_price=$_POST['fori_doro_price'];
        $no_fori_yero_price=$_POST['no_fori_yero_price'];
        $no_fori_doro_price=$_POST['no_fori_doro_price'];


        $discountList = $fee->updateproducttanavo($product_id,$javab1,$javab2,$javab3,$javab4,$fori,$no_fori,$yero,$doro,$acomment,$fori_yero_price,$fori_doro_price,$no_fori_yero_price,$no_fori_doro_price,$id);

        if($discountList==1){echo'با موفقیت اپدیت شد';}
    }


    $discountList = $fee->Getproducttanavolistbyid2($id);



}






echo'
			
					
					<section>
						<div class="row">
							<div class="col-md-6">
							<form   action=""	method="post">
								<div class="form-group">
									<label for="1hashid">نام سولوشن</label>
									<input type="text" class="form-control" value="'.$discountList["0"]["acomment"].'" name="name" id="name">
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
	<label for="1amount">جواب اول</label>
	<div class="input-group">
	<input type="text" name="javab1" id="javab1" class="form-control" value="'.$discountList["0"]["sol1"].'" ></div>

					</div>
					</div>
						
						<div class="col-md-6">
	<div class="form-group">
	<label for="1amount">جواب دوم</label>
	<div class="input-group">
	<input type="text" name="javab2" id="javab2" class="form-control" value="'.$discountList["0"]["sol2"].'" ></div>

					</div>
					</div>
							
									
						<div class="col-md-6">
	<div class="form-group">
	<label for="1amount">جواب سوم</label>
	<div class="input-group">
	<input type="text" name="javab3" id="javab3" class="form-control" value="'.$discountList["0"]["sol3"].'" ></div>

					</div>
					</div>
							
													
						<div class="col-md-6">
	<div class="form-group">
	<label for="1amount">جواب چهارم</label>
	<div class="input-group">
	<input type="text" name="javab4" id="javab4" class="form-control" value="'.$discountList["0"]["sol4"].'" ></div>

					</div>
					</div>
							
			
			
			<br>
			
						<div class="col-md-6">
	<div class="form-group">
	<label for="1amount">فوری</label>
	<div class="input-group">
	<input type="text" name="fori" id="fori" class="form-control" value="'.$discountList["0"]["fori"].'" ></div>

					</div>
					</div>
							
										<div class="col-md-6">
	<div class="form-group">
	<label for="1amount">غیر فوری</label>
	<div class="input-group">
	<input type="text" name="no_fori" id="no_fori" class="form-control" value="'.$discountList["0"]["no_fori"].'" ></div>

					</div>
					</div>
							
			
						<div class="col-md-6">
	<div class="form-group">
	<label for="1amount">یه رو</label>
	<div class="input-group">
	<input type="text" name="yero" id="yero" class="form-control" value="'.$discountList["0"]["yero"].'" ></div>

					</div>
					</div>
							
							
										<div class="col-md-6">
	<div class="form-group">
	<label for="1amount">دو رو</label>
	<div class="input-group">
	<input type="text" name="doro" id="doro" class="form-control" value="'.$discountList["0"]["doro"].'" ></div>

					</div>
					</div>
							
						
						
												
										<div class="col-md-6">
	<div class="form-group">
	<label for="1amount">قیمت فوری یک رو</label>
	<div class="input-group">
	<input type="text" name="fori_yero_price" id="fori_yero_price" class="form-control" value="'.$discountList["0"]["price_fori_yero"].'" ></div>

					</div>
					</div>
							
						
					
					
											
										<div class="col-md-6">
	<div class="form-group">
	<label for="1amount">قیمت فوری دو رو</label>
	<div class="input-group">
	<input type="text" name="fori_doro_price" id="fori_doro_price" class="form-control" value="'.$discountList["0"]["price_fori_doro"].'" ></div>

					</div>
					</div>
							
						
					
					
											
										<div class="col-md-6">
	<div class="form-group">
	<label for="1amount">قیمت غیر فوری یک رو</label>
	<div class="input-group">
	<input type="text" name="no_fori_yero_price" id="no_fori_yero_price" class="form-control" value="'.$discountList["0"]["price_no_fori_yero"].'" ></div>

					</div>
					</div>
							
						
					
					
											
										<div class="col-md-6">
	<div class="form-group">
	<label for="1amount">قیمت غیر فوری دور رو</label>
	<div class="input-group">
	<input type="text" name="no_fori_doro_price" id="no_fori_doro_price" class="form-control" value="'.$discountList["0"]["price_no_fori_doro"].'" ></div>

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