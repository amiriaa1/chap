<?php


include_once('class.database.php');

class ManageStudents
 { public $link; function __construct()
 { global $table_prefix; $db_connection = new dbConnection(); $this->link = $db_connection->connect(); return $this->link; }
 
 
function AddStudent($aid,$username,$pass,$uactive,$name,$email,$codmeli)
 { global $table_prefix;
 $query = $this->link->prepare("INSERT INTO `".$table_prefix."users` (`aid`,`uusername`,`upass`,`uactive`,`ufaname`,`uemail`,`nacode`) VALUES (?,?,?,?,?,?,?) ");

 $values = array($aid,$username,$pass,$uactive,$name,$email,$codmeli);
 $query->execute($values); $counts = $query->rowCount();
 return $counts; }
 
 
 
  
function Addusersaddr($uusername,$name,$ostan,$shahr,$postcod,$number,$addr)
 { global $table_prefix;
 $query = $this->link->prepare("INSERT INTO `nim_users_addr` (`uusername`,`name`,`ostan`,`shahr`,`postcod`,`number`,`addr`) VALUES (?,?,?,?,?,?,?) ");

 $values = array($uusername,$name,$ostan,$shahr,$postcod,$number,$addr);
 $query->execute($values); $counts = $query->rowCount();
 return $counts; }
 
////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function UsetTwoFactorupdate($username)
 { global $table_prefix; 
 $query = $this->link->prepare("UPDATE `".$table_prefix."users` SET `uactive`=1  WHERE `uusername`=?");
 $values = array($username); $query->execute($values); $counts = $query->rowCount(); return $counts; }
 
////////////////////////////////////////////////////////////////////////////////////////////////////////////////


    function Updateuserdataprofile($ufaname,$uemail,$nacode,$uusername)
    { global $table_prefix;
        $query = $this->link->prepare("UPDATE `".$table_prefix."users` SET `ufaname`=? , `uemail`=?, `nacode`=? WHERE `uusername`=?");
        $values = array($ufaname,$uemail,$nacode,$uusername); $query->execute($values); $counts = $query->rowCount(); return $counts; }

////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///
///
    function Updateuserdataprofile2($ufaname,$uemail,$nacode,$username2,$uusername)
    { global $table_prefix;
        $query = $this->link->prepare("UPDATE `".$table_prefix."users` SET `ufaname`=? , `uemail`=?, `nacode`=? , `uusername`=? WHERE `uusername`=?");
        $values = array($ufaname,$uemail, $username2,$uusername); $query->execute($values); $counts = $query->rowCount(); return $counts; }

////////////////////////////////////////////////////////////////////////////////////////////////////////////////



    function userupdatebasketbtyuu($username,$btyyu)
    { global $table_prefix;
        $query = $this->link->prepare("UPDATE `nim_basket` SET `uusername`=? WHERE `uusername`=?");
        $values = array($username,$btyyu); $query->execute($values); $counts = $query->rowCount(); return $counts; }

////////////////////////////////////////////////////////////////////////////////////////////////////////////////




function Useraddtoken($token,$username)
 { global $table_prefix; 
 $query = $this->link->prepare("UPDATE `".$table_prefix."users` SET `token`=? WHERE `uusername`=?");
 $values = array($token,$username); $query->execute($values); $counts = $query->rowCount(); return $counts; } 
 
////////////////////////////////////////////////////////////////////////////////////////////////////////////////

 function autveruserinsert($tre,$tre2,$uusername)
 { global $table_prefix; 
 $query = $this->link->prepare("UPDATE `".$table_prefix."users` SET `autver`=? , `aut_time_add`=? WHERE `uusername`=?");
 $values = array($tre,$tre2,$uusername); $query->execute($values);  $counts = $query->rowCount(); return $counts; } 
 
 
 ////////////////////////////////////////////////////////////////////////////////////////////////////////////////

 
 function GetStudentList($query) { global $table_prefix;
 if (!preg_match('/ORDER/i', $query)) $order = "ORDER BY `uid` DESC"; 
 else $order = "";
 $query = $this->link->query("SELECT * FROM `".$table_prefix."users` $query $order");
 $counts = $query->rowCount(); $result = $query->fetchAll();
 return $result; }

////////////////////////////////////////////////////////////////////////////////////////////////////////////////



 function GetStudenuusername($username) { global $table_prefix; $query = $this->link->prepare("SELECT * FROM `".$table_prefix."users` WHERE `uusername`=?");

 $values = array($username);
 $query->execute($values);
 $counts = $query->rowCount();
 if($counts==1) { $result = $query->fetchAll(); return $result; } 
 else { return $counts; } } 

 ////////////////////////////////////////////////////////////////////////////////////////////////////////////////
 function Getuserfromtoken($token) { global $table_prefix; $query = $this->link->prepare("SELECT * FROM `".$table_prefix."users` WHERE `token`=?");

 $values = array($token);
 $query->execute($values);
 $counts = $query->rowCount();
 if($counts==1) { $result = $query->fetchAll(); return $result; } 
 else { return $counts; } } 

 ////////////////////////////////////////////////////////////////////////////////////////////////////////////////



 
function GetUserinvestlistcron($query1) { global $table_prefix; $tids=implode(',', $tids); $query = $this->link->prepare("SELECT * FROM `nim_invest` WHERE `aactive`=?"); $values = array($query1); $query->execute($values); $result = $query->fetchAll(); return $result; } 


 
function Getusersaddr($uusername)
 { global $table_prefix; $tids=implode(',', $tids); $query = $this->link->prepare("SELECT * FROM `nim_users_addr` WHERE `uusername`=?");
 $values = array($uusername); $query->execute($values); $result = $query->fetchAll(); return $result; } 



 function GetStudentList2($query,$start,$limit) { global $table_prefix;
 if (!preg_match('/ORDER/i', $query)) $order = "ORDER BY `uid` DESC";
 else $order = "";
 if($start==NULL && $limit==NULL) $query = $this->link->query("SELECT * FROM `".$table_prefix."users` $query $order");
 else $query = $this->link->query("SELECT * FROM `".$table_prefix."users` $query $order LIMIT $start,$limit");
 $counts = $query->rowCount(); $result = $query->fetchAll();
 return $result; }
 
////////////////////////////////////////////////////////////////////////////////////////////////////////////////


 function GetNumOfStudents($query) { global $table_prefix; $query = $this->link->query("SELECT count(*) As c FROM `".$table_prefix."users` $query");
 $result = $query->fetchAll();
 return $result[0]['c']; } 
 
 ////////////////////////////////////////////////////////////////////////////////////////////////////////////////

 
 function LoginStudent($username)
{ global $table_prefix; $query = $this->link->prepare("SELECT * FROM `".$table_prefix."users` WHERE `uusername`=?");
 $values = array($username); $query->execute($values); $counts = $query->rowCount();
 return $counts; }
 ////////////////////////////////////////////////////////////////////////////////////////////////////////////////

 
 function UserTokenchek($token)
{ global $table_prefix; $query = $this->link->prepare("SELECT * FROM `".$table_prefix."users` WHERE `token`=?");
 $values = array($token); $query->execute($values); $counts = $query->rowCount();
 return $counts; }
 ////////////////////////////////////////////////////////////////////////////////////////////////////////////////





 function GetUserInfo($username) { global $table_prefix; $query = $this->link->prepare("SELECT * FROM `".$table_prefix."users` WHERE `uusername`=?");

 $values = array($uusername);
 $query->execute($values);
 $counts = $query->rowCount();
 if($counts==1) { $result = $query->fetchAll(); return $result[0]; } 
 else { return $counts; } } 
 
 ////////////////////////////////////////////////////////////////////////////////////////////////////////////////

 function UsernameAvailability($username)
 
 { global $table_prefix; if(empty($uusername))
	 
	 { $query = $this->link->prepare("SELECT * FROM `".$table_prefix."users` WHERE `uusername`=?");
	 
 $values = array($username); $query->execute($values); $counts = $query->rowCount(); 

 
 if($counts==1) return 0; else return 1; } else { return 2; } } 
  ////////////////////////////////////////////////////////////////////////////////////////////////////////////////
 
 function GetStudentInfo($uusername) { global $table_prefix; $query = $this->link->prepare("SELECT * FROM `".$table_prefix."users` WHERE `uusername`=?");
 $values = array($uusername); $query->execute($values); $counts = $query->rowCount(); if($counts==1) { $result = $query->fetchAll(); return $result[0];
 } else { return $counts; } } 
 
  ////////////////////////////////////////////////////////////////////////////////////////////////////////////////

 
 function GetStudentInfoById($uid) { global $table_prefix; $query = $this->link->prepare("SELECT * FROM `".$table_prefix."users` WHERE `uid`=?");
 $values = array($uid); $query->execute($values); $counts = $query->rowCount(); if($counts==1) { $result = $query->fetchAll(); return $result[0];
 } else { return $counts; } } 
 
////////////////////////////////////////////////////////////////////////////////////////////////////////////////

 
 function GetStudentInfoBySCode($uusername)
 { global $table_prefix; $query = $this->link->prepare("SELECT * FROM `".$table_prefix."users` WHERE `uusername`=?");
 $values = array($uusername); $query->execute($values); $counts = $query->rowCount();
 if($counts==1) { $result = $query->fetchAll(); return $result[0]; } else { return $counts; } } 
 
////////////////////////////////////////////////////////////////////////////////////////////////////////////////

 
 function LastStudentID()
 { global $table_prefix; $query = $this->link->query("SELECT `uid` FROM `".$table_prefix."users` ORDER BY `uid` DESC LIMIT 0,1");
 $result = $query->fetchAll(); return $result[0]['uid']; } 
 
  ////////////////////////////////////////////////////////////////////////////////////////////////////////////////

 
 function Username2UID($uusername)
 { global $table_prefix; $query = $this->link->query("SELECT `uid` FROM `".$table_prefix."users` WHERE `uusername`='$uusername'");
 $result = $query->fetchAll(); return $result[0]['uid']; } 
 
////////////////////////////////////////////////////////////////////////////////////////////////////////////////

 
////////////////////////////////////////////////////////////////////////////////////////////////////////////////

 
function ResetPassword($uid,$upass)
 { global $table_prefix; $upass = md5($upass); $query = $this->link->prepare("UPDATE `".$table_prefix."users` SET `upass`=? WHERE `uid`=?");
 $values = array($upass,$uid); $query->execute($values); $counts = $query->rowCount(); return $counts; } 
 

 function UserResetPassword($email,$upass)
 { global $table_prefix; $upass = md5($upass); $query = $this->link->prepare("UPDATE `".$table_prefix."users` SET `upass`=? WHERE `uusername`=?");
 $values = array($upass,$email); $query->execute($values); $counts = $query->rowCount(); return $counts; } 
 
  ////////////////////////////////////////////////////////////////////////////////////////////////////////////////

 
 function ChangePassword($uid,$current_pass,$new_pass) { global $table_prefix; $current_pass = md5($current_pass); $new_pass = md5($new_pass);
 $query = $this->link->prepare("SELECT * FROM `".$table_prefix."users` WHERE `uid`=? AND `upass`=?"); $values = array($uid,$current_pass);
 $query->execute($values); $counts = $query->rowCount(); if($counts==1)
	 { $query = $this->link->prepare("UPDATE `".$table_prefix."users` SET `upass`=? WHERE `uid`=?");
 $values = array($new_pass,$uid); $query->execute($values); $counts = $query->rowCount(); if($counts==1) return 2; else return 3; } else return 1; } 
 
  ////////////////////////////////////////////////////////////////////////////////////////////////////////////////

 



 
 function SendResetLink($email)
 { global $table_prefix; $query = $this->link->prepare("SELECT * FROM `".$table_prefix."users` WHERE `uemail`=?");
 $values = array($email); $query->execute($values); $counts = $query->rowCount(); if($counts==1)
	 { $result = $query->fetchAll(); return substr($result[0]['upass'],5,20); } else { return 0; } } 
 
  ////////////////////////////////////////////////////////////////////////////////////////////////////////////////
 
 
 } 




?>