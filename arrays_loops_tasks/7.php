<?php
/*<p>7. Дан массив с элементами 2, 5, 9, 15, 0, 4. С помощью цикла foreach и оператора if
выведите на экран столбец тех элементов массива, которые больше 3­х, но меньше 10.</p>*/
$arr = [2,5,9,15,0,4];
foreach ($arr as $value) {
    if ($value > 3 && $value < 10) {
        echo $value . "<br>";
    }
}
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 11/16/2016
 * Time: 8:53 PM
 */