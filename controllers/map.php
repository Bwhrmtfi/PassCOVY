<?php

// http://localhost/live/Home/Show/1/2

class Map extends Controller
{
    function anonymous()
    {

        $this->view("map/map", []);
    }
}
