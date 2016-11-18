<?php
/*<p>16. Дан массив с элементами 1, 2, 3, 4, 5, 6, 7, 8, 9. С помощью цикла foreach и оператора if
выведите на экран столбец элементов массива, как показано на картинке.
1, 2, 3
4, 5, 6
7, 8, 9</p>*/
$arr = [1,2,3,4,5,6,7,8,9];
foreach($arr as $value) {
    if ($value <= 2) {
        echo "$value, ";
    } elseif ($value == 3) {
        echo "$value";
        echo "<br>";
    }
    if ($value > 3 && $value <= 5) {
        echo "$value, ";
    } elseif ($value == 6) {
        echo "$value";
        echo "<br>";
    }
    if ($value > 6 && $value <= 8) {
        echo "$value, ";
    } elseif ($value == 9) {
        echo "$value";
    }
}
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 11/16/2016
 * Time: 11:09 PM
 */