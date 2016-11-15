<?php
echo "<b>Task 1</b>"."<br>";
// Arrays
$a = ['USA','Canada','France','Australia', 'Ukraine'];

echo "<pre>";
print_r($a);
echo "</pre>";
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 11/15/2016
 * Time: 5:47 PM
 */

echo '<b>Task 2</b>'.'<br>';
// https://devionity.com/ru/courses/php-fundamentals/php-associative-arrays
$countries = array('USA' => "Washington DC", "France" => "Paris", "Australia" => "Camberra", "Ukraine" => "Kyiv");

echo "<pre>";
print_r($countries);
echo "</pre>";

echo "<b>Task 3</b>".'<br>';
//https://devionity.com/ru/courses/php-fundamentals/php-multidimentional-arrays
$StarWars = ['Galaxy wars','Some author','Star Wars','$150'];
$GamesOfThrones = ['Kingdoms wars','Some author 1','Game of Thrones','$200'];
$GarryPotter = ['Magic','Some author 2','Garry Potter','$100'];
$books = [$StarWars, $GamesOfThrones, $GarryPotter];

echo '<pre>';
print_r($books);
echo '</pre>';

echo '<b>Task 4</b>'.'<br>';
define('COUNTRY1', 'USA');
define('COUNTRY2','Canada');
define('COUNTRY3','France');
define('COUNTRY4','Ukraine');
$const_countries = [COUNTRY1, COUNTRY2, COUNTRY3, COUNTRY4];
echo '<pre>';
print_r($const_countries);
echo '</pre>';

echo '<b>Task 5</b>'.'<br>';
// https://devionity.com/ru/courses/php-fundamentals/php-variable-variables
$hello = 'myday';
$myday = 'mynight';
$mynight = 'mybus';
$mybus = 'mycar';
$mycar = 'myfriend'. ' ' .'is very cool';

echo $$$$$hello;