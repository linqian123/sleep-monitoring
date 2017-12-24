<?php 
	include "connect.php";
	$userid = $_GET['id'];
	$type = $_GET['type'];
	$sql_0 = "select * from `physical-status` where to_days(now())-to_days(`date`)=0 and userid='$userid'";
	$result_0 = mysql_query($sql_0);
	$num_rows_0 = mysql_num_rows($result_0);
	date_default_timezone_set('PRC'); 
	if($num_rows_0 == 0){
		$day0 = "null";
		$date0 = date("Y-m-d",strtotime("now"));
	}else{
		$count_0 = 0;
		while($arr_0 = mysql_fetch_assoc($result_0)){
			if($type == 'heart'){
				$count_0 += $arr_0['heart'];
				$day0 = $count_0 / $num_rows_0;
			}else if($type == 'breath'){
				$count_0 += $arr_0['breath'];
				$day0 = $count_0 / $num_rows_0;
			}else if($type == 'turnover'){
				$count_0 += $arr_0['turnover'];
				$day0 = $count_0 / $num_rows_0;
			}
			$date0 = $arr_0['date'];
		};
	};	
	$sql_1 = "select * from `physical-status` where to_days(now())-to_days(`date`)=1 and userid='$userid'";
	$result_1 = mysql_query($sql_1);
	$num_rows_1 = mysql_num_rows($result_1);
	if($num_rows_1 == 0){
		$day1 = "null";
		$date1 = date("Y-m-d",strtotime("-1 day"));
	}else{
		$count_1 = 0;
		while($arr_1 = mysql_fetch_assoc($result_1)){
			if($type == 'heart'){
				$count_1 += $arr_1['heart'];
				$day1 = $count_1 / $num_rows_1;
			}else if($type == 'breath'){
				$count_1 += $arr_1['breath'];
				$day1 = $count_1 / $num_rows_1;
			}else if($type == 'turnover'){
				$count_1 += $arr_1['turnover'];
				$day1 = $count_1 / $num_rows_1;
			}
			$date1 = $arr_1['date'];
		};
	};
	$sql_2 = "select * from `physical-status` where to_days(now())-to_days(`date`)=2 and userid='$userid'";
	$result_2 = mysql_query($sql_2);
	$num_rows_2 = mysql_num_rows($result_2);
	if($num_rows_2 == 0){
		$day2 = "null";
		$date2 = date("Y-m-d",strtotime("-2 day"));
	}else{
		$count_2 = 0;
		while($arr_2 = mysql_fetch_assoc($result_2)){
			if($type == 'heart'){
				$count_2 += $arr_2['heart'];
				$day2 = $count_2 / $num_rows_2;
			}else if($type == 'breath'){
				$count_2 += $arr_2['breath'];
				$day2 = $count_2 / $num_rows_2;
			}else if($type == 'turnover'){
				$count_2 += $arr_2['turnover'];
				$day2 = $count_2 / $num_rows_2;
			}
			$date2 = $arr_2['date'];
		};
	};
	$sql_3 = "select * from `physical-status` where to_days(now())-to_days(`date`)=3 and userid='$userid'";
	$result_3 = mysql_query($sql_3);
	$num_rows_3 = mysql_num_rows($result_3);
	if($num_rows_3 == 0){
		$day3 = "null";
		$date3 = date("Y-m-d",strtotime("-3 day"));
	}else{
		$count_3 = 0;
		while($arr_3 = mysql_fetch_assoc($result_3)){
			if($type == 'heart'){
				$count_3 += $arr_3['heart'];
				$day3 = $count_3 / $num_rows_3;
			}else if($type == 'breath'){
				$count_3 += $arr_3['breath'];
				$day3 = $count_3 / $num_rows_3;
			}else if($type == 'turnover'){
				$count_3 += $arr_3['turnover'];
				$day3 = $count_3 / $num_rows_3;
			}
			$date3 = $arr_3['date'];
		};
	};
	$sql_4 = "select * from `physical-status` where to_days(now())-to_days(`date`)=4 and userid='$userid'";
	$result_4 = mysql_query($sql_4);
	$num_rows_4 = mysql_num_rows($result_4);
	if($num_rows_4 == 0){
		$day4 = "null";
		$date4 = date("Y-m-d",strtotime("-4 day"));
	}else{
		$count_4 = 0;
		while($arr_4 = mysql_fetch_assoc($result_4)){
			if($type == 'heart'){
				$count_4 += $arr_4['heart'];
				$day4 = $count_4 / $num_rows_4;
			}else if($type == 'breath'){
				$count_4 += $arr_4['breath'];
				$day4 = $count_4 / $num_rows_4;
			}else if($type == 'turnover'){
				$count_4 += $arr_4['turnover'];
				$day4 = $count_4 / $num_rows_4;
			}
			$date4 = $arr_4['date'];
		};
	};	
	$sql_5 = "select * from `physical-status` where to_days(now())-to_days(`date`)=5 and userid='$userid'";
	$result_5 = mysql_query($sql_5);
	$num_rows_5 = mysql_num_rows($result_5);
	if($num_rows_5 == 0){
		$day5 = "null";
		$date5 = date("Y-m-d",strtotime("-5 day"));
	}else{
		$count_5 = 0;
		while($arr_5 = mysql_fetch_assoc($result_5)){
			if($type == 'heart'){
				$count_5 += $arr_5['heart'];
				$day5 = $count_5 / $num_rows_5;
			}else if($type == 'breath'){
				$count_5 += $arr_5['breath'];
				$day5 = $count_5 / $num_rows_5;
			}else if($type == 'turnover'){
				$count_5 += $arr_5['turnover'];
				$day5 = $count_5 / $num_rows_5;
			}
			$date5 = $arr_5['date'];
		};
	};
	$sql_6 = "select * from `physical-status` where to_days(now())-to_days(`date`)=6 and userid='$userid'";
	$result_6 = mysql_query($sql_6);
	$num_rows_6 = mysql_num_rows($result_6);
	if($num_rows_6 == 0){
		$day6 = "null";
		$date6 = date("Y-m-d",strtotime("-6 day"));
	}else{
		$count_6 = 0;
		while($arr_6 = mysql_fetch_assoc($result_6)){
			if($type == 'heart'){
				$count_6 += $arr_6['heart'];
				$day6 = $count_6 / $num_rows_6;
			}else if($type == 'breath'){
				$count_6 += $arr_6['breath'];
				$day6 = $count_6 / $num_rows_6;
			}else if($type == 'turnover'){
				$count_6 += $arr_6['turnover'];
				$day6 = $count_6 / $num_rows_6;
			}
			$date6 = $arr_6['date'];
		};
	}
	// $arr_wdata = array(
	// 	"$date6" => $day6,
	// 	"$date5" => $day5,
	// 	"$date4" => $day4,
	// 	"$date3" => $day3,
	// 	"$date2" => $day2,
	// 	"$date1" => $day1,
	// 	"$date0" => $day0
	// 	);
	// $arrs = array(
	// 			"status"   => 1,
	// 			"data"     => $arr_wdata,
	// 		);
	// echo json_encode($arrs);
	$arr_wdata = array(
		array("$date6" => $day6),
		array("$date5" => $day5),
		array("$date4" => $day4),
		array("$date3" => $day3),
		array("$date2" => $day2),
		array("$date1" => $day1),
		array("$date0" => $day0)
		);
	$arrs = array(
				"status"   => 1,
				"data"     => $arr_wdata,
			);
	echo json_encode($arrs);
	
 ?>