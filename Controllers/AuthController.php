<?php

namespace Controllers;

use Models\User;

class AuthController {


    public static function register() {
        return \View::make('admin/auth/register');
    }

    public static function login() {
        return \View::make('admin/auth/login');
    }

    public static function postLogin() {
        $user = User::find($_POST['email']);

        if ($user == NULL) {
            header("Location: /?loginfail");
            return;
        }

        $valid = password_verify($_POST['password'], $user->getPassword());

        if (!$valid) {
            header("Location: /?loginfail");
            return;
        }

        header("Location: /admin");
    }


}