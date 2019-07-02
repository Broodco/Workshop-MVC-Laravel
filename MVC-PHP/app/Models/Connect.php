<?php

namespace App\Models;

class Manager 
{
    protected function DBConnect()
    {
        $database = new \PDO('mysql:host=localhost;dbname=database;charset=utf8','admin','pass',
        array(\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION));
        return $database;
    }
}