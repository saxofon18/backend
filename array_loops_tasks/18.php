<?php

/*18. Составьте массив дней недели. С помощью цикла foreach выведите все дни недели,
выходные дни следует вывести жирным.
*/

$Saturday = 'Суббота';
$Sunday = 'Восскресение';
$arr = ['Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота', 'Восскресение'];
foreach($arr as $item){

if ($item === $Saturday || $item === $Sunday) { 
	 echo "<b> $item </b>";
}else { 
	echo $item;
	}
   
}







?>



 