<?php

namespace models;


use libs\DataBase;

class GuestBook
{
    public function findAllSort()
    {
        $db = new DataBase();
        return $db->query('SELECT * FROM book ORDER BY id DESC');
    }

    public function delRec($id)
    {
        $db = new DataBase();
        return $db->execute("DELETE FROM book WHERE id=$id");
    }

    public function insRec($name, $text)
    {
        $today = date("y.m.d");
        $db = new DataBase();
        $db->execute("INSERT INTO book (`id`, `name`, `text`, `date`)
                      VALUES (NULL, '".$name."', '".$text."', '".$today."')");
    }
}
