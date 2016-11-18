<?php
/*<p>22. Нарисуйте пирамиду, как показано на рисунке, воспользовавшись циклом for или while.<br><br>
xx<br>
xxxx<br>
xxxxxx<br>
xxxxxxxx<br>
xxxxxxxxxx</p>*/
$a = 'xx';
for ($i=1;$i <= 9; $i++) {
    $a .= 'xx';
    echo $a . "<br>";

}// alternative way
// cycle while
echo "<br>";
$b=0;
$c = 'xx';
while ($b <= 9) {
    $b++;
    $c .= 'xx';
    echo $c . "<br>";
}
?>