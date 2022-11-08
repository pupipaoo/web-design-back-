<html>
<body>
<table border='1'>
	<thead>
		<th>名稱</th>
		<th>國</th>
		<th>數</th>
		<th>應</th>
	</thead>
	<tbody>
	<?php
		//二微陣列:array的陣列代表x軸;$score變數得陣列代表y軸
		$score['Rachel']=array('國文'=>56,'數學'=>55,'英文'=>45);
		$score['Monica']=array('國文'=>46,'數學'=>45,'英文'=>35);
		$score['Phobea']=array('國文'=>26,'數學'=>35,'英文'=>55);
		foreach($score as $key => $value){
			echo "<tr><td>$key</td>";
			foreach($value as $k=>$v){
				echo"<td>$v</td>";
			}
		echo"</tr>";
		}
	?>
	</tbody>
</table>
</body>
</html>