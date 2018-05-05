<?php


class View {

    public static function make($path) {
        if (!$path) {
            die("View non trovata: $path");
        }

        return include "../views/$path.php";
    }

}