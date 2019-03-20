<?php
	header("Content-type:text/html;charset=utf-8");
	// $userId=$_POST["userId"];
	// $userPass=$_POST["userPass"];
		$userId=111;
	$userPass=222;
	$conn=mysql_connect("localhost:3306","root","root");
	if (!$conn) {
		die("服务器出错");
	}else{
		mysql_select_db("tao",$conn);
		$sqlstr="insert into user(userId,userPass)
				values('$userId','$userPass')";
		$result=mysql_query($sqlstr,$conn);
		mysql_close($conn);
		if ($result>0) {
			echo "1";
		}else{
			echo "0";
		}
	}
?>