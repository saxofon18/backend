<?php

/* 28.Создать генератор случайных таблиц. Есть переменные: $row - кол-во строк в таблице, $cols - кол-во столбцов в таблице. 
Есть список цветов, в массиве: $colors = array('red','yellow','blue','gray','maroon','brown','green'). 
Необходимо создать скрипт, который по заданным условиям выведет таблицу размера $rows на $cols, 
в которой все ячейки будут иметь цвета, выбранные случайным образом из массива $colors. 
В каждой ячейке должно находиться случайное число. <br><br> */

$row = 5; //Количество строк в таблице
$cols = 5;   //Количество столбцов в таблице
$colors = array('red','yellow','blue','gray','maroon','brown','green');
echo '<table>';
for ($i = 0; $i < $row; $i++) {
    echo '<tr>';
    for ($j = 0; $j < $cols; $j++) {
        $rc = rand(-1000,1000);
        $cl = rand(0, count($colors)-1);
        echo "<td bgcolor=\"$colors[$cl]\"> $rc  </td>";
    }
    echo '</tr>';
}
echo '</table>';














