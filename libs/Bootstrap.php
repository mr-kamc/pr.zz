<?php

namespace libs;


use controllers\Error;
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
        switch (count($path)){
            case 2:
                $ctrl = class_exists('controllers\\' . $path[1]) ? 'есть' : 'нету';
                break;
            case 3:


                break;
        }
        var_dump($path);
        var_dump($ctrl);
        echo '/controllers/' . $path[1];
    }



}