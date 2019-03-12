<?php
/**
 * Created by PhpStorm.
 * User: meinsusseichhornchen
 * Date: 7/03/19
 * Time: 16:50
 */

class Pages extends Controller {

    /*
    * ------------------------------   PROPIEDADES DE LA CLASE   ------------------------------
    */

    public function index() {
        parent::vista('index', $data = []);
    }

    public function usuarios() {
        parent::vista('usuarios', $data = []);
    }
}