<?php
/*<p>10. Выведите столбец чисел от 11 до 33.</p>*/
for ($i=11; $i <= 33; $i++) {
    echo $i . "<br>";
}

//another way
echo '<br>';
for ($a=11; $a >= 11; $a++) {
    if ($a > 33) {
        break;
    }
    echo $a . "<br>";
}
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 11/16/2016
 * Time: 10:00 PM
 */