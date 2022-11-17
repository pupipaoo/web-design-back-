<html>
<meta charset="utf-8">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="datatables.min.css"/>
<script type="text/javascript" src="datatables.min.js"></script>
<script>
	$(document).ready(function () {
    $('#example').DataTable();
	});
</script>
<body>
<a href="insert.php"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRb9itjUP9TyB5H_tbgMTUWje4FCwb5d9zMpg&usqp=CAU" width="20">新曾</a>
<table id="example" border='1'>
	<thead>
		<th>編號</th>
		<th>帳號</th>
		<th>密碼</th>
		<th>名</th>
		<th>信箱</th>
		<th>建立日期</th>
		<th>動作</th>
	</thead>
	<tbody>
		<?php
			include("db.class.php");
			$db=new db("127.0.0.1","root","","user");
			$date = $db->query("select * from test")->fetchAll();
			print_r($date);
			
			$link=mysqli_connect("127.0.0.1","root","","user") or die("無法連接資料庫:".mysql_error());
			$query="select * from test";
			$result=mysqli_query($link,$query)or die("無法送出".mysql_error());
		?>
		<?php
			while($row=mysqli_fetch_array($result)){
		?>
			<tr>
				<td><?=$row["ID"];?></td>
				<td><?=$row["ACCOUNT"];?></td>
				<td><?=$row["PASSWORD"];?></td>
				<td><?=$row["NAME"];?></td>
				<td><?=$row["MAIL"];?></td>
				<td><?=$row["DATETIME"];?></td>
				<td>
					<a href="edit.php?id=<?=$row["ID"];?>"><img src="delete.png" width="30">修改</a>
					<a href="delete.php?id=<?=$row["ID"];?>">刪除</a>
				</td>
			</tr>
		<?php		
			}
			$db->query("update test set name='阿格麗' where ID='13'");
			$db->query("insert into test(name,mail) values(?,?)",'夏洛克','aa@gmail.com');
			$db->query("delete from test where id='21'");
		?>