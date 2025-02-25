<?php
    //sem variavel
    if(is_float(1.12))
    {
        echo "Sim, é decimal!<br>";
    }
    else
    {
        echo "Não, não é decimal<br>";
    }

    //com variavel

    $num = 2339;
    $numav = $num / 2339;

    if(is_float($numav))
    {
        echo "Sim, é decimal!<br>";
    }
    else{
        echo "Não, não é decimal!<br>";
    }
    


?>
