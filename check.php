<?php
$con=mysqli_connect('localhost', 'root', '', 'newa');

$description='vvhgjghv';
$name='aza';
$lang=36;

$sqlCheck="SELECT * FROM product_description WHERE name='".$name."' AND lang='".$lang."'";
$queryCheck=mysqli_query($con, $sqlCheck);
$count=mysqli_num_rows($queryCheck);
	if($count>0){
		$sqlUpdate="UPDATE product_description SET lang='".$lang."', name='".$name."', description='".$description."' WHERE name='".$name."' AND lang='".$lang."'";
		$queryUpdate=mysqli_query($con, $sqlUpdate);
	}
	else{
		$sqlAdd="INSERT INTO `product_description`(`lang`, `name`, `description`) 
		VALUES ('$lang','$name','$description')";
		$queryAdd=mysqli_query($con, $sqlAdd);
	}

//1. Для таблицы product_descriptions написать SQL-запрос, 
//который будет вставлять новую запись, а если она уже существует 
//(с таким продуктом и кодом языка), то обновлять ее.
