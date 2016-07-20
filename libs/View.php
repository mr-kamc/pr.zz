<?php

namespace libs;


class View
{
    public function __construct()
    {
    }

    public function render($template)
    {
        require __DIR__ . '/../views/' . $template . '.php';
    }


}