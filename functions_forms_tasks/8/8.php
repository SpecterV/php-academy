<?php
require('function.php');

if (isset($_POST['comment'])) {
    $comments = explode(" ", $_POST['comment']);
    guestBook($comments);
    $contents = file_get_contents('guestBook.txt');
    if (guestBook($comments) == 1 ) {
        file_put_contents('guestBook.txt', "\n" . $_POST['comment'] . file_get_contents('guestBook.txt'));
        $contents = file_get_contents('guestBook.txt');
        echo "<pre>";
        echo $contents;
        echo "</pre>";
    }
    if (guestBook($comments) == 0) {
        echo "<pre>";
        echo $contents;
        echo "</pre>";
        echo "Некорректный комментарий";
    }
    echo guestForm();
} else {
    echo guestForm();
}