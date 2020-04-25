<?php

// http://localhost/live/Home/Show/1/2

class Note extends Controller
{
    function anonymous()
    {
        if(isAuth()){
            $this->view("Note/note", []);
        }else{
            header('Location: /login');
        }
    }
}
