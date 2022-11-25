<?php
            $h1 = $_GET['h1'];
            $h2 = $_GET['h2'];
            $diferencia = $h1-$h2;
            $diferencia2 = $h2-$h1;
    
        if($h1>$h2){
            echo  " El hermano mayor tiene " .$h1. " años ". " y es mayor por ". $diferencia. " años " ; 
        } else{
            echo  " El hermano mayor tiene " .$h2. " años ". " y es mayor por ". $diferencia2. " años " ; 
        }
?>  