<?php

namespace controllers;


class Controller
{
    public function __construct()
    {
        echo 'это главный контроллер!';
        $this->view = new View;
    }

}