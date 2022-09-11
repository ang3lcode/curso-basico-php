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
// clase 4
// manipulacion arrelos php
//count //numero de datos
echo count($numeros);
//push
$numeros = [1,2,3,4]; 
// array_push($numeros, 5);  => [1,2,3,4,5];

// is_array
$esto_no_es_un_arreglo = "";
// var_dump( is_array( $numeros) );

// explode
$lista_de_frutas = "fresa,cereza,manzana";
// $lista_de_frutas_array = explode(",", $lista_de_frutas);

// implode
$lista_de_frutas_array = ["fresa", "cereza", "manzana"];
//$lista_de_frutas = implode(",", $lista_de_frutas_array);

//array unique
$entrada = array("4", "4", "3", "4", "3", "3");
$resultado = array_unique($entrada);
var_dump($resultado);
//
array(2) {
  [0]=>
  string(1) "4"
  [2]=>
  string(1) "3"
}
// arreglos if/else
// clase 6
if ($asientos_disponibles > 0) // condicion
    echo "Puedes ver la pelicula de Spidey";
else if ($conoce_a_tony_stark) // true || false
    echo "Bueno, te creo, adelante";
else
    echo "Lo sentimos, te tocara spoilearte";
echo "\n";
// switch
// clase 7
$michi = 1;
switch( $michi ){ // paso parametro
    case 1:  // el caso 1 pasa al caso 4 son iguales
    case 4:
        echo "Su numero favorito es el 9";
        break; // necesario para cerrar 
    case 2:
        echo "Su numero favorito es el 4";
        break;
    default: // siempre poner un caso que no esta
        echo "Ese michi no existe :c";
}
//ciclo while 
//clase 9
$contador = 1; // contador necesario
while($contador <= 10) {
    echo "Actualmente estamos en la iteración $contador \n";
    $contador++; // necesario para cortar el ciclo
}
// ciclo do-while
//clase 10
$usernames = ["Pepito123", "Mr.Michi", "RetaxMain"];
do {    
    $username = readline("Por favor, ingresa tu nuevo nombre de usuario: ");
    echo "\n";
} while( in_array($username, $usernames) );

// ciclo for
//clase 11
for ($i = 0, $j = 0; $i < 10; $i++, $j += 2) {
    // Escribir todo nuestro código
    echo "i = $i j = $j" . "\n";
}

for ($i=0; $i < 10; $i++) { 
    # code...
}
// ciclo foreach 
//clase 12
$tiendita_de_cafes = array(
    "Americano" => 20,
    "Latte" => 25,
    "Capuccino" => 27.5,
    "Mocca" => 24
);
foreach ($tiendita_de_cafes as $cafe => $price) 
    echo "El café $cafe cuesta $$price USD \n";
//recorre el arreglo

// funciones
//clase 14
function get_pokemon() {  // reutilizar codigo 
    $numero_aleatorio = rand(1, 5);
    switch ($numero_aleatorio) {
        case 1:
            echo "Pikachu\n";
            break;        
        case 2:
            echo "Charmander\n";
            break;
        case 3:
            echo "Mewtwo\n";
            break;        
        default:
            echo "Lo siento, no hay pokémon para ti :c\n";
    }
}
for ($i=0; $i < 20; $i++) { 
    get_pokemon();
}
//nave espacial <=>
//clase 18
$precios_de_cafes = [12, 56, 32, 89, 2, 1];

usort($precios_de_cafes, function($a, $b){
    return $a <=> $b;
}); // ordena el array
var_dump( $precios_de_cafes );


?>

readline // solicita ingresar un dato.
rand (max,min) // genera numeros aleatorias dentro del rango
/*
sort() : ordena un arreglo de menor a mayor.

usort() : arregla un arreglo, pero necesita 
también como parámetro una función, 
así podemos ordenar un arreglo según nuestra necesidad.
*/