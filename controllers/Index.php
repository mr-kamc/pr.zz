<?php

namespace controllers;


class Index extends Controller
{

    public function __construct()
    {
        parent::__construct();
        echo 'мы в контроллере index!';
    }

}