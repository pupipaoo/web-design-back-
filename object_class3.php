<html>
<head>
<?php include "Ch7-4.inc.php"; ?>
</head>
<body>
<?php
if(class_exists("Vehicle")){
	$vehicle=new Vehicle();
	echo"建立\$vehicle物件<br>";
}
if(class_exists("Car")){
	$car=new Car("陳惠安",1234567);
	echo"建立\$car物件<br>";
}
echo"\$vehicle物件是類別:".get_class($vehicle)."<br>";
echo"\$car物件是類別:".get_class($car)."<br>";
echo"\$car物件的父類別:".get_parent_class($car)."<br>";
echo"\$car物件的成員變數:<br>";
$array=get_object_vars($car);
while(list($prop,$val)=each($array))
	echo "$prop=$val";
echo"<br>\$car物件的成員函數:<br>";
$array=get_class_methods(get_class($car));
foreach($array as $method)
	echo"$method()";
echo "<br>";
if(method_exists($car,"printCar"))
	echo"\$car物件的printCar()成員函數存在<br>";
if(is_subclass_of($car,"Vehicle"))
	echo"\$car物件是Vehicle的子類別<br>";

?>
</body>
</html>