<?php
/*<p>4. Дан массив $arr. С помощью первого цикла foreach выведите на экран столбец ключей, с
помощью второго — столбец элементов.</p>
$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');*/

$arr = ['green'=>'зеленый', 'red'=>'красный','blue'=>'голубой'];
foreach ($arr as $keys => $value) {
    echo $keys . "<br>";
}
echo "<br>";
foreach ($arr as $value) {
    echo $value . "<br>";
}
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 11/16/2016
 * Time: 8:19 PM
 */