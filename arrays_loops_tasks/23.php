<?php
/*<p>23. Вам нужно разработать программу, которая считала бы сумму цифр числа введенного
пользователем. Например: есть число 123, то программа должна вычислить сумму цифр 1,
2, 3, т. е. 6.</p>
По желанию можете сделать проверку на корректность введения данных пользователем.*/
if(empty($_POST['numbers'])) {
    $html = '
<form action="23.php" method="POST">
<input type="number" name="numbers">
<input type="submit" value="Send">
</form>';
    die($html);
}
$arr[] = $_POST['numbers'];
echo "<pre>";
print_r($arr);
echo "</pre>";
$sum = 0;
foreach ($arr as $value) {
    $sum += $value;
}
echo "Summary = " . $sum;
