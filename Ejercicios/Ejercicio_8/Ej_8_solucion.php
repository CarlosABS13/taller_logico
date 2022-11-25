<?php
    $edad = $_GET["edad"];
    $genero = $_GET["genero"];

    if(($genero == "hombre") && ($edad>=63)){
        echo " Ya pude jubilarse";
    }elseif(($genero == "mujer") && ($edad>=54)){
        echo " Ya puede jubilarse ";
    }else{
        echo " No se puede jubilar ";
    }

?>