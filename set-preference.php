<?php
	include "connect.php";
	$userid = $_GET['id'];
	$bmin = $_GET['bmin'];
	$bmax = $_GET['bmax'];
	$hmin = $_GET['hmin'];
	$hmax = $_GET['hmax'];
	$tmin = $_GET['tmin'];
	$tmax = $_GET['tmax'];
	$result = mysql_query("select * from `preference` where userid='$userid'");
	$num_rows = mysql_num_rows($result);
	if($num_rows==0){
		mysql_query("insert into `preference`(`userid`,`bmin`,`bmax`,`hmin`,`hmax`,`tmin`,`tmax`) values('$userid','$bmin','$bmax','$hmin','$hmax','$tmin','$tmax')");
	}else{
		mysql_query("update `preference` set `bmin`='$bmin',`bmax`='$bmax',`hmin`='$hmin',`hmax`='$hmax',`tmin`='$tmin',`tmax`='$tmax' where userid='$userid'");
	}
	echo "1";
 ?>
