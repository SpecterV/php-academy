<?php
/**
 * Function to write sentence in file via browser
 */
function someForm() {
    $html = '
    <form action="3.php" method="POST">
    <input type="text" name="text" placeholder="Write sentence">
    <input type="number" name="count" placeholder="Write parameter N">
    <input type="submit" name="send">
    </form>
    ';
    die($html);
}
