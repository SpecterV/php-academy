<?php
/*<p>26. Вам нужно создать массив и заполнить его случайными числами от 1 до 100 (ф­я rand).
Далее, вычислить произведение тех элементов, которые больше ноля и у которых парные
индексы. После вывести на экран элементы, которые больше ноля и у которых не парный
индекс.</p>*/
for ($i=0;$i<=100;$i++) {
    $arr[] = rand(-50,50);
}
echo "<pre>";
print_r($arr);
echo "</pre>";
echo "<br>";
$multi = 1;
$multi_minus = '';
foreach($arr as $key => $value) {
    if ($value > 0 && ($key % 2 === 0)) {
        /* checking if condition is true
        echo "<pre>";
        echo $key . "=>" . $value . "<br>";
        echo "<pre>";
        */
        $multi *= $value;
    } elseif ($value > 0 && ($key % 2 != 0)) {
        echo "[{$key}]" . "=>" . $value . "<br>";
    }
}
/* check multiplication
echo $multi; */

/**
 * Created by PhpStorm.
 * User: alex
 * Date: 11/18/2016
 * Time: 6:42 PM
 */