<?php
    $capital = $_GET["ca"];
    $interes1 = $capital * 0.02;
    $interes2 = $capital * 0.045; 
    $interes3 = $capital * 0.07;

    $resultado1 = $capital + $interes1;
    $resultado2 = $capital + $interes2;
    $resultado3 = $capital + $interes3;

    if($capital < 500){
        if($capital > 0){
            echo " Capital ingresado es: ".$capital." <br>zbr>intereses: ".$interes1." <br><br>total = ".$resultado1;
        }else{
            echo " Debe ingresar un numero valido ";
        }
    }

    if($capital >= 500){
        if($capital < 1500){
            echo " Capital ingresado es: ".$capital." <br><br>intereses: ".$interes2." <br><br>total = ".$resultado2;
        }
    }
    
    if($capital >= 1500){
          echo " Capital ingresado es: ".$capital." <br>zbr>intereses: ".$interes3." <br><br>total = ".$resultado3;
        }
?>