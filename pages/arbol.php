<?php
$filas = 5;
$columnas = 5;

    for($i = 0 ;$i < $columnas ; $i++){
        for($j = 0 ;$j < $filas ; $j++){
            if($i < $j){
                print_r(" ");
            }else{
                print_r("*");
            }  
        }
        echo "</br>";
    }
?>