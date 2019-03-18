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
    private $correo = '';
    private $password = '';

    private $connexion = '';

    /*
     * ------------------------------   CONSTRUCTOR DE LA CLASE   ------------------------------
     */

    public function __construct($nombre = '', $correo = '', $password = '') {
        $this->nombre = $nombre;
        $this->correo = $correo;
        $this->contraseña = $password;
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

    public function listarUsuarios() {
        $consulta = "SELECT * FROM usuarios;";
        $this->connexion = new BBDD();
        $this->connexion->consulta($consulta);
        $resultado = $this->connexion->obtenerMultiplesFilas();
        return $resultado;
    }

}