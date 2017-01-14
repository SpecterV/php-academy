<?php

function image() {
    $html = '
    <form action="6.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" action="submit">
    </form>
    ';
    return $html;
}