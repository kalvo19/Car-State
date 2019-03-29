<?php
/**
 * Created by PhpStorm.
 * User: meinsusseichhornchen
 * Date: 8/03/19
 * Time: 19:10
 */

class BBDD {

    private $connexion = '';
    private $statement = '';

    public function __construct() {

        $dsn = 'mysql:host=' . HOST_SERVIDOR_MYSQL . ';dbname=' . NOMBRE_BASE_DE_DATOS;

        $this->connexion = new PDO($dsn, USUARIO_BASE_DE_DATOS, CONTRASEÑA_BASE_DE_DATOS);

        if (!$this->connexion) {
            echo 'Debugging errno: ' . mysqli_errno();
            echo 'Debugging error: ' . mysqli_error();
        }
    }

    public function consulta($sql) {
        $this->statement = $this->connexion->prepare($sql);
    }

    public function incluirParametrosConsulta($parametros) {
        foreach ($parametros as $key => &$value) {
            echo $key . ' ' . $value;
            $this->statement->bindParam($key, $value, PDO::PARAM_STR);
        }
        print_r($this->statement);
    }

    public function ejecutarConsulta() {
        $this->statement->execute();
    }

    public function obtenerMultiplesFilas() {
        $this->ejecutarConsulta();
        $resultadoConsulta = $this->statement->fetchAll(PDO::FETCH_OBJ);
        return $resultadoConsulta;
    }

}