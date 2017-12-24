<?php
header("content-type:text/html;charset=utf-8");
$db_host = "localhost";
$db_user = "root";
$db_pwd = "";
$db_name = "sleep_monitoring";
/*try{
	$pdo=new PDO("mysql:host=localhost;dbname=fullcalendar","root","");
}catch(Exception $e){
	die("数据库连接失败").$e->getMessage();
}*/
$link = @mysql_connect($db_host,$db_user,$db_pwd);//PDO
if(!$link){
	echo "PHP连接MySQL失败".mysql_error();
	exit();
}
if(!mysql_select_db($db_name)){
	echo "选择数据库{$db_name}失败！".mysql_error();
	exit();
} 
mysql_query("set names utf8"); 

/*$link=mysql_connect("localhost","root","")or die("不能连接到数据库服务器".mysql_error());
$db_selected=mysql_select_db("fullcalendar",$link);
// $db_selected=mysql_query("use fullcalendar",$link);
if($db_selected){
	echo"数据库连接成功！";
}*/
?>
