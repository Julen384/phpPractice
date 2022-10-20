<?php

//* EL INDEX: En él mostraremos la salida de las vistas al usuario y también a traves de él enviaremos las distintas acciones que el usuario envíe al controlador.

//* ¿QUÉ ES EL "REQUIRE"? Establece que el código del archivo invocado es requerido, es decir, obligaorio para el funcionamiento del programa. Por ello, si el archivo especificado en la función require() no se encuentra, saltará un error "PHP Fatal error" y el programa PHP se detendrá.

//* ¿QUÉ ES LA VERSIÓN "REQUIRE_ONCE"? Funciona de la misma forma que sus respectivos, salvo que, al utilizar la versión "_once", se impide la carga de un mismo archivo más de una vez.

//* Si requerimos el mismo código más de una vez, corremos el riesgo de redeclarar variables, funciones o clases sin querer.


require_once "controllers/controller.php";

$mvc = new MvcController();
$mvc -> plantilla();

?>