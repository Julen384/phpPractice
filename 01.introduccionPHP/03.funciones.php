<?php

# Funciones sin Parámetro

function saludo(){
    echo "Hola<br>";
}
saludo();



# Funciones con Parámetro

function despedida($adios){
    echo $adios."<br>";

}
despedida("Adiós");



# Funciones con retorno

function retorno ($retornar){
    return $retornar;
}
echo retorno("Retornar");

?>