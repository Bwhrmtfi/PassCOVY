<?php

// http://localhost/live/Home/Show/1/2

class send extends Controller
{
    function anonymous()
    {
        $this->view("param/senNTU", ["NTU" => "6.6"]);
    }
    function NTU($a)
    {
        $this->view("param/senNTU", ["NTU" => $a]);
    }
}
