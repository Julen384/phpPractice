<?php

// TODO: Técnica de Código Imperativo o Código Espaguetti.

$automovil1 = (object)["marca"=>"Toyota", "modelo"=> "Corolla"];
$automovil2 = (object)["marca"=>"Hyundai", "modelo"=> "Accent Vision"];

function mostrar($automovil){

    echo "<p>¡Hola! Soy un coche de marca $automovil->marca y modelo $automovil->modelo.</p>";

}

mostrar ($automovil1);




?>