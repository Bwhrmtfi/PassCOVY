<?php

// http://localhost/live/Home/Show/1/2

class Logout extends Controller
{

    function anonymous()
    {
        clearSession();
        header('Location: /'); 
    }
}
