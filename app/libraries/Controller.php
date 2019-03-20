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

        return new $modelo();
    }

    public function vista($vista, $data = []) {
        if (file_exists('../app/views/pages/' . $vista . '.php')) {
            require_once '../app/views/pages/' . $vista . '.php';
        } else {
            die('No existe la página');
        }
    }

    public function prepararDatos($datos) {
        $data = [];
        array_push($data, $datos);
        return $data;
    }

}