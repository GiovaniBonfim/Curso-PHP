<?php


    $a = true;

    if(is_bool($a)){
        echo "é um boolean 1 <br>";
    }
    
    if(is_bool(0)) {
        echo "é um boolean 2 <br>";
    }

    if(is_bool(false)){
        echo "é um boolean 3 <br>";
    }

    if(0 == false){
        echo "0 é considerado falso!<br>";
    }

?>