<?php
    $precio = $_GET["precio"];
    $descuento = ($precio * 15) / 100;
    $total = $precio + $descuento;

    if($precio>=15000){
        echo " Ganaste el beneficio de un descuento ".$descuento." con un total de : " .$total;
    }else{
        echo " valor a pagar sin descuento: ".$precio. " no obtuviste descuento ";
    }

?>