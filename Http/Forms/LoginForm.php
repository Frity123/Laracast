<?php

namespace Http\Forms;

use Core\Validator;

class LoginForm
{
    protected $errors = [];
    public static function validate($email, $password){

//        if(!Validator::email($email)){
//            $this->errors['email'] = 'Please provide a correct email';
//        }
//
//        if(!Validator::string($password,1, 5)){
//            $this->errors['password'] = 'Please provide a correct password';
//        }
//
//        return empty($this->errors);
    }

    public function errors(){
        return $this->errors;
    }

    public function error($field, $message){
        $this->errors[$field] = $message;
    }
}