<?php

// http://localhost/live/Home/Show/1/2

class Declaration extends Controller
{
    function anonymous()
    {
        $this->view("Declaration/declaration", []);
    }
}
