<html>
<head>
<?php
class Vehicle{
	var $no;
	var $owner;
	function Vehicle($owner,$no){
		$this->no=$no;
		$this->owner=$owner;
	}
	function printVehicle(){
		echo"所有人:".$this->owner."<br>";
		echo"車號:".$this->no."<br>";
	}
}
class Car extends Vehicle{
	var $doors;
	function Car($owner,$no,$doors=4){
		parent::Vehicle($owner,$no);
		$this->doors=$doors;
	}
	function printVehicle(){
		
		parent::printVehicle();
		echo"幾門:".$this->doors."<br>";
	}
}
?>
</head>
<body>
<?php
$sentra=new Car("陳惠安",1234567);
$civil=new Car("將小於",5678924,2);

$sentra->printVehicle();
$civil->printVehicle();

?>
</body>
</html>