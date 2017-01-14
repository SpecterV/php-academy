<?php
require('function.php');

if(empty($_POST['path'])){
    writeDir();
}
pathDir();


//$a = 'c:\xampp\htdocs\php-academy-home'; // tested as parameter for function 'pathDir($a)'
/*if(empty($a)){
    writeDir();
}
pathDirTestParameter($a);*/
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 12/11/2016
 * Time: 11:37 AM
 */