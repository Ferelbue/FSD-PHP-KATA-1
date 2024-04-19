<?php

$palabra = "casa";

$arrayPalabra = str_split($palabra);
$large2 = count($arrayPalabra);
print_r($arrayPalabra);
echo "</br>";
for ($i = 0; $i <= $large2-1; $i++) {
    $large = (count($arrayPalabra))-1;
    $alt = rand(0, $large);
    $arrayPalabraChanged[] = $arrayPalabra[$alt];
    unset($arrayPalabra[$alt]);
    $arrayPalabra = array_values($arrayPalabra);
};
    print_r($arrayPalabraChanged);
