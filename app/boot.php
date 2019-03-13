<?php
/**
 * Created by PhpStorm.
 * User: meinsusseichhornchen
 * Date: 11/03/19
 * Time: 9:46
 */

// Importa el fichero de configuración 'app/config/config.php' que contiene constantes que serán útiles
// a la hora de gestionar las redirecciones a las diferentes páginas.
require_once '../app/config/config.php';

// Importa la clase 'BBDD.php' que contiene los métodos que permiten conectarse a la base
// de datos.
require_once '../app/libraries/BBDD.php';

// Importa la clase 'Controller.php' que contiene los métodos que permiten cargar las vistas
// (páginas que el usuario va a visualizar) para que los controladores del directorio '/controllers'
// puedan utilizarlos.
require_once '../app/libraries/Controller.php';

// Importa la clase 'Core.php' que se encarga de manejar las URL de manera que acceda a los controladores
// del directorio '/controllers' que correspondan en cada petición.
require_once '../app/libraries/Core.php';

