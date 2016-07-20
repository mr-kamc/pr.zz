<?php

namespace controllers;


use libs\View;

class Controller
{
    public function __construct()
    {
        $this->view = new View();
    }

}