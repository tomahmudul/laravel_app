<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function assignment_module7(){
        return "Hello, Laravel!";
    }

    public function login($email,$password){

        if($email == "hassan@gmail.com" && $password == "123"){
            return "Login successful";
        }else{
            return "Invalid credentials";
        }

    }
}
