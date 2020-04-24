<?php

// http://localhost/live/Home/Show/1/2

class registrationAccout extends Controller
{

    function anonymous()
    {
        clearError();
        $this->view("RegistrationAccout/anonymousRegistration", []);
    }
}
