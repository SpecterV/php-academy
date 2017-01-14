<?php
/**
 * Function to write directory path which should be print in browser
 */
function writeDir() {
    $html = '
    <form action="4.php" method="POST">
    <input type="text" name="path" placeholder="Path to directory">
    <input type="submit" name="send">
    </form>
    ';
    die($html);
}

/**
 * function for print all files and directories at specified path
 */
function pathDir() {
    $dir = scandir($_POST['path']);
    foreach($dir as $index => $path) {
        if ($path === '.' || $path === '..') {
            unset($dir[$index]);
        } else {
            echo "$path" . "<br>";
        }
    }
    //print_r($dir);
}

/**
 * @param $a
 */
function pathDirTestParameter($a) {
    $dir = scandir($a);
    foreach($dir as $index => $path) {
        if ($path === '.' || $path === '..') {
            unset($dir[$index]);
        } else {
            echo "$path" . "<br>";
        }
    }
}
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 12/11/2016
 * Time: 11:37 AM
 */