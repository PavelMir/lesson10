delimiter $$
create procedure select_or_insert(field_lang int(11), field_name varchar(255), field_description text)
begin
    update product_description set description=field_description WHERE (lang = field_lang AND name = field_name);
      IF ROW_COUNT() = 0 THEN
        insert into product_description (lang, name, description) values (field_lang, field_name, field_description);
  END IF;
end $$
delimiter ;
call select_or_insert(224, 'testersa', 'testDescription7');

// Ниже это я в openserver на windows делал
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
