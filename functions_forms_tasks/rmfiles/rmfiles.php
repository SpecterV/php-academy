<?php
require('function.php');

if(empty($_POST['path'])){
    writeDir();
}

//$directoryToDelete = $_POST['path'];

removeDir($_POST['path']);
//removeFiles($_POST['path']);
//rmdir($_POST['path']);
die('Delete empty directory');
//$a = 'c:\xampp\htdocs\php-academy-home'; // tested as parameter for function 'pathDir($a)'
/*if(empty($a)){
    writeDir();
}
pathDirTestParameter($a);*/

