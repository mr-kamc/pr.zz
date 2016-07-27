<?php

namespace libs;


class DataBase extends \PDO
{
    public function __construct()
    {
        parent::__construct('mysql:host=localhost;dbname=mvc', 'root', '');
    }

}