<?php
/*<p>24. Вам нужно разработать программу, которая считала бы количество вхождений
какой­нибуть выбранной вами цифры в выбранном вами числе. Например: цифра 5 в числе
442158755745 встречается 4 раза.</p>*/
$string = '154845486456487'; //1
$count = 0;
for ($i=0;$i <= strlen($string); $i++) {
    $a = substr($string, $i, 1);
        if ($a == 1) {
            $count++;
        }
}
echo $count;
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 11/17/2016
 * Time: 9:37 PM
 */