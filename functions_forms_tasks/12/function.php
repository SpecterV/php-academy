<?php
    function newForm() {
        $html = '
        <form action="12.php" method="POST">
        <input type="text" name="string" placeholder="Write multiple strings">
        <input type="submit" name="send">
        </form>
        ';
        die($html);
    }
    
    function newString() {
        $str = explode(". ", $_POST['string']);
    
    // first variant with for
     for ($i=0; $i <= count($str) -1; $i++) {
         $str[$i] = ucfirst($str[$i]); 
     }
     
    $str[count($str)-1] = str_replace(".", '', $str[count($str)-1]); 
    
    krsort($str);
        foreach ($str as $key => $value) {
            //$value = ucfirst($value); --second variant
            echo $value . ". ";
        }
    }
?>