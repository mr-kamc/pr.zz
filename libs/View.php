<?php

namespace libs;


class View
{
    public function __construct()
    {
    }

    public function render($template, $noInclude = false)
    {
        if ($noInclude==true) {
            require __DIR__ . '/../views/' . $template . '.php';
        } else {
            require __DIR__ . '/../views/header.php';
            require __DIR__ . '/../views/' . $template . '.php';
            require __DIR__ . '/../views/footer.php';
        }
    }


}