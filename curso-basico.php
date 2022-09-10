<?php
// clase 2
// arreglos
$edad = [20,18,40];
$edades = array(20,18,40);
echo "una de ñas edades que esta adentro es" . $edades[2]
echo "\n"
//clase 3
// arreglo asociativos
$cafes = array( //{$cafes['americano']}
    "capuchino" => 50,
    "latte" => 49,
    "americano" => 70,
);
echo "El precio del cafe Americano es de {$cafes['Americano']}";
$personas = array( // multiples arreglos dentro
    "Carlos" => array(
        "edad" => 20,
        "apellido" => "Santana"
    ),
    "Mr.Michi" => array(
        "edad" => 18,
        "apellido" => "Michisancio"
    ),
);
echo "La informacion de Mr. Michi es: Edad: " . $personas["Mr.Michi"]["edad"] . " Apellido: " . $personas["Mr.Michi"]["apellido"];
echo "\n";

?>