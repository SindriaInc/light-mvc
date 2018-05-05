<?php

namespace Controllers;

class BackendController {

    // GETS

    public static function index() {
        return \View::make('admin/index');
    }

    // POSTS

    public static function store() {
        return "store";
    }
    
}