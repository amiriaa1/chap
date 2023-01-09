<?php include_once('class.database.php'); class ManageFees { public $link; function __construct() { global $table_prefix; $db_connection = new dbConnection(); $this->link = $db_connection->connect(); return $this->link; }


 
function Addcustomers($name,$lat,$lng,$addres,$cutomerstype,$submitby)
 { global $table_prefix;
 $query = $this->link->prepare("INSERT INTO `nim_customers` (`name`,`lat`,`lng`,`addres`,`cusomer_type`,`submitby`) VALUES (?,?,?,?,?,?) ");

 $values = array($name,$lat,$lng,$addres,$cutomerstype,$submitby);
 $query->execute($values); $counts = $query->rowCount();
 return $counts; }
////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function AddUserUpload($name,$location,$uusername)
 { global $table_prefix;
 $query = $this->link->prepare("INSERT INTO `files` (`name`,`location`,`uusername`) VALUES (?,?,?) ");

 $values = array($name,$location,$uusername);
 $query->execute($values); $counts = $query->rowCount();
 return $counts; }
////////////////////////////////////////////////////////////////////////////////////////////////////////////////



function Addproductt($name,$desc,$davtive,$baseprice,$type,$pic)
 { global $table_prefix;
 $query = $this->link->prepare("INSERT INTO `nim_product` (`title`,`description`,`avtive`,`baseprice`,`type`,`pic`) VALUES (?,?,?,?,?,?) ");

 $values = array($name,$desc,$davtive,$baseprice,$type,$pic);
 $query->execute($values); $counts = $query->rowCount();
 return $counts; }
////////////////////////////////////////////////////////////////////////////////////////////////////////////////




function Addcustomersapproval($name,$lat,$lng,$addres,$cutomerstype,$submitby,$approve)
 { global $table_prefix;
 $query = $this->link->prepare("INSERT INTO `nim_customers_add_app` (`name`,`lat`,`lng`,`addres`,`cusomer_type`,`submitby`,`approve`) VALUES (?,?,?,?,?,?,?) ");

 $values = array($name,$lat,$lng,$addres,$cutomerstype,$submitby,$approve);
 $query->execute($values); $counts = $query->rowCount();
 return $counts; }
////////////////////////////////////////////////////////////////////////////////////////////////////////////////





function Addshoplist($productid,$uusername,$amount,$product,$product2,$acomment,$state,$unid)
 { global $table_prefix;
 $query = $this->link->prepare("INSERT INTO `nim_shop_list` (`productid`,`user`,`amount`,`data1`,`data2`,`acomment`,`state`,`unid`) VALUES (?,?,?,?,?,?,?,?) ");

 $values = array($productid,$uusername,$amount,$product,$product2,$acomment,$state,$unid);
 $query->execute($values); $counts = $query->rowCount();
 return $counts; }
////////////////////////////////////////////////////////////////////////////////////////////////////////////////





function Addtanavoproduct($product_id,$soal,$javab1,$vazn1,$javab2,$vazn2,$javab3,$vazn3,$javab4,$vazn4,$javab5,$vazn5,$javab6,$vazn6,$javab7,$vazn7,$javab8,$vazn8,$javab9,$vazn9,$javab10,$vazn10)
 { global $table_prefix;
 $query = $this->link->prepare("INSERT INTO `nim_product_tanavo` (`product_id`,`soal`,`javab-1`,`vazn-1`,`javab-2`,`vazn-2`,`javab-3`,`vazn-3`,`javab-4`,`vazn-4`,`javab-5`,`vazn-5`
 ,`javab-6`,`vazn-6`,`javab-7`,`vazn-7`,`javab-8`,`vazn-8`,`javab-9`,`vazn-9`,`javab-10`,`vazn-10`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?) ");

 $values = array($product_id,$soal,$javab1,$vazn1,$javab2,$vazn2,$javab3,$vazn3,$javab4,$vazn4,$javab5,$vazn5,$javab6,$vazn6,$javab7,$vazn7,$javab8,$vazn8,$javab9,$vazn9,$javab10,$vazn10);
 $query->execute($values); $counts = $query->rowCount();
 return $counts; }
////////////////////////////////////////////////////////////////////////////////////////////////////////////////


function Addmissions($idd,$type,$status,$name,$addr,$lat,$lng,$comment,$promoter)
 { global $table_prefix;
 $query = $this->link->prepare("INSERT INTO `nim_missions` (`custumerid`,`missions_type`,`status`,`custumernama`,`custumeraddr`,`custumerlat`,`custumerlng`,`acomment`,`promoter`) VALUES (?,?,?,?,?,?,?,?,?) ");

 $values = array($idd,$type,$status,$name,$addr,$lat,$lng,$comment,$promoter);
 $query->execute($values); $counts = $query->rowCount();
 return $counts; }
////////////////////////////////////////////////////////////////////////////////////////////////////////////////


function Getproductlist($query) { global $table_prefix;
 $query = $this->link->query("SELECT * FROM `nim_product` $query");
 $counts = $query->rowCount(); $result = $query->fetchAll();
 return $result; }
 
 

function Getshoplistadmin($query) { global $table_prefix;
 $query = $this->link->query("SELECT * FROM `nim_shop_list` $query");
 $counts = $query->rowCount(); $result = $query->fetchAll();
 return $result; }
 
 
 
function Getproductlistcount($query) { global $table_prefix;
 $query = $this->link->query("SELECT * FROM `nim_product` $query");
 $counts = $query->rowCount(); $result = $query->fetchAll();
 return $counts; }
 
 


////////////////////////////////////////////////////////////////////////////////////////////////////////////////


function Getproducttanavolist($query) { global $table_prefix;
 $query = $this->link->query("SELECT * FROM `nim_product_tanavo` $query");
 $counts = $query->rowCount(); $result = $query->fetchAll();
 return $result; }
 
 


////////////////////////////////////////////////////////////////////////////////////////////////////////////////

 
 function Getproducttanavolistbyid($id)
 { global $table_prefix; $query = $this->link->prepare("SELECT * FROM `nim_product_tanavo` WHERE `product_id`=?"); $values = array($id);
 $query->execute($values); $result = $query->fetchAll(); return $result; } 

   ////////////////////////////////////////////////////////////////////////////////////////////////////////////////
   
    function Getproducttanavolistbyid2($id)
 { global $table_prefix; $query = $this->link->prepare("SELECT * FROM `nim_product_tanavo` WHERE `id`=?"); $values = array($id);
 $query->execute($values); $result = $query->fetchAll(); return $result; } 

   ////////////////////////////////////////////////////////////////////////////////////////////////////////////////
 function Getproducttanavolistbyidandif($id)
 { global $table_prefix; $query = $this->link->prepare("SELECT * FROM `nim_product_tanavo` WHERE `product_id`=? AND `baser`=1"); $values = array($id);
 $query->execute($values); $result = $query->fetchAll(); return $result; } 

   ////////////////////////////////////////////////////////////////////////////////////////////////////////////////

     ////////////////////////////////////////////////////////////////////////////////////////////////////////////////
 function Getshoplist1($uusername,$unid)
 { global $table_prefix; $query = $this->link->prepare("SELECT * FROM `nim_shop_list` WHERE `user`=? AND `unid`=?"); $values = array($uusername,$unid);
 $query->execute($values); $result = $query->fetchAll(); return $result; } 

   ////////////////////////////////////////////////////////////////////////////////////////////////////////////////

   function Getshopusers($uusername)
 { global $table_prefix; $query = $this->link->prepare("SELECT * FROM `nim_shop_list` WHERE `user`=?"); $values = array($uusername);
 $query->execute($values); $result = $query->fetchAll(); return $result; } 

   ////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  
  
  
 function Getproducttanavolistbyidcount($id)
 { global $table_prefix; $query = $this->link->prepare("SELECT * FROM `nim_product_tanavo` WHERE `product_id`=?"); $values = array($id);
 $query->execute($values);$counts = $query->rowCount(); $result = $query->fetchAll(); return $counts; } 

   ////////////////////////////////////////////////////////////////////////////////////////////////////////////////

   
 function getcountshoplistpart($uusername,$unid)
 { global $table_prefix; $query = $this->link->prepare("SELECT * FROM `nim_shop_list` WHERE `user`=? AND `unid`=?"); $values = array($uusername,$unid);
 $query->execute($values);$counts = $query->rowCount(); $result = $query->fetchAll(); return $counts; } 

   ////////////////////////////////////////////////////////////////////////////////////////////////////////////////

 



function GetcustomersListapproval($query) { global $table_prefix;
 $query = $this->link->query("SELECT * FROM `nim_customers_add_app` $query");
 $counts = $query->rowCount(); $result = $query->fetchAll();
 return $result; }
 
 
////////////////////////////////////////////////////////////////////////////////////////////////////////////////
function Deletecustomerapp($id)
 { global $table_prefix; $query = $this->link->prepare("DELETE FROM `nim_customers_add_app` WHERE `aid`=?");
 $values = array($id); $query->execute($values); $counts = $query->rowCount(); if($counts==1) return 1; else return $counts; } 
 
////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  function GEtmissionsapi($promoter) { global $table_prefix; $query = $this->link->prepare("SELECT * FROM `nim_missions` WHERE `promoter`='00' OR `promoter`=? ");

 $values = array($promoter);
 $query->execute($values);
 $counts = $query->rowCount();
 $result = $query->fetchAll();
 if($counts==1) { $result = $query->fetchAll(); return $result; } 
 else { return $result; } } 
 
 ////////////////////////////////////////////////////////////////////////////////////////////////////////////////
 function GetcustomersListapi($query) { global $table_prefix;
 $query = $this->link->query("SELECT name AS name , lat AS lat ,lng AS lng,addres AS address , cusomer_type AS type FROM `nim_customers` $query");
 $counts = $query->rowCount(); $result = $query->fetchAll();
 return $result; }
 
 ////////////////////////////////////////////////////////////////////////////////////////////////////////////////
 
 function updateproducttanavo($product_id,$soal,$javab1,$vazn1,$javab2,$vazn2,$javab3,$vazn3,$javab4,$vazn4,$javab5,$vazn5,$javab6,$vazn6,$javab7,$vazn7,$javab8,$vazn8,$javab9,$vazn9,$javab10,$vazn10,$id)
 { global $table_prefix;
 $query = $this->link->prepare("UPDATE `nim_product_tanavo` SET `product_id`=? ,`soal`=? ,`javab-1`=? ,`vazn-1`=? ,`javab-2`=? ,`vazn-2`=? ,`javab-3`=? ,`vazn-3`=? ,`javab-4`=? ,`vazn-4`=? ,`javab-5`=? ,
 `vazn-5`=?,`javab-6`=? ,`vazn-6`=? ,`javab-7`=? ,`vazn-7`=? ,`javab-8`=? ,`vazn-8`=? ,`javab-9`=? ,`vazn-9`=? ,`javab-10`=? ,`vazn-10`=?  WHERE `id`=?"); 
 $values = array($product_id,$soal,$javab1,$vazn1,$javab2,$vazn2,$javab3,$vazn3,$javab4,$vazn4,$javab5,$vazn5,$javab6,$vazn6,$javab7,$vazn7,$javab8,$vazn8,$javab9,$vazn9,$javab10,$vazn10,$id);
 $query->execute($values); $counts = $query->rowCount(); return $counts; }

 ////////////////////////////////////////////////////////////////////////////////////////////////////////////////
 
 function AddUserPaymentlog($Authority,$uusername,$status,$amount)
 { global $table_prefix; $now = gmdate("Y-m-d H:i:s");
 $query = $this->link->prepare("INSERT INTO `nim_payment_log` (`Authority`,`uid`,`status`,`amount`) VALUES (?,?,?,?) ");
 $values = array($Authority,$uusername,$status,$amount); $query->execute($values); $counts = $query->rowCount(); return $counts;} 

 
 
 
 function updateUserPaymentlog($comment,$RefID,$Authority)
 { global $table_prefix; $now = gmdate("Y-m-d H:i:s"); $query = $this->link->prepare("UPDATE `nim_payment_log` SET comment=? , RefID=? WHERE Authority=? ");
 $values = array($comment,$RefID,$Authority); $query->execute($values); $counts = $query->rowCount(); return $counts;} 

 
  ////////////////////////////////////////////////////////////////////////////////////////////////////////////////
 
 function customerappupdate($id)
 { global $table_prefix; $query = $this->link->prepare("UPDATE `nim_customers_add_app` SET `approve`=1 WHERE `aid`=?");
 $values = array($id); $query->execute($values); $counts = $query->rowCount(); return $counts; } 

  ////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  function Updateshoplist($json,$unid)
 { global $table_prefix; $query = $this->link->prepare("UPDATE `nim_shop_list` SET `state`=2 ,`data3`=? WHERE `unid`=?");
 $values = array($json,$unid); $query->execute($values); $counts = $query->rowCount(); return $counts; } 

  ////////////////////////////////////////////////////////////////////////////////////////////////////////////////
 
   function Updateshoplistafterpay($unid)
 { global $table_prefix; $query = $this->link->prepare("UPDATE `nim_shop_list` SET `state`=3 ,`pay`=1 WHERE `unid`=?");
 $values = array($unid); $query->execute($values); $counts = $query->rowCount(); return $counts; } 

  ////////////////////////////////////////////////////////////////////////////////////////////////////////////////
 
 
 
 function GetmaWalletList($submitby)
 { global $table_prefix; $query = $this->link->prepare("SELECT * FROM `nim_users` WHERE `uusername`=?"); $values = array($submitby);
 $query->execute($values); $result = $query->fetchAll(); return $result; } 

   ////////////////////////////////////////////////////////////////////////////////////////////////////////////////
   
function Productupdate($title,$description,$type,$pic,$baseprice,$avtive,$id)
 { global $table_prefix; $query = $this->link->prepare("UPDATE `nim_product` SET `title`=? ,`description`=? ,`type`=?,`pic`=?,`baseprice`=?,`avtive`=? WHERE `aid`=?");
 $values = array($title,$description,$type,$pic,$baseprice,$avtive,$id); $query->execute($values); $counts = $query->rowCount(); return $counts; }
////////////////////////////////////////////////////////////////////////////////////////////////////////////////




function GetUserPayments($uid2) { global $table_prefix; $query = $this->link->prepare("SELECT * FROM `".$table_prefix."user_payments` WHERE `uid`=?");
 $values = array($uid2); $query->execute($values); $result = $query->fetchAll(); return $result; }



function AddUserPayment($uid,$uppayment,$upgateway,$uptrack_code,$upcomment,$walletacc) { global $table_prefix; $now = gmdate("Y-m-d H:i:s"); $query = $this->link->prepare("INSERT INTO `".$table_prefix."user_payments` (`uid`,`uppayment`,`upgateway`,`uptrack_code`,`update`,`upcomment`,`walletacc`) VALUES (?,?,?,?,?,?,?) "); $values = array($uid,$uppayment,$upgateway,$uptrack_code,$now,$upcomment,$walletacc); $query->execute($values); $counts = $query->rowCount(); return $counts;}

   ////////////////////////////////////////////////////////////////////////////////////////////////////////////////
 
 function Getmissionslistbyid($id) { global $table_prefix; $query = $this->link->prepare("SELECT * FROM `nim_missions` WHERE `aid`=?");

 $values = array($id);
 $query->execute($values);
 $counts = $query->rowCount();
 if($counts==1) { $result = $query->fetchAll(); return $result; } 
 else { return $counts; } } 

 ////////////////////////////////////////////////////////////////////////////////////////////////////////////////

 
 
 
  function Getcustomerformission($idd) { global $table_prefix; $query = $this->link->prepare("SELECT * FROM `".$table_prefix."customers` WHERE `aid`=?");

 $values = array($idd);
 $query->execute($values);
 $counts = $query->rowCount();
 if($counts==1) { $result = $query->fetchAll(); return $result; } 
 else { return $counts; } } 

 ////////////////////////////////////////////////////////////////////////////////////////////////////////////////


	}


?>