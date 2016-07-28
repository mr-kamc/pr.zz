<?php

namespace libs;


class DataBase extends \PDO
{

    protected $dbh;

    public function __construct()
    {
        $config = include __DIR__ . '/../config/db.php';
        $this->dbh = new \PDO($config['dsn'],$config['user'],$config['password']);
    }

    //возвращает true или false
    public function execute(string $sql)
    {
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute();
        return $res;
    }
    //возвращает данные из БД, учитывая подстановки
    public function query(string $sql, array $data=[])
    {
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute($data);
        return $sth->fetchAll();
    }

}