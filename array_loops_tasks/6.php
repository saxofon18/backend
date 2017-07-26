<?php

/*6. Дан массив $ arr. С помощью цикла foreach запишите английские названия в массив $ en, а
Русские - в массив $ ru.
$ Arr = array ('green' => 'green', 'red' => 'red', 'blue' => 'голубой');
$ En = array ('зеленый', 'красный', 'синий');
$ Ru = массив ('зеленый', 'красный', 'голубой');*/

$arr = array('green' => 'green', 'red' => 'red', 'blue' => 'голубой');
$en = array('зеленый', 'красный', 'синий');
$ru = array('зеленый', 'красный', 'голубой');


foreach($arr as $key => $value){
	$en[] = $key;
	$ru[] = $value;
	
}

print_r($en);
echo "<br>";
print_r($ru);








 