<?php

/**
 * Class Database
 * Classe che gestisce la connesione al database
 */
class Database {

    /**
     * @array
     */
    private static $config = array();

    /**
     * @var mysqli
     */
    private static $connection;

    public static function env($data) {
        // TODO leggere i dati da file env e passarli all'array config
    }

    public static function init() {
        Database::$config = [
            'DB_HOST' => 'localhost',
            'DB_USER' => 'site0',
            'DB_PASS' => 'thinkopen',
            'DB_NAME' => 'thinkopen.dev'
        ];
    }

    /**
     * @param $string
     * @param $types
     * @param array ...$params
     * @return bool|mysqli_result
     */
    public static function query($string, $types, ...$params) {
        if (Database::$connection === NULL) {
            Database::connect();
        }

        if ($statement = Database::$connection->prepare($string)) {
            $statement->bind_param($types, $params);
            $statement->execute();
            return $statement->get_result();
        }

        die(Database::$connection->errno . ": " . Database::$connection->error);
    }

    /**
     * @return mixed
     */
    public static function connect() {
        Database::$connection = new mysqli(Database::$config['DB_HOST'], Database::$config['DB_USER'], Database::$config['DB_PASS'], Database::$config['DB_NAME']);
        if (Database::$connection->connect_error) {
            die('Errore durante la connessione con MySQL (' . Database::$connection->connect_errno . ') '
                . Database::$connection->connect_error);
        }

        return Database::$connection;
    }

}
//$core = new Core();
//echo $core->connect();
