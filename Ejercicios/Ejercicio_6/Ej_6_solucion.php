<?php
    $tarjetas = $_GET['ta'];
    $posters = $_GET['po'];
    $volantes = $_GET['vo'];
    
    $cadena = ($tarjetas*500 + $posters*5000 + $volantes*2000);
    
    echo " Pago total ". " : ".$tarjetas. " + ".$posters." + ".$volantes. " = " .$cadena;
?>