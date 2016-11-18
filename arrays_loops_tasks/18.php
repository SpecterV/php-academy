<?php
/*<p>18. Составьте массив дней недели. С помощью цикла foreach выведите все дни недели,
выходные дни следует вывести жирным.</p>*/
$arr = ['Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday'];
$week = date('l');
foreach ($arr as $value) {
    if ($value == 'Saturday' || $value == 'Sunday') {
        echo "<b>$value</b>" . "<br>";
    } else {
        echo  $value . "<br>";
    }
}
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 11/16/2016
 * Time: 11:49 PM
 */