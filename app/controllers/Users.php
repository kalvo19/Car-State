<?php
/**
 * Created by PhpStorm.
 * User: meinsusseichhornchen
 * Date: 11/03/19
 * Time: 16:44
 */

require_once '../app/libraries/Controller.php';

class Users extends Controller {


    public function index() {
        $usuario = $this->modelo('User');
        $listaUsuarios = $usuario->listarUsuarios();
        $data['usuarios'] = $this->prepararDatos($listaUsuarios);
        $this->vista('users', $data);
    }

}