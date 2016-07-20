<?php

namespace controllers;


use models\HelpModel;

class Help extends Controller
{
    public function __construct()
    {
        parent::__construct();
        echo 'мы в конструкторе Help!';
    }

    public function other($arg=false)
    {
        $model = new HelpModel();
    }

}