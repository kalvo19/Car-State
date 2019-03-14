<?php
/**
 * Created by PhpStorm.
 * User: meinsusseichhornchen
 * Date: 11/03/19
 * Time: 16:44
 */

class Users extends Controller {

    public function index() {
        $usuario = $this->modelo('User');
        $usuario->listarUsuarios();
        parent::vista('users');
    }
}