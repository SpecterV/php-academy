<?php
/*<p>13. Заданы две переменные: s - длина участка, который проехал автомобиль;
t - время движения в часах. Вывести скорость автомобиля на заданном участке в км/час и в м/сек.</p>
*/
$s = 20; //km
$t = 0.5; // hour
$speedKmH = $s / $t;
$speedMS = ($s / $t) / 3.6;

echo "Car speed = $speedKmH km/h";
echo '<pre>';
echo "Car speed = $speedMS m/s";
echo '</pre>';
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 11/15/2016
 * Time: 7:38 PM
 */