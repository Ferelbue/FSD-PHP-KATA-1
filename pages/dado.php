<?php

function lanzarDado($min, $max = 6, $tiradas = 1)
{
    $array = [];
    $suma = 0;
    for ($i = 0; $i < $tiradas; $i++) {
        $tirada = rand($min, $max);
        print_r("Tirada $i ->". $tirada);
        echo "</br>";
        $suma += $tirada;        
        $array[] = $tirada;
    }
    echo "</br>";
    print_r("Resultado:  $suma");
    echo "</br>";
    // print_r($array);
    return $array;
}

lanzarDado(1, 6, 8);
