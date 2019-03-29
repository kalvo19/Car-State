<?php
/**
 * Created by PhpStorm.
 * User: meinsusseichhornchen
 * Date: 11/03/19
 * Time: 16:44
 */

require_once '../app/libraries/Controller.php';

class Users extends Controller {

    private $modeloUser = '';

    public function index() {
        $datosDelUsuario = $this->obtenerDatosRegistro($_POST);

        $usuarioNuevo = $this->modelo('User', $datosDelUsuario);
        $this->comprobarUsuarioNuevo($usuarioNuevo);

        if ($usuarioExistente) {
            $this->vista('register', $usuarioExistente);
        }

    }

    public function obtenerDatosRegistro($datosRegistro) {
        foreach ($datosRegistro as $propiedad => $valor) {
            $datosDelUsuario[$propiedad] = $valor;
        }

        return $datosRegistro;
    }

    public function comprobarUsuarioNuevo($usuario) {
        $usuarioExistente = $usuario->comprobarUsuarioNuevo();
        
        if ($usuarioExistente) {
            $this->vista('register');
        }
    }

}