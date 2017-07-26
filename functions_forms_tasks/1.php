/*1. Создать форму с двумя элементами textarea. При отправке формы скрипт должен выдавать только те слова, которые есть и в первом и во втором поле ввода.
Реализацию это логики необходимо поместить в функцию getCommonWords($a, $b), которая будет возвращать массив с общими словами.*/

<form  method="post" action="1.php">
    <h2 align="center">Заполните два поля ввода</h2>
    <table align="center">
        <tr>
            <td ><label for="name1">Введите свое имя:</label></td>
            <td><textarea name="name1"></textarea></td>
        </tr>
        <tr>
            <td><label for="name2">Сообщение:</label></td>
            <td><textarea name="name2"></textarea></td>
        </tr>
        <tr ><td align="right" colspan="2"><input type="submit" name="sent"></td></tr>
    </table>
</form>

<?php


$str1 = $_POST['name1'];
$str2 = $_POST['name2'];

var_dump($str1);
echo '<br/>';
var_dump($str2);
echo '<br/>';

function getCommonWords($a,$b){
    $arrForStr1 = explode(" ", $a);
    $arrForStr2 = explode(" ", $b);
    $result = array_merge($arrForStr1, $arrForStr2);
    return $result;
}

    print_r(getCommonWords($str1,$str2));



?>


