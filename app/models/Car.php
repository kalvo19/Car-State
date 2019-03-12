<?php
class Car {
    private $nombrePropietario = '';
    private $apellidosPropietario = '';    
    private $matricula = '';
    private $marca = '';
    private $modelo = '';
    private $version = '';
    private $combustible = '';
    private $distintivoMedioambiental = '';
    private $kmActuales = '';
    private $fechaAltaVehiculo = '';
    private $imagen = '';

}

public function insertCar(){
    $this->nombrePropietario = $_POST["nombrePropietario"];
    $this->apellidosPropietario = $_POST["apellidosPropietario"];
    $this->matricula = $_POST["matricula"];
    $this->marca = $_POST["marca"];
    $this->modelo = $_POST["modelo"];
    $this->version = $_POST["version"];
    $this->combustible = $_POST["combustible"];
    $this->distintivoMedioambiental = $_POST["distintivoMedioambiental"];
    $this->kmActuales = $_POST["kmActuales"];
    $this->imagen = $POST["kmActuales"]; 
}