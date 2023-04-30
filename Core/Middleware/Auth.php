<?php

namespace Core\Middleware;

use function header;

class Auth
{
    public function handle(){
        if(! $_SESSION['user'] ?? false){
            header('location: /');
            exit();
        }
    }
}