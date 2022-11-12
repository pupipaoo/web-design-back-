<?php
	$link=mysqli_connect("127.0.0.1","root","","user") or die("無法連接資料庫:".mysql_error());
	$query="select * from test where ID ='".$_GET["id"]."'";	//ID是指資料表裡面欄位稱呼;id是指list.php製作超連結網址設定的?id參數
	echo $query;
	$result=mysqli_query($link,$query)or die("無法送出".mysql_error());
?>
<?php
	while($row=mysqli_fetch_array($result)){
?>
<html>
	<meta charset="utf-8">
	<form action="update.php" method="GET">
		帳號<input type="text" name="ACCOUNT" value="<?=$row["ACCOUNT"];?>"><br>
		密碼<input type="text" name="PASSWORD" value="<?=$row["PASSWORD"];?>"><br>
		姓名<input type="text" name="NAME" value="<?=$row["NAME"];?>"><br>
		信箱<input type="text" name="MAIL" value="<?=$row["MAIL"];?>"><br>
		<input type="hidden" name="id" value="<?=$row["ID"];?>"><br>
		<input type="submit" value="送出"><br>
	</form>
</html>
<?php
	}
?>