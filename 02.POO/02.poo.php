<?php 

// TODO: /* CLASE */
// ! Una clase es un modelo (un paquete) que se utiliza para crear objetos que comparten un mismo comportamiento, estado e identidad:

class Automovil{



    //todo: /* PROPIEDADES */
    //! Son las Características que puede tener un Objeto:

    public $marca;
    public $modelo;



    //todo /* MÉTODO */
    //! Es el algoritmo asociado a un objeto que indica la coapacidad de lo que éste puede hacer. La única diferencia entre método y función, es que llamamos método a las funciones de una clase (en la POO), mientras que llamamos funciones, a los algoritmos de la programación estructurada o imperativa/espaguetti:

    public function mostrar(){

        echo "<p>¡Hola! soy un $this->marca, modelo $this->modelo</p>";

    }

}

//todo /* OBJETO */
//! Una entidad provista de métodos o mensajes a los cuales responde propiedades con valores concretos.

$a = new Automovil();
$a -> marca = "Toyota";
$a -> modelo = "Corolla";
$a -> mostrar();

$b = new Automovil();
$b -> marca = "Hyundai";
$b -> modelo = "Accent Vision";
$b -> mostrar();

$c = new Automovil();
$c -> marca = "Mazda";
$c -> modelo = "2";
$c -> mostrar();


//! ¡¡¡IMPORTANTE!!! PRINCIPIOS DE LA POO QUE SE CUMPLEN EN ESTE EJEMPLO:
//*     - ABSTRACCIÓN: Nuevos tipos de datos ( el que tu quieras, tu lo creas).
//*     - ENCAPSULAMIENTO: Organizar el código en grupos lógicos.
//*     - OCULTAMIENTO: Ocultar detalles de implementación y exponer sólo los detalles que sean necesarios para el resto del    sistema.


?>