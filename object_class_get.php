<html>
<head>


<?php
class Time{
	var $seconds;
	var $minutes;
	var $hours;
	function getSeconds(){return $this->seconds;}
	function getMinutes(){return $this->minutes;}
	function getHours(){return $this->hours;}
	
	
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
$seconds=$lasttime->getSeconds();
$minutes=$lasttime->getMinutes();
$hours=$lasttime->getHours();
echo "上次時間:";
echo $hours."-".$minutes."-".$seconds."<br>";
$bool=new Time();
echo "時間20:7:17是否合法:[".$bool->setTime(17,7,20)."]<br>";
?>
</body>
</html>