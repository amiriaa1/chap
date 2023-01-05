<?php

include_once('main.php');
include_once('header.php');


$bytes = openssl_random_pseudo_bytes(4);
$ram = bin2hex($bytes);

if(isset($_POST['but_upload'])){
   $maxsize = 5242880; // 5MB
   
   if(isset($_FILES['file']['name']) && $_FILES['file']['name'] != ''){
	   
       $name = $_POST['category'];
       $target_dir = "file/";
       $target_file = $target_dir . $ram . $_FILES["file"]["name"];

       // Select file type
       $extension = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

       // Valid file extensions
       $extensions_arr = array("png","tif","jpg","jpeg","psd");

       // Check extension
       if( in_array($extension,$extensions_arr) ){
 
          // Check file size
          if(($_FILES['file']['size'] >= $maxsize) || ($_FILES["file"]["size"] == 0)) {
             echo'mahdodiat hajm';
          }else{
             // Upload
             if(move_uploaded_file($_FILES['file']['tmp_name'],$target_file)){
               // Insert record
			   $fee=new ManageFees();	
			   $location=$target_file;
               $amp = $fee->AddUserUpload($name,$location,$uid);
               $success = _YOUR_video_upload_SUCCESSFULLY;
			   Success($success);
			   
			   
			   
			   echo'
			   
			   

<script type="text/javascript">
							function Mygetway()
							{

var addr = document.getElementById("addr").value;
var unid = document.getElementById("unid").value;

							
							$.ajax({
							
								    url: "aj.php",
								    type: "POST",
								    data: {op:"send_getway",addr:addr,unid:unid},
									dataType: "json",
								    success: function(data){
										
										
								
								window.location.href = data.url;
										
										
										
									}
							      });
							
							
							}
						</script>


			   
			   
			   ';
			   
			   
             }
          }

       }else{
          echo'format not supported';
       }
   }else{
      echo'file khali ast';
   }
  
} 

$unid=$_GET['unid'];
echo'


 <div class="content">
        <div class="line-steps">
            <div class="container-fluid">
                <div class="line-step-container">
                    <div class="line-step">
                        <div class="line-step-boxs">
                            <div class="line-step-box complete">
                                <a href="cart.html">
                                    <div class="icon">
                                        <i class="bi bi-bag"></i>
                                    </div>
                                    <p>سبد خرید</p>
                                </a>
                            </div>
                            <div class="line-step-box complete">
                                <a href="cart.html">
                                    <div class="icon">
                                        <i class="bi bi-file-earmark-text"></i>
                                    </div>
                                    <p>جزییات پرداخت</p>
                                </a>
                            </div>
                            <div class="line-step-box">
                                <a href="cart.html">
                                    <div class="icon">
                                        <i class="bi bi-file-earmark-break"></i>
                                    </div>
                                    <p>تکمیل سفارش</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      
								<input id="upload" name="file" type="file" multiple/>
<button name="but_upload" id="but_upload"  class="shadow-sm fw-bold btn-add-to-cart mt-sm-0 mt-2 waves-effect waves-light" onclick="Mygetway()">آپلود</button>

    
  
  
<script src="js/jquery-3.6.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/swiper-bundle.min.js"></script>
    <script src="js/app.js"></script>
    <script src="js/plugin/countdown/countdown.js"></script>
    <script src="js/plugin/back-to-top/jquery-backToTop.min.js"></script>
    <script src="js/plugin/hint-css/hint-css.js"></script>
    <script src="js/jquery-app.js"></script>
    <script src="js/plugin/waves/waves.js"></script>
    <script src="js/plugin/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>



';








?>