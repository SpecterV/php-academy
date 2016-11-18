<?php
/*<p>3. Дан массив с элементами 26, 17, 136, 12, 79, 15.
С помощью цикла foreach найдите сумму квадратов элементов этого массива. Результат запишите переменную $result.</p>
 * */
$array = array(26,17,136,12,79,15); // 26071
$result = 0;
foreach ($array as $value) {
    $sqr =0;
    $sqr = $value * $value;
    $result += $sqr;
    //echo $sqr . "<br>";
}
echo $result;
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 11/16/2016
 * Time: 7:26 PM
 */