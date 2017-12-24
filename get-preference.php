<?php 
	include "connect.php";
	$userid = $_GET['id'];
	$type = $_GET['type'];
	$result_p = mysql_query("select * from `preference` where userid='$userid'");
	$arr_p = mysql_fetch_assoc($result_p);
	if($type == 'heart'){
		$min = $arr_p['hmin'];
		$max = $arr_p['hmax'];
	}else if($type == 'breath'){
		$min = $arr_p['bmin'];
		$max = $arr_p['bmax'];
	}else if($type == 'turnover'){
		$min = $arr_p['tmin'];
		$max = $arr_p['tmax'];
	};
	$arr_pdata = array(
				"min" => $min,
				"max" => $max
		);
	$arrs = array(
				"status"   => 1,
				"data"     => $arr_pdata,
			);
	echo json_encode($arrs);
 ?>
