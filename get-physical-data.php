 <?php 
	include "connect.php";
	$userid = $_GET['id'];
	$result = mysql_query("select * from `physical-data` where userid='$userid'");
	while($arr = mysql_fetch_assoc($result)){
		$blood_pressure_h = $arr['blood_pressure_h'];
		$blood_pressure_l = $arr['blood_pressure_l'];
		$pulse_rate = $arr['pulse_rate'];
		$single_heart_rate = $arr['single_heart_rate'];
		$single_ventricular_beat = $arr['single_ventricular_beat'];
		$single_supraventricular_beat = $arr['single_supraventricular_beat'];
		$multi_heart_rate = $arr['multi_heart_rate'];
		$multi_ventricular_beat = $arr['multi_ventricular_beat'];
		$multi_supraventricular_beat = $arr['multi_supraventricular_beat'];
		$blood_oxygen = $arr['blood_oxygen'];
		$blood_sugar = $arr['blood_sugar'];
		$temperature = $arr['temperature'];
		$uric_acid = $arr['uric_acid'];
		$weight = $arr['weight'];
		$vital_capacity = $arr['vital_capacity'];
		$datetime = $arr['datetime'];
	}
	$arrs = array(
				"status"   => 1,
				"blood_pressure_h"     => $blood_pressure_h,
				"blood_pressure_l"     => $blood_pressure_l,
				"pulse_rate"     => $pulse_rate,
				"single_heart_rate"     => $single_heart_rate,
				"single_ventricular_beat"     => $single_ventricular_beat,
				"single_supraventricular_beat"     => $single_supraventricular_beat,
				"multi_heart_rate"     => $multi_heart_rate,
				"multi_ventricular_beat"     => $multi_ventricular_beat,
				"multi_supraventricular_beat"     => $multi_supraventricular_beat,
				"blood_oxygen"     => $blood_oxygen,
				"blood_sugar"     => $blood_sugar,
				"temperature"     => $temperature,
				"uric_acid"     => $uric_acid,
				"weight"     => $weight,
				"vital_capacity"     => $vital_capacity,
				"datetime"     => $datetime,
			);
	echo json_encode($arrs);
?>


