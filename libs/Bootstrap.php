<?php

namespace libs;
use controllers\Error;

require __DIR__ . '/autoload.php';

class Bootstrap
{
    public function __construct()
    {
        $path = explode('/', parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
        switch (count($path)) {
            case 2:
                $ctrl = !empty($path[1]) ? 'controllers\\' . $path[1] : 'controllers\\Error.php';//заглушка для контроллера по умолчанию
                break;
            case 3:
                $ctrl = !empty($path[1]) ? 'controllers\\' . $path[1] : 'controllers\\Error.php';
                $action = !empty($path[2]) ? $path[2] : '';

                break;
            default:
                $ctrl = !empty($path[1]) ? 'controllers\\' . $path[1] : 'controllers\\Error.php';
                $action = !empty($path[2]) ? $path[2] : '';

                break;
        }
        var_dump($ctrl);
        $file = __DIR__ . '/../' . $ctrl . '.php';
        if (file_exists($file)) {
            $controller = new $ctrl;
            if (isset($action)) {
                $controller->$action(10);
            }

        } else {
            $controller = new Error();
        }

    }

}