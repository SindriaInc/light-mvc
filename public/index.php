<?php
/*
 * Entry point del framework
 * Tutte le richieste passano da qui sempre se Gandalf vuole!
 */

/*
 * Partendo da public converte il path in radice e include tutte le classi
 * dinamicamente quando richieste.
 */
spl_autoload_register(function ($class) {
    include '../' . str_replace('\\', '/', $class) . '.php';
});

Kernel::init(); //Inizializza la funzione init() dentro la classe Kernel

//var_dump($_SERVER[REQUEST_URI]);
//phpinfo(); test php
