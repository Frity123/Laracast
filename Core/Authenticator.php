<?php

namespace Core;

use function session_destroy;
use function session_get_cookie_params;
use function session_regenerate_id;
use function time;

class Authenticator
{
    public function attempt($email, $password){
        $user = App::resolve(Database::class)->query('select * from users where email = :email', [
            'email' => $email
        ])->find();

        if($user){
            if(password_verify($password, $user['password'])){
                $this->login([
                    'email' => $email
                ]);

                return true;
            }
        }
    }

    public function login($user){
        $_SESSION['user'] = [
            'email' => $user['email']
        ];

        session_regenerate_id(true);
    }

    public function logout(){
        Session::destroy();
    }
}