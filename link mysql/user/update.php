<?php
	print_r($_GET);
	$link=mysqli_connect("127.0.0.1","root","","user") or die("無法連接資料庫:".mysql_error());
	
	$query="update test set 
	ACCOUNT='".$_GET["ACCOUNT"]."',
	PASSWORD='".$_GET["PASSWORD"]."',
	NAME='".$_GET["NAME"]."',
	MAIL='".$_GET["MAIL"]."'
	where ID ='".$_GET["id"]."'";
	echo $query;
	
	$result=mysqli_query($link,$query)or die("無法送出".mysql_error());
	echo"<script>alert('修成功');</script>";
	echo"<script>location.href='list.php'</script>";
?>