<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
///////////////// connect MySQL server ////////////////////////
$hostname="192.168.200.4";
//$hostname="192.168.1.254";
//$hostname="61.7.219.60";
//$hostname="localhost";
$databasename="meeting";
$username="root";
//$password='h42$_PUb';
$password='1234';
//$conn=mysql_pconnect($hostname,$username,$password) or die("??????????????? MySQL SERVER ???");
$conp=mysql_pconnect($hostname,$username,$password) or die(mysql_error());
mysql_select_db($databasename,$conp) or die("ไม่สามารถทำการติดต่อดาต้าเบสได้");
mysql_db_query($databasename,"SET NAMES utf-8");
$cs1 = "SET character_set_results=utf8";
mysql_query($cs1) or die('Error query: ' . mysql_error()); 

$cs2 = "SET character_set_client = utf8";
mysql_query($cs2) or die('Error query: ' . mysql_error()); 

$cs3 = "SET character_set_connection = utf8";
mysql_query($cs3) or die('Error query: ' . mysql_error());
//////////////////////////////  END ///////////////////////////////////
//echo "5555";

		$MSG="Conference Room Reservation System : ระบบจองห้องประชุม โรงพยาบาลม่วงสามสิบ";
?>