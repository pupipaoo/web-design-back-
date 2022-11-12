<?php
	$link=mysqli_connect("127.0.0.1","root","","user") or die("無法連接資料庫:".mysql_error());
	foreach($_GET as $key => $value){	//$_代表陣列
		$$key=$value;		//將我們宣告的變數key的值，再次變成變數,ex:$key=account;$$=$account
		if($value == ""){
			$error_msg.="$key is empty;";
		}
	}
	if($error_msg != ""){
		echo"<script>alert('$error_msg');</script>";
		echo"<script>history.go(-1);</script>";
	}else{
		$query="INSERT INTO `test`(`ACCOUNT`, `PASSWORD`, `NAME`, `MAIL`) 
		VALUES('$ACCOUNT','".$_GET['PASSWORD']."','".$_GET['NAME']."','".$_GET['MAIL']."')";	//若是前面有加foreach，就可以直接用'$ACCOUNT'的寫法，否則要打較長的'".$_GET['ACCOUNT']."'
	
		$result=mysqli_query($link,$query)or die("無法送出".mysql_error());
	
		echo"<script>alert('新增成功');</script>";
		echo"<script>location.href='list.php'</script>";
	}
	//也可以http://127.0.0.1/user/add.php?ACCOUNT=xxxx&PASSWORD=oooo&NAME=cccc&MAIL=iiiii，不用跑到網頁內容打
?>
