<?php
    //Incluye el archivo de configuración (config.php)
    require_once("config.php");

    //Incluye el controlador principal (index.php) que manejará las solicitudes.
    require_once("controlador/index.php");

    if(isset($_GET['m'])):
        if(method_exists("modeloController",$_GET['m'])):
            modeloController::{$_GET['m']}();
        endif;
    else:
        modeloController::index();
    endif;
?>