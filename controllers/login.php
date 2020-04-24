<?php

// http://localhost/live/Home/Show/1/2

class Login extends Controller
{

    function anonymous()
    {
        $this->view("Login/login", []);
    }
}
