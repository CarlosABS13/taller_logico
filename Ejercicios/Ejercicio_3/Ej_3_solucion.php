<?php
    $ganado = $_GET['ganado'];
    $empatado = $_GET['empatado'];
    $perdido = $_GET['perdido'];
    
    $cadena = ($ganado*3 + $empatado*1 + $perdido*0);
    
    echo " Puntos ". " : ".$ganado. " + ".$empatado." + ".$perdido. " = " .$cadena;
?>