<?php

// http://localhost/live/Home/Show/1/2

class Form extends Controller
{
    function anonymous()
    {
        $this->view("Form/makepdf", []);
    }
}
