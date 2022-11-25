<?php
            $nombre_del_aprendiz = $_GET['na'];
            $asignatura = $_GET['as'];
            $calificacion_final = $_GET['ca'];
    
        if($calificacion_final >= 7){
            if($calificacion_final > 10){
                echo "debe digitar un numero entre 1 y 10 " ; 
            } else{
                echo "APROBADO";
            }
            
        } 
        if($calificacion_final < 7){
            if($calificacion_final > 0 ){
                echo  " REPROBADO " ; 
            } else {
                echo  " debe digitar un numero entre 1 y 10 " ; 
            }
        }
?>  