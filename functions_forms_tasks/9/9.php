<?php
require('function.php');

// works for windows directory 'c:\xampp' - as example
/*
if(empty($_POST['string'])) {
    echo "Please write some string" . "<br>";
    writeString();
}
*/
if (empty($_POST['string'])) {
    echo "Please write some string" . "<br>";
    writeString();
}
$a = str_split($_POST['string']);
echo "<b>Initial string is:</b>" . " " . $_POST['string'] . "<br>";
echo "<b>Current string conversion is:</b>" . " ";
reverseString($a);

/**
 * Created by PhpStorm.
 * User: alex
 * Date: 12/11/2016
 * Time: 8:00 PM
 */