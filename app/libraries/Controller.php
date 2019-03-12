<?php
/**
 * Created by PhpStorm.
 * User: meinsusseichhornchen
 * Date: 7/03/19
 * Time: 16:57
 */
class Controller {

    public function modelo($modelo) {
        if (file_exists('../app/models/' . $modelo . '.php')) {
            require_once '../app/models/' . $modelo . '.php';
        }
    }

    public function vista($vista) {
        echo $vista;
        if (file_exists('../app/views/pages/' . $vista . '.html')) {
            require_once '../app/views/pages/' . $vista . '.html';
        }

        die('No existe la página');
    }

}