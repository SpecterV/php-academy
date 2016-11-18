<?php
/*<p>20.Нарисуйте пирамиду, как показано на рисунке, только у вашей пирамиды должно быть 20
рядов, а не 5.<br><br>
x<br>
xx<br>
xxx<br>
xxxx<br>
xxxxx</p>*/
$a = '';
for ($i=1;$i <= 20; $i++) {
    $a .= 'x';
    echo $a . "<br>";
}
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 11/17/2016
 * Time: 12:07 AM
 */