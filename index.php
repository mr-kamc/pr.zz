<?php

require __DIR__ . '/libs/autoload.php';
$path = explode('/',parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH));
switch(count($path)) {
    case 2:
        $ctrl = !empty($path[1]) ? 'controllers\\' . $path[1] : '';//заглушка для контроллера по умолчанию
        var_dump($ctrl);
        var_dump($path);
        break;
    case 3:
        $ctrl = !empty($path[1]) ? 'controllers\\' . $path[1] : '';
        $action = !empty($path[2]) ? $path[2] : '';

        var_dump($path);
        var_dump($path[2]);
        break;
    default:
        $ctrl = !empty($path[1]) ? 'controllers\\' . $path[1] : '';
        $action = !empty($path[2]) ? $path[2] : '';

        var_dump($path);
        break;
}

$controller = new $ctrl;
if(isset($action)){
    $controller->$action(10);
}
