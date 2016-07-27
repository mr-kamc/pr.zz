<?php

namespace controllers;


use libs\View;

class Controller
{
    public function __construct()
    {
        $this->view = new View();
    }

    public function loadModel($name)
    {
        $path = __DIR__ . '/../models/' . $name . 'Model.php';
        if(file_exists($path)){
            require __DIR__ . '/../models/' . $name . 'Model.php';
            $modelName = '\\models\\' . $name . 'Model';
            $this->model = new $modelName();
        }
    }

}