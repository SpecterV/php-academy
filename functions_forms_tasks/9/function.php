<?php

function writeString() {
    $html = '
    <form action="9.php" method="POST">
    <input type="text" name="string" placeholder="Path to directory">
    <input type="submit" name="send">
    </form>
    ';
    die($html);
}

function reverseString($a) {
    if (empty($a)) {
        exit;
    }
    echo array_pop($a);
    return reverseString($a);
}
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 12/11/2016
 * Time: 7:59 PM
 */