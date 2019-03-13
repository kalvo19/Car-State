<?php
/**
 * Created by PhpStorm.
 * User: meinsusseichhornchen
 * Date: 11/03/19
 * Time: 9:46
 */

class Core {
    protected $controladorActual = 'Pages';
    protected $metodoActual = 'index';
    protected $parametros = [];

    public function __construct() {
        $url = $this->getUrl();
        print_r($url);

        if (file_exists('../app/controllers/' . ucwords($url[0]) . '.php')) {
            $this->__set('controladorActual', ucwords($url[0]));
            unset($url[0]);
        }

        require_once '../app/controllers/' . $this->controladorActual . '.php';

        $this->__set('controladorActual', new $this->controladorActual);

        if (method_exists($this->controladorActual, $url[1])) {
            $this->__set('metodoActual', $url[1]);
            unset($url[1]);
        }

        call_user_func([$this->controladorActual, $this->metodoActual], $this->__get('parametros'));
    }

    public function __set($propiedad, $valor) {
        if (property_exists($this, $propiedad)) {
            $this->$propiedad = $valor;
        }

        return $this;
    }

    public function __get($propiedad) {
        return $this->$propiedad;
    }

//  Devuelve la URL trozeada en una matriz que contiene los valores que vienen a continuación de una '/'
    public function getUrl() {

//      Comprueba si existe una URL en la barra de dirección del navegador.
//
//      Si la URL es 'localhost/' devuelve FALSE
//      Si la URL es 'localhost/usuarios' devuelve TRUE
        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url']);
            $url = $this->sanearUrl($url);
            return explode('/', $url);
        }
    }

//  Elimina todos los caracteres excepto letras, dígitos y $-_.+!*'(),{}|\\^~[]`<>#%";/?:@&= de la URL
//  pasada como parámetro.
    public function sanearUrl($url) {
        return filter_var($url, FILTER_SANITIZE_URL);
    }

}