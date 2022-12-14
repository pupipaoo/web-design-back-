<html>
<body>
<table border="1">

<?php
	for($i=1;$i<=9;$i++){
		echo "<tr>";
		for($j=1;$j<=9;$j++){
			$total=$i*$j;
			
			echo"<td>$i*$j=$total</td>";
		}
		
	}

?>
</table>
</body>
</html>