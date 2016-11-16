<?php
/*<p>19. Выведите результат сравнения $a и $b из п.17 с помощью var_dump.</p>
*/
$a = '78';
$b = 78;

echo "Value a is " . $a . "<br>";
echo "Value b is " . $b . "<br>";

if ($a == $b) {
    echo "Values are equal";
    echo "<br>";
    var_dump($a == $b);
} else {
    echo "Values are different";
    echo "<br>";
    var_dump($a != $b);
}
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 11/15/2016
 * Time: 11:15 PM
 */