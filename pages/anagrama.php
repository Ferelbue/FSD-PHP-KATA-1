<?php

$palabra = "casa";

$arrayPalabra = str_split($palabra);
$large2 = count($arrayPalabra);
print_r($arrayPalabra);
print_r($large2-1);
echo "</br>";
for ($i = 0; $i <= $large2-1; $i++) {
    $large = (count($arrayPalabra))-1;
    print_r($large);
    echo "</br>";
    $alt = rand(0, $large);
    print_r($alt);
    $arrayPalabraChanged[] = $arrayPalabra[$alt];
    unset($arrayPalabra[$alt]);
    echo "</br>";
    print_r($arrayPalabra);
    print_r($alt);
    echo "</br>";
};

