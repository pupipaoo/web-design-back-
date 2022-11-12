<html>
<head>


<?php
class Time{
	var $seconds;
	var $minutes;
	var $hours;
	function printTime(){
		echo $this ->hours. ":".$this->minutes.":".$this -> seconds."<br>";
	}
	
}

?>
</head>
<body>
<?php
$now= new Time();
$lasttime= new Time();
$now ->hours=9;
$now ->minutes=45;
$now ->seconds=20;
$lasttime ->hours=16;
$lasttime ->minutes=36;
$lasttime ->seconds=3;
echo "現在時間:";
$now ->printTime();
echo "上次時間:";
$lasttime ->printTime();
?>
</body>
</html>


</body>