<?php
/*<p>27. Создать генератор случайных таблиц. Есть переменные:
$row - кол-во строк в таблице, $cols - кол-во столбцов в таблице.
Есть список цветов, в массиве:
$colors = array('red','yellow','blue','gray','maroon','brown','green').
Необходимо создать скрипт, который по заданным условиям выведет таблицу размера $rows на $cols,
в которой все ячейки будут иметь цвета, выбранные случайным образом из массива $colors.
В каждой ячейке должно находиться случайное число. <br><br>
Пример результата: in "27.html" file<br>
*/
$colors = array('red','yellow','blue','gray','maroon','brown','green');
$rand_color = array_rand($colors);
$row = 10;
$cols = 10;

$html = '<table border="1"><tbody>';

for ($i = 1; $i <= $row; $i++) {
    shuffle($colors);
    $html .= "<tr><td style='background-color:{$colors[$rand_color]}'>" . rand() . "</td>";
    for ($j = 1; $j <= $cols-1; $j++) {
        shuffle($colors);
        $html .= "<td style='background-color:{$colors[$rand_color]}'>" . rand() . '</td>';
    }
    $html .= '</tr>';
}
$html .= "</tbody></table>";
echo $html;
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 11/18/2016
 * Time: 7:05 PM
 */