<?php

    class pessoa {

        function falar(){
            echo "Olá Pessoal!";
        }
    }

    $matheus = new pessoa();

    $matheus -> nome = "Matheus";

    echo $matheus->nome;

    echo "<br>";

    $matheus ->falar();

?>
