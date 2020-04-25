<?php

// http://localhost/live/Home/Show/1/2

class Login extends Controller
{

    function anonymous()
    {
        if(isAuth()){
            header('Location: /');
        }else{
            $this->view("Login/login", []); 
        }
    }
}
