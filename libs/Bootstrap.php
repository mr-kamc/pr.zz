<?php

namespace libs;


use controllers\Error;
use controllers\Help;
use controllers\Index;


class Bootstrap
{
    public function __construct()
    {
        $path = explode('/', parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

        if($path[1] == ''){
            $path[1] = 'Index';
        }

        switch (count($path)){
            case 2:
                $ctrl = file_exists(__DIR__ . '/../controllers/' . $path[1] . '.php') ? '\\controllers\\' . $path[1] : '\\controllers\\Error';
                $control = new $ctrl;
                //$control->loadModel('Login');//подключение модели
                $control->index();
                break;
            case 3:
                $ctrl = file_exists(__DIR__ . '/../controllers/' . $path[1] . '.php') ? '\\controllers\\' . $path[1] : '\\controllers\\Error';
                $control = new $ctrl();
                if (method_exists($control,$path[2])){
                    $meth = $path[2];
                    $control->$meth();
                } else {
                    $msg = 'такого метода не существует';
                    $control = new Index($msg);
                    $control->index();
                }

                break;
        }

    }



}