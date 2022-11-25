<?php
    $precio = $_GET["pre"];
    $descuento = ($precio * 20) / 100;
    $total = $precio - $descuento;

    if($precio >= 20000){
        echo " Te ha tocado un descuento del 20%, el descuento ha sido de ".$descuento. " <br><br> descuento final de ".$total;
    }else{
        echo " No tienes beneficio de descuento ";
    }

?> 