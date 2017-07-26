<form  method="post" action="">
    <label for="str1">Оставьте свой комментарий</label>
    <textarea name="str1"></textarea><br>
    <input type="submit" name="Ok">
</form>

<?php
//10. Написать функцию, которая считает количество уникальных слов в тексте. Слова разделяются пробелами. Текст должен вводиться с формы.

function unique($str1){
    $b = explode(' ',mb_strtolower($str1));
    echo 'Всего слов - '.count($b);
    $b = array_unique($b);
    echo '; Уникальных слов - '.count($b);
}

echo unique($_POST['str1']);