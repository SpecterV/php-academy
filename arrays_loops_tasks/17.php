<?php
/*<p>17.Сосктавьте массив месяцев. С помощью цикла foreach выведите все месяцы, а текущий
месяц выведите жирным. Текущий месяц должен храниться в переменной $month.</p>*/
$arr = ['January','February','March','April','May','June','July','August','September','October','November','December'];
$month = date('F');
foreach ($arr as $value) {
    if ($value == $month) {
        echo "<b>$value</b>" . "<br>";
    } else {
        echo  $value . "<br>";
    }
}

/**
 * Created by PhpStorm.
 * User: alex
 * Date: 11/16/2016
 * Time: 11:36 PM
 */