<?php

class MvcController{
    //! LLAMADA A LA PLANTILLA
    /*----------------------------------------------- */

    public function plantilla(){
        include "views/template.php";
    }


    //! INTERACCIÓN DEL USUARIO
    /*----------------------------------------------- */
    public function enlacesPaginasController(){

        $enlacesController = $_GET["action"];

        echo $enlacesController;

        $respuesta = EnlacesPaginas::enlacesPaginasModel($enlacesController);

        include $respuesta;
    }
}


?>