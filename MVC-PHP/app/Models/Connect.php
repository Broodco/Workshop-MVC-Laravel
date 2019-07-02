<?php

namespace App\Models;

class Connect 
{
    protected function DBConnect()
    {
        $dns = "mysql:host=".getenv('DB_HOST')."; dbname=".getenv('DB_DATABASE');
        $database = new \PDO($dns,getenv('DB_USER'),getenv('DB_PASSWORD'),
        array(\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION));
        return $database;
    }
}