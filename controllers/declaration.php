<?php

// http://localhost/live/Home/Show/1/2

class Declaration extends Controller
{
    function anonymous()
    {
        if(isAuth()){
            $this->view("Declaration/declaration", []);
        }else{
            header('Location: /login');
        }
    }
}
