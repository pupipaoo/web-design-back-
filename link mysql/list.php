<html>
<body>
<a href="insert.php">新曾</a>
<table border='1'>
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
		?>