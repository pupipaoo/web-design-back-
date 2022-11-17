<?php
class Vehicle{
	var $no;
	var $owner;
	function setNumber($no){$this->no=$no;}
	function setOwner($owner){$this->owner=$owner;}
	function printVehicle(){
		echo"所有人:".$this->owner."<br>";
		echo"車號:".$this->no."<br>";
	}
}
class Car extends Vehicle{
	var $doors;
	function Car($owner,$no,$doors=4){
		parent::setNumber($no);
		parent::setOwner($owner);
		$this->doors=$doors;
	}
	function printCar(){
		echo"====轎車資料====<br>";
		parent::printVehicle();
		echo"幾門:".$this->doors."<br>";
	}
}
?>