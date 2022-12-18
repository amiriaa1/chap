<?php


echo $_SESSION["product"];
$data2 = json_decode($_SESSION["product"],true);


			
		echo $data2['status'];	
			
			
?>