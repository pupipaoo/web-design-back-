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
		$score['Rachel']=array('國文'=>56,'數學'=>55,'英文'=>45);	//$SCORE陣列是二微陣列;ARRAY()一大串是結合陣列
		$score['Monica']=array('國文'=>46,'數學'=>45,'英文'=>35);
		$score['Phobea']=array('國文'=>26,'數學'=>35,'英文'=>55);
		print_r($score);
		foreach($score as $key => $value){	//此時的$score大陣列(i.e二微陣列),他的key是人名,VALUE是('國文'=>56,'數學'=>55,'英文'=>45)整串
			print_r($score);	//會出現3組的$SCORE陣列，因為FOREACT跑了以$SCORE為名陣列的總次數;若此語法放在foreach前,僅印出一組array
			echo "<tr><td>$value</td>";	//打了$value後,網頁對應位置會出現ARRAY,因為在$SCORE二微陣列中,VALUE值是小鎮列ARRAY
			foreach($value as $k=>$v){
				echo"<td>$v</td>";	//在小鎮列ARRAY中,KEY是國文,VALUE是分數
			}
		echo"</tr>";
		}
	?>
	</tbody>
</table>
</body>
</html>