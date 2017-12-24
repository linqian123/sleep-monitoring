<?php
	include "connect.php";
	$userid = $_GET['id'];
	$center_lng = $_GET['center_lng'];
	$center_lat = $_GET['center_lat'];
	$radius = $_GET['radius'];
	$result = mysql_query("select * from `electronic-fence` where userid='$userid'");
	$num_rows = mysql_num_rows($result);
	if($center_lng == 'null' && $num_rows == 0){
		echo "1";
	}else if($center_lng == 'null' && $num_rows != 0){
		mysql_query("delete from `electronic-fence` where userid='$userid'");
		echo "1";
	}else if($center_lng != 'null' && $num_rows == 0){
		mysql_query("insert into `electronic-fence`(`userid`,`center-lng`,`center-lat`,`radius`) values('$userid','$center_lng','$center_lat','$radius')");
		echo "1";
	}else{
		mysql_query("update `electronic-fence` set `center-lng`='$center_lng',`center-lat`='$center_lat',`radius`='$radius' where userid='$userid'");
		echo "1";
	};
 ?>
