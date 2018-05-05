<?php

namespace Controllers;

class FrontendController {

    // GETS

    public static function index() {
        return \View::make('index');
    }

    public static function about() {
        //return "about";
        return \View::make('about');
    }

    public static function blog() {
        //return "about";
        return \View::make('blog');
    }

    public static function contact() {
        //return "about";
        return \View::make('contact');
    }


    // POSTS

    public static function store() {
        return "store";
    }

    public static function delete() {
        return "delete";
    }

    public static function edit() {
        return "edit";
    }

    public static function update() {
        return "update";
    }



}
