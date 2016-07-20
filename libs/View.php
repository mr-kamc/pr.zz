<?php

namespace libs;


class View
{
    public function __construct()
    {
        echo 'это вид!';
    }

    public function render($template)
    {
        require __DIR__ . '/../views/' . $template . '.php';
    }


}