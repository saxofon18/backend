
<form  method="post" action="2.php">
    <label for="text">Оставьте свой комментарий</label>
    <textarea name="text"></textarea><br>
    <input type="submit" name="Ok">
</form>

<?php
//2. Создать форму с элементом textarea. При отправке формы скрипт должен выдавать ТОП3 длинных слов в тексте. Реализовать с помощью функции.

$strForText = $_POST['text'];
var_dump($strForText);
function TopThreeWords($strForText) {
    $arrayForText = explode(' ', $strForText);
    foreach ($arrayForText as $value) {
        for($i = 0; $i < count($arrayForText) - 1;$i++){
            if(mb_strlen($arrayForText[$i]) > mb_strlen($arrayForText[$i+1])) {
                $buffer = $arrayForText[$i];
                $arrayForText[$i] = $arrayForText[$i+1];
                $arrayForText[$i+1] = $buffer;
            }

        }
    }

    $arrayForText = array_reverse($arrayForText);
    return(array_slice($arrayForText, 0 , 3));

}

echo '<br />';
var_dump(TopThreeWords($strForText));

?>