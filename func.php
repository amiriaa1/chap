<?php

function sendemailverfy($llvm)
{	
include_once('main.php');

$tre=rand(999,9999);

$tre2=date("Y-m-d H:i:s");
                                                                                                                    

$tre2=date("Y-m-d H:i:s");
$student = new ManageStudents();
$mobileInfo = $student->autveruserinsert($tre,$tre2,$llvm);	
	

}

?>