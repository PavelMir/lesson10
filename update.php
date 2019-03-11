UPDATE product_description SET description = '' WHERE lang <> 046;
SELECT * FROM product_description WHERE description = '';


// Ниже это я делал на windows в openserver
<?php
$con=mysqli_connect('localhost', 'root', '', 'newa');

$sql="UPDATE product_description SET description='' WHERE lang <> 045";
$query=mysqli_query($con, $sql);

$sqlSelect="SELECT * FROM product_description WHERE description=''";
$querySelect=mysqli_query($con, $sqlSelect);
while($row=mysqli_fetch_array($querySelect)){
	print $row['product_id'].'<br><br>';
}

//2. Дополнительное и необязательное задание: SQL-запросом выбрать все продукты, 
//у которых нет описания на каком-то конкретном языке.
//Для решение этой задачи 
//можно удалить описание одного из продуктов из таблицы product_descriptions, 
//и потом нужно будет написать запрос, который найдет продукт, у которого отсутствует описание
