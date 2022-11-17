<html>
<head>


<?php
class Time{
	var $seconds;
	var $minutes;
	var $hours;
	function printTime(){
		echo $this->hours.":".$this->minutes.":".$this->seconds."<br>";
	}
	function validTime($s,$m,$h){
		if($s<0||$s>60)return false;
		if($m<0||$m>60)return false;
		if($h<0||$h>24)return false;
		return true;
	}
	function setTime($s,$m,$h){
		if($this->validTime($s,$m,$h)){
			$this->seconds=$s;
			$this->minutes=$m;
			$this->hours=$h;
			return true;
		}else
		return false;
	}
	
}
?>
</head>
<body>
<?php
$now=new Time();
$lasttime=new Time();
$now->setTime(20,45,9);
$lasttime->setTime(3,36,16);
echo "現在時間:";
$now->printTime();
echo "上次時間:";
$lasttime->printTime();
?>
</body>
</html>