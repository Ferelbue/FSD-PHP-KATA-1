<?php

$palabra = "soldadlos";

$arrayPalabra = [];

$arrayPalabra = str_split($palabra);
$arrayPalabraChanged = [];
$large = count($arrayPalabra);

for ($i = $large - 1; $i >= 0; $i--) {
    $arrayPalabraChanged[] = $arrayPalabra[$i];
};

if($arrayPalabra === $arrayPalabraChanged){
    print_r("La palabra $palabra SÍ es un palindromo");
}else{
    print_r("La palabra $palabra NO es un palindromo");
}
