<?php
	$link=mysqli_connect("127.0.0.1","root","","user") or die("無法連接資料庫:".mysql_error());
	foreach($_GET as $key => $value){	
		$$key=$value;		
		if($value == ""){
			$error_msg.="$key is empty;";
		}
	}
	if($error_msg != ""){
		echo"0";
	}else{
		$query="INSERT INTO `test`(`ACCOUNT`, `PASSWORD`, `NAME`, `MAIL`) 
		VALUES('$ACCOUNT','".$_GET['PASSWORD']."','".$_GET['NAME']."','".$_GET['MAIL']."')";	
	
		$result=mysqli_query($link,$query)or die("無法送出".mysql_error());
	
		echo"1";
	}
	
?>
