<?php 
	include "connect.php";
	$userid = $_GET['id'];
	$result = mysql_query("select * from `electronic-fence` where userid='$userid'");
	$num_rows = mysql_num_rows($result);
	if($num_rows==0){
		echo '0';
	}else{
		$arr = mysql_fetch_assoc($result);
		$center_lng = $arr['center-lng'];
		$center_lat = $arr['center-lat'];
		$radius = $arr['radius'];
		$arrs = array(
				"status"   => 1,
				"center_lng"   => $center_lng,
				"center_lat" => $center_lat,
				"radius" => $radius
			);
		echo json_encode($arrs);
	};
	
 ?>
