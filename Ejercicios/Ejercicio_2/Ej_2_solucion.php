<?php
    $nota1 = $_GET['nota1'];
    $nota2 = $_GET['nota2'];
    $nota3 = $_GET['nota3'];
    
    $cadena = ($nota1+$nota2+$nota3)/3;
    
    echo " Promedio ". " : ".$nota1. " + ".$nota2." + ".$nota3. " = " .$cadena;
?>