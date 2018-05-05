<?php

/**
 * Class Kernel
 * Classe principale del framework che gestisce le richieste
 */
class Kernel { //Dichiara la classe Kernel

    /**
     * Indirizzo della richiesta attuale
     * @var array
     */
    private static $url;//Variabile url statica

    /**
     * @var Routes
     */
    private static $routes;

    /**
     * Inizializza il kernel e le sue proprieta'
     * @return void
     */
    public static function init() {//Dichiara la funzione statica pubblica init
        Kernel::$url = $_SERVER['REQUEST_URI'];
        Kernel::$routes = new Routes();
        Database::init();
        Kernel::handle();
    }

    /**
     * Gestisce la richiesta indirizzandola verso una rotta (route)
     * @return void
     */
    public static function handle() {
        $validRoutes = array();

        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $validRoutes = Kernel::$routes->gets();
        } else if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $validRoutes = Kernel::$routes->posts();
        }

        $found = false;

        // Cerca la rotta valida per la richiesta corrente
        foreach ($validRoutes as $key => $value) {
            if ($key === Kernel::$url) {
                $found = true;
                Kernel::display($key, $value);
                break;
            }
        }

        if (!$found) {
            echo "404";
        }
    }

    public static function display($key, $value) {
        if (!is_array($value)) {
            echo $value;
        }

        call_user_func($value);
    }

}
