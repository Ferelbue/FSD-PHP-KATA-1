<?php
$platos = [
    [
        "titulo" => 'pizza',
        "comensales" => 2,
        "tipoPlato" => 'principal',
        "precio" => '20€'
    ],
    [
        "titulo" => 'sopa',
        "comensales" => 5,
        "tipoPlato" => 'segundo',
        "precio" => '50€'
    ],
    [
        "titulo" => 'fresas',
        "comensales" => 2,
        "tipoPlato" => 'postre',
        "precio" => '2€'
    ]
];
?>
<?php
echo "<ol>";
foreach ($platos as $key => $plato) {
    echo "<h2>" . $plato['titulo'] . "</h2>";
        echo "<ol>";
            echo "<p>Comensales: " . $plato['comensales'] . "</p>";
            echo "<p>Tipo de plato: " . $plato['tipoPlato'] . "</p>";
            echo "<p>Precio: " . $plato['precio'] . "</p>";
        echo "</ol>";

}
echo "</ol>";
?>
