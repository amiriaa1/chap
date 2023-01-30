<?php

require_once('config.php');
ini_set('session.cookie_httponly',true);
session_start();
$cookie = (isset($_COOKIE[$user_session_name])?1:0);
date_default_timezone_set('Europe/London');
if($cookie==0)
{
	//Protecting against SESSION Hijaking
	if(isset($_SESSION['user_last_ip'])===false)
	{
		$_SESSION['user_last_ip'] = $_SERVER['REMOTE_ADDR'];
	}
	if($_SESSION['user_last_ip'] !== $_SERVER['REMOTE_ADDR'])
	{
		session_unset();
		session_destroy();
	}
	//--End of Protecting against SESSION Hijaking
}



$isLogedIn = ($cookie==0?isset($_SESSION[$user_session_name]):isset($_COOKIE[$user_session_name]));
if (isset($login_needed) && $login_needed==1 && !$isLogedIn)
{
	$redirect = explode('/',$_SERVER['REQUEST_URI']);
	$redirect = $redirect[count($redirect)-1];
	if($redirect=="")
	{
		header("Location: login"); exit;
	}
	else
	{
		header("Location: login?redirect=".urlencode($redirect).""); exit;
	}
}

include_once('include/class.database.php');
$db_connection = new dbConnection();
if(!$db_connection->connect())
{
	header('Location: install'); exit();
}
include_once('include/class.admin.php');
include_once('include/functions.php');
include_once('bankApi.php');
include_once('func.php');
include_once('jdf.php');
include_once('include/class.settings.php');
$settings_class = new ManageSettings();
$system_settings = $settings_class->SystemSettings();
$dir = $system_settings["dir"];
$theme = $system_settings["theme"];
$language = $system_settings["language"];


$institute_name = $system_settings["institute_name"];
$system_title = $system_settings["system_title"];
$uusername_title = $system_settings["uusername_title"];
$client_id = $system_settings["gateway1_key"];
$secret_id = $system_settings["gateway2_key"];
$refresh_token = $system_settings["gateway3_key"];



include_once('language/'.$language.'.php');
include_once('include/class.student.php');
include_once('include/class.fee.php');
$student = new ManageStudents();

if($isLogedIn)
{
	if($cookie==0)
	{
		if(!$student->LoginStudent($_SESSION[$user_session_name]))
			header ('Location: logout.php');
		$studentProp=$student->GetStudentInfo($_SESSION[$user_session_name]);
	}
	else
	{
		if(!$student->LoginStudent($_COOKIE[$user_session_name]))
			header ('Location: logout.php');
		$studentProp=$student->GetStudentInfo($_COOKIE[$user_session_name]);
	}
	
	$uid=$studentProp['uid'];
	$uusername=$studentProp['uusername'];
	$ucomment=$studentProp['ucomment'];
	$utimestampuserupdatee=$studentProp['aut_time_add'];
	$autver=$studentProp['autver'];
	$utimestampuser=$studentProp['utimestamp'];
	$uactive=$studentProp['uactive'];
		$ufaname=$studentProp['ufaname'];
		
		$uemail=$studentProp['uemail'];
		
}

if ($dir=="rtl")
{
	$align1 = "right";
	$align2 = "left";
}
else
{
	$align1 = "left";
	$align2 = "right";
}
$table_width=$success=$error="";



?>