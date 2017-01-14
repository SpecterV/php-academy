<?php
require('function.php');
// Delete words from file, if word length is more then N
if (empty($_POST['text'])) {
    echo someForm();
} else {
    file_put_contents('guestBook.txt', $_POST['text']);
    $contents = file_get_contents('guestBook.txt');
    $str = explode(" ", $contents);
    $N = $_POST['count'];
    foreach($str as $key => $value) {
        if (strlen($value) > $N) {
            unset($str[$key]);
        } else {
            echo $value . " ";
        }
    }
    echo "<br>" ."Original text is: " ."$contents";
    echo someForm();
}