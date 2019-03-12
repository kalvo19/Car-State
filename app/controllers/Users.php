<?php
/**
 * Created by PhpStorm.
 * User: meinsusseichhornchen
 * Date: 11/03/19
 * Time: 16:44
 */

class Users extends Controller {

    public function home() {
        parent::modelo();
        parent::vista('users');
    }

}