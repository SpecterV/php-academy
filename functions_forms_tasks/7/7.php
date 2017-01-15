<?php
require('function.php');

if (empty($_POST['comment'])) {
    echo guestForm();
} else {
    file_put_contents('guestBook.txt', "\n" . strip_tags($_POST['comment']) . file_get_contents('guestBook.txt'));
    $contents = file_get_contents('guestBook.txt');
    echo "<pre>";
    echo $contents;
    echo "</pre>";
    echo guestForm();
}