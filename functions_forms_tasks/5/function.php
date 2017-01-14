<?php
/**
 * Function to write directory path which should be print in browser
 */
function writeDir() {
    $html = '
    <form action="5.php" method="POST">
    <input type="text" name="path" placeholder="Path to directory">
    <input type="text" name="name" placeholder="Some words about file">
    <input type="submit" name="send">
    </form>
    ';
    die($html);
}

/**
 * function for print all files and directories at specified path
 */
function filesNames() {
    $path = $_POST['path'];
    $name = $_POST['name'];
    $a= glob("$path/*$name*");
    if ($a == false) {
        die("No such files with specified name were found in Windows directories");
    }
    foreach($a as $key => $value) {
        echo "$value"."<br>";
    }
}

/**
 * @param $directory
 * @param $name
 */
function filesNamesTest($directory,$name) {
        $a= glob("$directory/*$name*");
        foreach($a as $key => $value) {
            echo "$value"."<br>";
        }
}
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 12/11/2016
 * Time: 11:37 AM
 */
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 12/11/2016
 * Time: 12:09 PM
 */