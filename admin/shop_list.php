<?php

$login_needed=0;
include_once('main.php');
include_once('header.php');
$student = new ManageStudents();
$fee = new ManageFees();	
echo'


<div class="col-12">
<div class="box box-inverse bg-dark bg-hexagons-white">
<div class="box-body">
<div class="row">						
<center><H2>لیست محصولات</H2></center>
</div>
</div>
</div>
</div>

';


$student = new ManageStudents();
$fee = new ManageFees();



			
$query = "WHERE pay=1 ORDER BY `nim_shop_list`.`atimestamp`  DESC";			
$discountList = $fee->Getshoplistadmin($query);			
			
echo'




 <div class="box box-default">
			<div class="box-header with-border">
			  <h4 class="box-title">لیست سفار ها</h4>
			 		
			</div>
			<!-- /.box-header -->
			<div class="box-body wizard-content">
				
						
						
						
					<div style="'.$table_width.'">
						  <table class="table table-padded recent-order-list-table table-responsive-fix-big">
							<tr class="table_header default_font">
							';
					echo '
							<td style="width:70px;" class="small">
							مشاهده
							</td>';
							echo '
							<td style="width:70px;" class="small">
								وضعیت پرداخت
							</td>';
							echo '
							<td style="width:70px;" class="small">
								کد سفارش
							</td>';
					
							echo '
							<td style="width:70px;" class="small">
								کاربر
							</td>';
					
					
					
				
					
					
						
					echo '</tr>';
					///--Table Header
					$i=0;
					foreach($discountList as $discountProp)
					{
						if($i%2==0)
							$bgClass = "tr_hover_class";
						else
							$bgClass = "";
						echo '<tr style="height:30px; border-bottom:silver;" class="table_rows default_font '.$bgClass.'">';
						echo '<td style="text-align:left;">
									<!-- Split button -->
									<div class="btn-group">
									
									<a href="vei_shop?id='.$discountProp['aid'].'">
										<button type="submit" class="btn btn-rounded btn-info">غیر فعال</button></a>
										
								';

								
							
							echo'
										
									</div>
								</td>';
						echo '<td style="text-align:center;">
							پرداخت انجام شده
							</td>';
							
							echo '<td style="text-align:center;">
							'.$discountProp['unid'].'
							</td>';
								echo '<td style="text-align:center;">
							'.$discountProp['user'].'
							</td>';
						
						
						echo '</tr>';	
						$i++;				
					}
					echo '</table>
						
						
						
						
						
						
						</div>
						</div>



';


include_once('footer.php');




echo'
	 <!-- Sweet-Alert  -->
    <script src="assets/vendor_components/sweetalert/sweetalert.min.js"></script>
    <script src="assets/vendor_components/sweetalert/jquery.sweet-alert.custom.js"></script>
	
	<!-- js -->
	<script src="js/vendors.min.js"></script>
	
	<!-- Crypto Admin App -->
	<script src="js/jquery.smartmenus.js"></script>
	<script src="js/menus.js"></script>
	<script src="js/template.js"></script>
	
	<!-- Crypto Admin for demo purposes -->
	<script src="js/demo.js"></script>
	<!-- Bootstrap 4.0-->
	
    
   
</body>
</html>

	';

?>





