<?php 
	include "connect.php";
	$sql = "insert into `user-info`(`userid`,`mattressid`) VALUES('meimei','0002')";
	mysql_query($sql);
	echo 1;
?>
