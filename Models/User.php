<?php

namespace Models;

class User extends Model {

    private static $table = "users";

    private $id;
    private $username;
    private $email;
    private $password;
    private $role_id;
    private $updated_at;
    private $created_at;

    public static function find ($email) {
        $result = \Database::query("SELECT * FROM " . User::$table . " WHERE email=?;", "s", $email);

        if ($result->num_rows == 0 ) {
            return NULL;
        }

        $row = $result->fetch_assoc();
        $user = new User();
        $user->id = $row['id'];
        $user->username = $row['username'];
        $user->email = $row['email'];
        $user->password = $row['password'];
        $user->role_id = $row['role_id'];
        $user->updated_at = $row['updated_at'];
        $user->created_at = $row['created_at'];

        return $user;
    }

    /**
     * @return mixed
     */
    public function getPassword() {
        return $this->password;
    }

}