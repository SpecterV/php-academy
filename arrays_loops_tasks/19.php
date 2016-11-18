<?php
/*<p>19. Составьте массив дней недели. С помощью цикла foreach выведите все дни недели, а
текущий день выведите курсивом. Текущий день должен храниться в переменной $day.</p>*/
$arr = ['Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday'];
$day = date('l');
foreach ($arr as $value) {
    if ($value == $day) {
        echo "<i>$value</i>" . "<br>";
    } else {
        echo  $value . "<br>";
    }
}
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 11/17/2016
 * Time: 12:04 AM
 */