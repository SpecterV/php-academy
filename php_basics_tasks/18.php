<?php
/*<p>18. Создайте две переменные $a = '78' (строковый тип) и $b = 78 (целочисленный тип).
Проверьте эти две переменные на эквивалентность, с помощью if выведите "эквивалентны" или "не эквивалентны".</p>
*/
$a = '78';
$b = 78;

echo "Value a is " . $a . "<br>";
echo "Value b is " . $b . "<br>";

if ($a === $b) {
    echo "Values are equal";
} else {
    echo "Values are different";
}
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 11/15/2016
 * Time: 11:14 PM
 */