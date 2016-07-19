<?php

namespace controllers;


class Help extends Controller
{
    public function __construct()
    {
        parent::__construct();
        echo 'мы в конструкторе Help!';
    }

    public function other($param)
    {
        echo 'мы в методе other </br>';
        echo 'Параметры:' . $param;
    }

}