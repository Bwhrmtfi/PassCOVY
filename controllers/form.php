<?php

// http://localhost/live/Home/Show/1/2

class Form extends Controller
{
    function anonymous()
    {
        if(isAuth()){
            $this->view("Form/makepdf", []);
        }else{
            header('Location: /login');
        }
    }
}
