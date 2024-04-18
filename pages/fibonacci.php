<?php
$num = 20;
$resultado = [ 0 , 1 ];

for ($i = 2; $i < $num; $i++) {
    $resultado[] += $resultado[$i-2] + $resultado[$i-1];
};
print_r($resultado);