<?php
/**
 * Created by PhpStorm.
 * User: meinsusseichhornchen
 * Date: 11/03/19
 * Time: 16:44
 */

class Users extends Controller {

    public function index() {
        parent::modelo('User');
        parent::vista('users');
    }

}