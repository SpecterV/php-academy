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

$sum = 0;
for ($i=0; $i<= strlen($_POST['numbers']); $i++) {
    $a = substr($_POST['numbers'], $i ,1);
    $sum += $a;
}
echo "Summary = " . $sum;
