<?php

namespace controllers;


class Help
{
    public function __construct()
    {
        echo 'мы в конструкторе Help!';
    }

    public function other($param)
    {
        echo 'мы в методе other </br>';
        echo 'Параметры:' . $param;
    }

}