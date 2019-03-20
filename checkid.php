<?php
	header("Content-type:text/html;charset=utf-8");
	$userId=$_GET["userId"];
	$conn=mysql_connect("localhost:3306","root","root");
	if (!$conn) {
		die("服务器出错");
	}else{
		mysql_select_db("tao",$conn);
		$sqlstr="select * from user where userId='$userId'";
		$result=mysql_query($sqlstr,$conn);
		mysql_close($conn);
		$rows=mysql_num_rows($result);
		if ($rows==1) {
			echo "1";
		}else{
			echo "0";
		}
	}
?>