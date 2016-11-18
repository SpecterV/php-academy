<?php
/*<p>25. Ваше задание создать массив, наполнить это случайными значениями (функция rand),
найти максимальное и минимальное значение и поменять их местами.</p>*/
for($i=0;$i<=10;$i++) {
    $arr[] = rand(0,20);
}
$max1 = max($arr);
$min1 = min($arr);

//asort($arr);

echo "<pre>";
print_r($arr);
echo "</pre>";

$max_key;
$min_key = key($arr);
$max = 0;
// How to find max/mix value in array
foreach ($arr as $key => $value) {
    if ($value == $max1) {
        //$max = $value;
        $max_key = $key;
    } elseif ($value == $min1) {
        //$min = $value;
        $min_key = $key;
    }
}
$temp = $arr[$min_key];
$arr[$min_key] = $arr[$max_key];
$arr[$max_key] = $temp;

echo "<br>";
echo "Max value = " . $max1 . "<br>";
echo "Min value = " . $min1 . "<br>";
echo "Max array key = " . $max_key . "<br>";
echo "Min array key = " . $min_key . "<br>";

echo "<pre>";
print_r($arr);
echo "</pre>";
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 11/17/2016
 * Time: 9:37 PM
 */