<?php

namespace libs;


class Model
{
    public function __construct()
    {
        $this->db = new DataBase();
    }

}