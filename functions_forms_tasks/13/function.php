<?php
    function newForm() {
        $html = '
        <form action="13.php" method="POST">
        <input type="text" name="string" placeholder="Write multiple strings">
        <input type="submit" name="send">
        </form>
        ';
        die($html);
    }
    // works with english words
    function countFruits() {
        $str = explode(" ", $_POST['string']);
        //$str = convert_cyr_string($str, 'w', 'i');
        $count = ['Apple' => 0, 'Cherry' => 0, 'Pear' => 0, 'Cherries' => 0];
        for ($i=0; $i <= count($str)-1;$i++) {
            if ($str[$i] === 'яблоко') {
                    $count[Apple]++;
                }
            if ($str[$i] == "cherries") {
                $count[Cherries]++;
            }
            if ($str[$i] == 'pear') {
                $count[Pear]++;
            }
            if ($str[$i] == "cherry") {
                $count[Cherry]++;
            }
        }
     arsort($count);
     foreach($count as $key => $values) {
         echo $key . " - " . $values . "<br>";
     }
     var_dump($str);
     //print_r($count);
    // http://htmlweb.ru/php/function/function/convert_cyr_string.php
    // http://php.net/manual/ru/function.convert-cyr-string.php
     //$string = convert_cyr_string("привет", 'w', 'k');
     //if ($string == convert_cyr_string("привет", 'w', 'k')) {
     //    $coun1++;
     //    echo convert_cyr_string("привет", 'k', 'w');
     //    echo $coun1;
     //}
    }
?>