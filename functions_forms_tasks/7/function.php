<?php
// form for insert text
function guestForm() {
    $html = '
    <form action="7.php" method="POST">
    <input type = "text" name = "comment" placeholder="leave you comment">
    <input type = "submit" name = "send">
    </form>
    ';
    return $html;
}
// function for print in browser comments like guest book
function guestBook($guestBook) {
        //$guestBook[] = $_POST['comment'];
        foreach ($guestBook as $key => $value) {
            echo $value . "<br>";
        }
        print_r($guestBook);
        return $guestBook;
}
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 12/14/2016
 * Time: 9:30 PM
 */