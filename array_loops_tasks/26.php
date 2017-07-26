<?php

/*26. Вам нужно создать массив и заполнить его случайными числами от 1 до 100 (ф­я rand).
Далее, вычислить произведение тех элементов, которые больше ноля и у которых парные
индексы. После вывести на экран элементы, которые больше ноля и у которых не парный
индекс.*/
for($i=0; $i<10; $i++) {
    $arr[$i] = rand(1,100); // создали массив со случайными значениями 
}
echo '<pre>';
print_r($arr);
echo '</pre>';
foreach ($arr as $key => $value){
    if ($key % 2 == 0  && $key !== 0) {
        $arr1[] = $value;
    }
}
echo '<hr>';
echo "Элементы с парным индексом:";
echo '<pre>';
print_r($arr1);
echo '</pre>';
$multiplication = array_product($arr1);
echo "Произведение элементов, у которых парные индексы: $multiplication";
echo '<hr>';
foreach ($arr as $key => $value){
    if ($key%2 != 0) {
        $arr2[] = $value;
    }
}
echo "Элементы с непарным индексом:";
echo '<pre>';
print_r($arr2);
echo '</pre>';



















