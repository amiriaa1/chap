<?php

include_once('main.php');

$json='test';
$unid='wv91e69fj8hggyuk6w1k';
$fee = new ManageFees();
$counttttt = $fee->Updateshoplist($json,$unid);
			
	echo $counttttt;		
?>