<?php
/**
 * Created by PhpStorm.
 * User: meinsusseichhornchen
 * Date: 7/03/19
 * Time: 16:50
 */

require_once '../app/libraries/Controller.php';

class Pages extends Controller {

    /*
    * ------------------------------   PROPIEDADES DE LA CLASE   ------------------------------
    */

    public function index() {
        $this->vista('index', $data = []);
    }

    public function users() {
        $this->vista('users', $data = []);
    }

    public function register() {
        $this->vista('register', $data = []);
    }
}