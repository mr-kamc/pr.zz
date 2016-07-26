<?php

namespace libs;


use controllers\Error;
use controllers\Help;
use controllers\Index;


class Bootstrap
{
    public function __construct()
    {
        /*
        $path = explode('/', parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
        switch (count($path)) {
            case 2:
                $ctrl = !empty($path[1]) ? '\\controllers\\' . $path[1] : '\\controllers\\Index.php';//заглушка для контроллера по умолчанию
                break;
            case 3:
                $ctrl = !empty($path[1]) ? '\\controllers\\' . $path[1] : '\\controllers\\Index.php';
                $action = !empty($path[2]) ? $path[2] : '';
                break;
            default:
                $ctrl = !empty($path[1]) ? '\\controllers\\' . $path[1] : '\\controllers\\Index.php';
                $action = !empty($path[2]) ? $path[2] : '';

                break;
        }


        $file = __DIR__  . '/..' . $ctrl . '.php';
        var_dump($file);
        if (file_exists($file)) {
            $controller = new $ctrl;
            if (isset($action)) {
                $controller->$action(10);
            }

        } else {
            $ctrl = '\\..\\controllers\\Index.php';
            $controller = new Index();

        }*/
        $path = explode('/', parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
        var_dump($path);
        var_dump(count($path));

        if($path[1] == ''){
            $path[1] = 'Index';
        }

        switch (count($path)){
            case 2:
                $ctrl = file_exists(__DIR__ . '/../controllers/' . $path[1] . '.php') ? $path[1] : 'Error';
                break;
            case 3:
                $ctrl = file_exists(__DIR__ . '/../controllers/' . $path[1] . '.php') ? $path[1] : 'Error';
                $name = '\\controllers\\' . $path[1];
                $control = new $name();
                var_dump($control);
                $act = method_exists($control,$path[2]);

                break;
        }
        //var_dump($path[2]);
        //var_dump($ctrl);
        var_dump($act);
    }



}