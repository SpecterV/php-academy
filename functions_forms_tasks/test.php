<?php

function fact($N) {
    static $fact = 1;
    if ($N < 2 ) {
        return $fact;
    }
    $fact *= $N;
    $N--;
    return fact($N);
}
$N = 50;
echo fact($N);
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 12/2/2016
 * Time: 7:43 PM
 */