<?php
/**
 * Created by PhpStorm.
 * User: meinsusseichhornchen
 * Date: 8/03/19
 * Time: 18:58
 */

namespace User;

require_once '../app/libraries/BBDD.php';

class User extends BBDD {
    /*
     * ------------------------------   PROPIEDADES DE LA CLASE   ------------------------------
     */

    private $nombre = '';
    private $correo = '';
    private $password = '';

    /*
     * ------------------------------   CONSTRUCTOR DE LA CLASE   ------------------------------
     */

    public function __construct($nombre, $correo, $password) {
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
        // TODO: Implement __destruct() method.
    }

    public function listarUsuarios() {
        $consulta = "SELECT * FROM users;";
        $conexion = new BBDD();
        $conexion->seleccionarDatos($consulta);
    }

    

}