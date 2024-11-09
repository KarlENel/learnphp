<?php

namespace App\Controllers;

class AuthControllers{
    public function loginform(){

    }
    public function login(){
        
    }
    public function registerform(){
        view('auth/register');
    }
    public function register(){
        $user = User::where('email', $_POST['email'])[0] ?? null;
        if($_POST['password']) !== ($_POST['password_confirm']){
            redirect('/register');
        } else if {
            redirect('/register');
        } else {
        $user = new User();
        $user->name = $_POST['name'];
        $user->email = $_POST['email'];
        $user->password = $_POST['password'];
        $user->save();
        redirect('/login');
        };
    }
}