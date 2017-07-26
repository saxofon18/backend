<?php
//13. Вывести таблицу умножения
$rows = 10;
$cols = 10;


echo '<table border="1" cellpadding="20">';
echo '<tr>';
for($i = 1; $i <= $rows; $i++) {
	
	
  for($j = 1; $j < $cols; $j++) 
    echo "<td>".($i*$j)."</td>";
	echo '</tr>';
}

echo '</tr></table border>';








?>




 