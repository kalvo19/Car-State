<?php
/**
 * Created by PhpStorm.
 * User: meinsusseichhornchen
 * Date: 6/03/19
 * Time: 17:12
 */

/*
-------------------------------- INICIO DE LA APLICACIÓN --------------------------------
*/

// Carga el fichero que inicia la aplicación y los ficheros necesarios para interactuar con ella:
//
// - Clase BBDD
// - Clase Controller
// - Clase Core
require_once '../app/boot.php';


// Instancia la clase 'Core', que se encarga de seleccionar el controlador correspondiente
// a la petición recibida por el usuario.
$init = new Core();

