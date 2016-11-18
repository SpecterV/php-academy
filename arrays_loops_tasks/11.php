<?php
/*<p>11. Выведите столбец четных чисел в промежутке от нуля до 100.</p>*/
for($i=0;$i < 100; $i++){
    if ($i % 2 == 0) {
        echo $i . "<br>";
    }
}

// another way
echo "<br>";
for ($a=0;$a<100;$a=$a+2) {
    echo $a . "<br>";
}
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 11/16/2016
 * Time: 10:08 PM
 */