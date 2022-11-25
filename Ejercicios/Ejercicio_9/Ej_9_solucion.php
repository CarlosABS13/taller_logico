<?php
    $nombre = $_GET["na"];
    $asignatura = $_GET["as"];
    $nota1 = $_GET["nota1"];
    $nota2 = $_GET["nota2"];
    $nota3 = $_GET["nota3"];

    $porcentaje1 = $nota1 * 0.3;
    $porcentaje2 = $nota2 * 0.3;
    $porcentaje3 = $nota3 * 0.4;

    $notafinal = $porcentaje1 + $porcentaje2 + $porcentaje3;

    if($notafinal >= 4){
        if(($nota1 > 5) || ($nota2 >5) || ($nota3 > 5)){
            echo " digite un número entre 0 y 5";
        }else{
            echo " el aprendiz ".$nombre." aprobo con una nota de ".$notafinal;
        }
    }elseif ($notafinal < 4){
        if (($nota1 < 0) || ($nota2 < 0) || ($nota3 < 0)){
            echo " digite un número entre 0 y 5";
        }else{
            echo " el aprendiz ".$nombre." reprobo con una nota de ".$notafinal;
        }
    }
?>