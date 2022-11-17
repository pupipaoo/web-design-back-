<html>
<head>


<?php
class Time{
	var $seconds;
	var $minutes;
	var $hours;
	function Time($s=0,$m=0,$h=12){
		if($this->validTime($s,$m,$h)){
			$this->seconds=$s;
			$this->minutes=$m;
			$this->hours=$h;
		}else{
			$this->seconds=0;
			$this->minutes=0;
			$this->hours=12;
		}	
	}
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
	
	
}
?>
</head>
<body>
<?php
$now=new Time(20,45,9);
$lasttime=new Time(3,36,16);
echo "現在時間:";
$now->printTime();
$seconds=$lasttime->getSeconds();
$minutes=$lasttime->getMinutes();
$hours=$lasttime->getHours();
echo "上次時間:";
echo $hours."-".$minutes."-".$seconds."<br>";
?>
</body>
</html>