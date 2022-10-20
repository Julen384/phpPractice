<?php

# Variable Numerica

$numero = 5;
echo "Esto es una Variable Número: $numero<br>";
echo var_dump($numero);
echo "<br><br>";

# Variable Texto

$palabra = "Palabra";
echo "Esto es una Variable Texto: $palabra<br>";
echo var_dump($palabra);

echo "<br><br>";

# Variable Boleana

$boleana = true;
echo "Esto es una Variable Boleana: $boleana<br>";
echo var_dump($boleana);
echo "<br><br>";

# Variable Array

$colores = array( "Rojo", "Amarilo", "Púrpura", "Negro" );
echo "Esto es una Variable Array: $colores[2]<br>";
echo var_dump($colores);
echo "<br><br>";

# Variable Array con Propiedades

$verduras = array( "verdura1" => "Lechuga", "verdura2" => "Cebolla");
echo "Esto es una Variable Array con Propiedades: $verduras[verdura1]<br>";
echo var_dump($verduras);
echo "<br><br>";

# Variable Objeto

$frutas = (object)["fruta1" => "Pera", "fruta2" => "Manzana"];
echo "Esto es una Variable Objeto: $frutas->fruta2 <br>";
echo var_dump($frutas);




?>