<html>
<body>
<table>
	<thead>
		<th>名稱</th>
		<th>成績</th>
	</thead>
	<tbody>
	<?php
		$score=array('Rachel'=>56,'Monica'=>63,'Phobra'=>72,'Joey'=>47,'Chandler'=>83,'Ross'=>91);
		foreach($score as $key=>$value){
			//也可echo'<tr><td>$key</td><td>$value</td></tr>';雖然變數包在字串，不過有$就好
			echo'<tr><td>'.$key.'</td><td>'.$value.'</td></tr>';
			
		}
	?>
	</tbody>
</table>
</body>
</html>