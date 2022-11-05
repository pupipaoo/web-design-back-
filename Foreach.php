<?php
$arr=array(2,4,6,8);
foreach($arr as $value){
	echo"value=$value \n";
}
echo'<br>';
$arr=array(
	'name'=>'joe',
	'cel'=>1234567,
	'address'=>'Taiwan'
);
foreach($arr as $key => $value){
		echo"$key => $value\n";
}
?>