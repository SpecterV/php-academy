<?php
/*<p>2. Дан массив с элементами 1, 20, 15, 17, 24, 35.
С помощью цикла foreach найдите сумму элементов этого массива. Запишите ее в переменную $result.</p>
*/
$array = [1,20,15,17,24,35]; //112
$result = 0;
foreach ($array as $value) {
    $result += $value;
}
echo "Summary of array values is " . $result . "<br>";
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 11/16/2016
 * Time: 1:41 PM
 */