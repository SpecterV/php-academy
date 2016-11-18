<?php
/*<p>6. Дан массив $arr. С помощью цикла foreach запишите английские названия в массив $en, а
русские — в массив $ru.
$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
$en = array('green', 'red','blue');
$ru = array('зеленый', 'красный', 'голубой');</p>*/
$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
foreach ($arr as $key => $value) {
    $en[] = $key;
    $ru[] = $value;
}
echo "<pre>";
print_r($en);
echo "</pre>";
echo "<pre>";
print_r($ru);
echo "</pre>";
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 11/16/2016
 * Time: 8:33 PM
 */