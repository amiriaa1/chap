<?php

include_once('main.php');
include_once('header.php');
$student = new ManageStudents();
$fee = new ManageFees();

$btyyu=$_SESSION["bfslogin"];
echo $btyyu;

?>