<?php
require('function.php');

// works for windows directory 'c:\xampp' - as example
if(empty($_POST['path'])) {
    echo "Please write directory name and file name for search" . "<br>";
    writeDir();
}
filesNames();


// for test function filesNamesTest($directory, $name) with parameters - works
/*$directory = 'c:\xampp\htdocs';
$name = "index";
if(empty($directory) || empty($name)) {
    echo "Directory field or file name have not been written";
} else {
    filesNamesTest($directory, $name);
}*/
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 12/11/2016
 */