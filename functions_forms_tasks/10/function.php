<?php

function writeString() {
    $html = '
    <form action="10.php" method="POST">
    <input type="text" name="string" placeholder="Path to directory">
    <input type="submit" name="send">
    </form>
    ';
    die($html);
}

function uniqueWords() {
    $a = explode(" ", $_POST['string']);
    $b = $a;
    echo "<pre>";
    print_r($a);
    echo "</pre>";
        foreach ($a as $key => $value) {
            for ($i=0; $i < count($a); $i++) {
                if ($a[$i] !== $value) {
                    $count++;
                    
                }
                if ($a[$i] == $value) {
                    $count1++;
                   
                }
            }
        }
    //array_shift($a);
    $result = count($b) - $count1;
    echo "Result is: " . $result;
    echo "<br>" . $count;
    echo "<br>" . $count1;
    echo "<br>" . count($a);
    //return uniqueWords($a, $count);
}