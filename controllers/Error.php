<?php

namespace controllers;


class Error extends Controller
{
    public function __construct()
    {
        parent::__construct();
        echo 'Контроллер обработки ошибок!';
    }

}