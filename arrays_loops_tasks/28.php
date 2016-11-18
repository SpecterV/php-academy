<?php
/*<p>28. Вывести таблицу умножения с помощью двух циклов for.</p>
*/
const LEN = 10;
$html = '<table border="1"><thead><th> - </th>';
for ($i=1; $i<=LEN; $i++) {
    $html .= '<th>' . $i . '</th>';
}
$html .= '</thead><tbody>';
for ($i=1;$i<=LEN;$i++) {
    $html .= '<tr><td>' . $i .'</td>';
    for ($j=1;$j<=LEN;$j++) {
        $html .= '<td>' . $i * $j . '</td>';
    }
    $html .= '</tr>';
}
$html .= '</tbody></table>';
echo $html;
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 11/18/2016
 * Time: 7:36 PM
 */