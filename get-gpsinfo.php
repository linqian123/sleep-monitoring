<?php
	include "connect.php";
	$userid = $_GET['id'];
	$result = mysql_query("select * from `gpsdetail` where userid='$userid'");
	while($arr = mysql_fetch_assoc($result)){
		$arrs = array(
			"lng" => $arr['lng'],
			"lat" => $arr['lat'],
			"datetime" => $arr['datetime']
		);	
	};
	echo json_encode($arrs);	
?>


