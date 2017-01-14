<?php
header('Content-type: image/jpeg');
$file = 'image_storage/4444.jpg';
echo readfile($file);