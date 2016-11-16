<?php
/*<p>16. Создайте две переменные $a и $b, значения которых будут числами. Выведите максимальное число из этих двух.</p>
*/
$a = rand(0,20);
$b = rand(0,20);
echo "Value a is " . $a . "<br>";
echo "Value b is " . $b . "<br>";

if ($a > $b) {
    echo $a . "<br>";
} elseif ($b > $a) {
    echo $b . "<br>";
} else {
    echo "Values are equal";
}
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 11/15/2016
 * Time: 11:00 PM
 */