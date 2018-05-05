<?php

/**
 * Class Routes
 * Classe che definisce le rotte disponibili
 */
class Routes {

    /**
     * Array contenente le rotte get
     * @var array
     */
    private $get = array();

    /**
     * Array contenente le rotte post
     * @var array
     */
    private $post = array();

    public function __construct() {
        $this->get = [
            '/' => array('Controllers\FrontendController', 'index'),
            '/about' => array('Controllers\FrontendController', 'about'),
            '/blog' => array('Controllers\FrontendController', 'blog'),
            '/contact' => array('Controllers\FrontendController', 'contact'),
            '/login' => array('Controllers\AuthController', 'login'),
            '/register' => array('Controllers\AuthController', 'register'),
            '/admin' => array('Controllers\BackendController', 'index')
        ];

        $this->post = [
            '/login' => array('Controllers\AuthController', 'postLogin'),
            '/store' => array('Controllers\FrontendController', 'store'),
            '/delete' => array('Controllers\FrontendController', 'delete'),
            '/edit' => array('Controllers\FrontendController', 'edit'),
            '/update' => array('Controllers\FrontendController', 'update')
        ];
    }

    /**
     * Restituisce le rotte get come array associativo
     * @return array
     */
    public function gets() {
        return $this->get;
    }

    /**
     * Restituisce le rotte post come array associativo
     * @return array
     */
    public function posts() {
        return $this->post;
    }

}


