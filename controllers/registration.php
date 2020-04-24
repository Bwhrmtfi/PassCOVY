<?php

// http://localhost/live/Home/Show/1/2

class Registration extends Controller
{

    function anonymous()
    {
        $this->view("Registration/registration", ["name"=>"Trinh Thanh Phú","id"=>"10"]);
    }
}
