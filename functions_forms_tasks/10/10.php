<?php
require('function.php');

if (empty($_POST['string'])) {
    echo "Please write some string" . "<br>";
    writeString();
}

//echo uniqueWords($a, $count);
echo uniqueWords();
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 12/13/2016
 * Time: 11:44 AM
 */