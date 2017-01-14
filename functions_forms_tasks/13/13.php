<?php
    require('function.php');
    
    if(empty($_POST['string'])) {
        echo "Please write or paste multiple strings" . "<br>";
        newForm();
    }
    
    // works with english sentences.
    countFruits();
?>