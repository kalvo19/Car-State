<?php
/**
 * Created by PhpStorm.
 * User: meinsusseichhornchen
 * Date: 8/03/19
 * Time: 18:58
 */

class User extends BBDD {
    /*
     * ------------------------------   PROPIEDADES DE LA CLASE   ------------------------------
     */

    private $nombre = '';
    private $apellidos = '';
    private $email = '';
    private $contraseña = '';

    private $connexion = '';

    /*
     * ------------------------------   CONSTRUCTOR DE LA CLASE   ------------------------------
     */

    public function __construct($propiedades) {
        $this->nombre = $propiedades['nombre'];
        $this->apellidos = $propiedades['apellidos'];
        $this->email = $propiedades['email'];
        $this->contraseña = $propiedades['contraseña'];
    }

    /*
     * ------------------------------   GETTERS   ------------------------------
     */

    public function __get($propiedad) {
        if (property_exists($this, $propiedad)) {
            return $this->$propiedad;
        }
    }

    /*
     * ------------------------------   SETTERS   ------------------------------
     */

    public function __set($propiedad, $valor) {
        if (property_exists($this, $propiedad)) {
            $this->$propiedad = $valor;
        }

        return $this;
    }

    /*
     * ------------------------------   DESTRUCTOR DE LA CLASE   ------------------------------
     */

    public function __destruct() {

    }

    public function comprobarUsuarioNuevo() {
        $parametros = [
            ':email' => $this->email,
        ];

        $consulta = "SELECT id_usuario,email FROM usuarios WHERE email=:email";
        $this->connexion = new BBDD();
        $this->connexion->consulta($consulta);
        $this->connexion->incluirParametrosConsulta($parametros);
        $resultado = $this->connexion->obtenerMultiplesFilas();
        return $resultado;
    }

    public function listarUsuarios() {
        $consulta = "SELECT * FROM usuarios;";
        $this->connexion = new BBDD();
        $this->connexion->consulta($consulta);
        $resultado = $this->connexion->obtenerMultiplesFilas();
        return $resultado;
    }

    public function comprobarExistenciaUsuario() {

    }
}
