<?php

namespace controllers;


use libs\View;

class Controller
{
    public function __construct()
    {
        echo 'это главный контроллер!';
        $this->view = new View();
    }

}