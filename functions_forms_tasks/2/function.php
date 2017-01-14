<?php
//form for input some text
function textForm() {
    $html = '
    <form action="2.php" method="POST">
    <input type="text" name="string" placeholder="Write some string">
    <input type="submit" name="send">
    </form>
    ';
    die($html);
}
// functions for print TOP 3 long inputed words.
function TOP3() {
    $arr = explode(" ", $_POST['string']);
   /* echo "<pre>";
    print_r($arr);
    echo "</pre>";*/
    foreach ($arr as $key => $value) {
        $length[] = strlen($value);
    }
    arsort($length);
    foreach ($length as $lengk => $lengv) {
        $arr2[] = "$arr[$lengk]" . "<br>";
    }
     echo "$arr2[0]" . "<br>";
     echo "$arr2[1]" . "<br>";
     echo "$arr2[2]" . "<br>";
    /*echo "<pre>";
    print_r($arr2);
    echo "</pre>";*/
}
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 12/10/2016
 * Time: 1:02 PM
 */