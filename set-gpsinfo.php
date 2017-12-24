<?php 
	include "connect.php";
	$userid = $_GET['id'];
	$lng = $_GET['lng'];
	$lat = $_GET['lat'];
	date_default_timezone_set('PRC'); 
    $datetime = date("Y-m-d H:i:s",strtotime("now"));
	$result = mysql_query("select * from `gpsdetail` where userid='$userid'");
    $num_rows = mysql_num_rows($result);
    if($num_rows == 0){
      $sql = "insert into `gpsdetail`(`userid`,`lng`,`lat`,`datetime`) values('$userid','$lng','$lat','$datetime')";
    }else{
      $sql = "update `gpsdetail` set `lng`='$lng',`lat`='$lat',`datetime`='$datetime' where userid='$userid'";
    };
	mysql_query("insert into `gpsdetail`(`lng`,`lat`) values('$lng','$lat')");
	echo '1';
 ?>
