<?php
/*15. Написать калькулятор. Переменная $a = изменяемое число. Переменная $b = изменяемое число.
Переменная $operator = ‘+’ или ‘-’ или ‘/’ или ‘*’ или '%' (остаток от деления).
На экран выводить результат в зависимости от значений этих переменных.
Не забудьте про деление на 0, если надо - выдавать ошибку что на 0 делить нельзя.
</p>*/
$a = rand(0,10);
echo "Value a =". "$a<br>";
$b = rand(0,10);
echo "Value b =" . "$b<br>";

$operator_temp = ['+','-','*','/','%'];
shuffle($operator_temp);
$operator = $operator_temp[0];
echo 'Math function = ' . $operator . '<br>';
if ($operator == "+") {
    echo ($a + $b);
} elseif ($operator == "*") {
    echo ($a * $b);
} elseif ($operator == "-") {
    echo($a - $b);
} elseif ($operator == "/" && $b == 0) {
    echo "<font color='red'><b>You can't divide by zero</b></font>";
} elseif ($operator == "/") {
    echo $a / $b;
} elseif ($operator == '%' && $b == 0) {
    echo "<font color='red'><b>You can't divide by zero</b></font>";
} else {
    echo $a % $b;
}

/*
$random = array_rand($operator,1);
shuffle($operator);
echo "<pre>";
print_r($operator);
echo "</pre>";
$sum = $a.($operator[0]).$b;
$sum1 = (int)$sum;
echo $sum . "<br>";
echo $sum1 . "<br>";
*/
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 11/15/2016
 * Time: 7:49 PM
 */