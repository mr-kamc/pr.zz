<?php

namespace controllers;


class Index extends Controller
{

    public function __construct($msg='Главная')
    {
        parent::__construct();
        $this->view->msg = $msg;

    }

    public function index()
    {
        $this->view->render('index/index');

    }

}