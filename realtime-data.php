<?php 
	include "connect.php";
	$userid = $_GET['id'];
	$type = $_GET['type'];
	$result_d = mysql_query("select * from `physical-status` where userid='$userid'");
	$result_p = mysql_query("select * from `preference` where userid='$userid'");
	$arr_p = mysql_fetch_assoc($result_p);
	$bmin = $arr_p['bmin'];
	$bmax = $arr_p['bmax'];
	$hmin = $arr_p['hmin'];
	$hmax = $arr_p['hmax'];
	$tmin = $arr_p['tmin'];
	$tmax = $arr_p['tmax'];
	while($arr_d = mysql_fetch_assoc($result_d)){
		if($type == 'breath'){
			$data = $arr_d['breath'];
			if($data >= $bmin && $data <= $bmax){
				$abnormal = 0;
			}else{
				$abnormal = 1;
			};
		}else if($type == 'heart'){
			$data = $arr_d['heart'];
			if($data >= $hmin && $data <= $hmax){
				$abnormal = 0;
			}else{
				$abnormal = 1;
			};
		}else if($type == 'turnover'){
			$data = $arr_d['turnover'];
			if($data >= $tmin && $data <= $tmax){
				$abnormal = 0;
			}else{
				$abnormal = 1;
			};
		}else if($type == 'alarm'){
			$heart = $arr_d['heart'];
			$breath = $arr_d['breath'];
			$turnover = $arr_d['turnover'];
			if($heart >= $hmin && $heart <= $hmax){
				$h_sign = 0;
			}else{
				$h_sign = 1;
			};
			if($breath >= $bmin && $breath <= $bmax){
				$b_sign = 0;
			}else{
				$b_sign = 1;
			};
			if($turnover >= $tmin && $turnover <= $tmax){
				$t_sign = 0;
			}else{
				$t_sign = 1;
			};
			if($h_sign || $b_sign || $t_sign){
				$abnormal = 1;
			}else{
				$abnormal = 0;
			};
		}
		$datetime = $arr_d['datetime'];
	};
	if($type == 'alarm'){
		$arr_data = array(
				"heart"   => $heart,
				"breath"  => $breath,
				"turnover"=> $turnover
			);
		$arr_sign = array(
				"heart"   => $h_sign,
				"breath"  => $b_sign,
				"turnover"=> $t_sign
			);
		$arrs = array(
				"status"   => 1,
				"abnormal" => $abnormal,
				"sign"     => $arr_sign,
				"value"    => $arr_data
		);
	}else{
		$arrs = array(
				"status"   => 1,
				"empty"    => 1,
				"abnormal" => $abnormal,
				"data"     => $data,
				"date"     => $datetime
			);
	};
	echo json_encode($arrs); 
?>
