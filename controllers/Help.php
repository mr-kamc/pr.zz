<?php

namespace controllers;


use models\HelpModel;

class Help extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->view->render('help/index');
    }

    public function other($arg=false)
    {
        $model = new HelpModel();
    }

}