


<form  method="post" action="9.php">
    <label for="str1">Оставьте свой комментарий</label>
    <textarea name="str1"></textarea><br>
    <input type="submit" name="Ok">
</form>

<?php
//9. Написать функцию, которая переворачивает строку. Было "abcde", должна выдать "edcba". Ввод текста реализовать с помощью формы.


function reverseString ($str1){
    $arr = str_split($str1);
    $revArr = array_reverse($arr);
    $result = implode("", $revArr);
    echo $result;
}

if(isset($_POST['Ok'])){
    $str1 = $_POST['str1'];
    echo reverseString($str1);
}

