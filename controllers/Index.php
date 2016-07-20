<?php

namespace controllers;


class Index extends Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->view->msg = 'Главная';
        $this->view->render('index/index');
    }

}