<?php
    $velocidad = $_GET['vel'];
    $tiempo = $_GET['tiem'];
    $multi = $velocidad * $tiempo;
    
    echo " La distancia recorrida es de ". " : ".$velocidad. " * ".$tiempo." = ".$multi. " M/h ";
?>