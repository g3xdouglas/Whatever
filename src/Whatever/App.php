<?php

namespace Whatever;

use Whatever\Controller\IndexController;
use Whatever\Dao\FilmeDao;

class App
{
    private $pdo;

    public  function __construct()
    {
        $this->pdo  = new \PDO('sqlite:Whatever.sqlite3');
        //$this->pdo = new \PDO("mysql:host=localhost; dbname=whatever", "root", "" );
        $dao = new FilmeDao($this->pdo);
        $control = new IndexController($dao);
        if($_POST) {
            $control->novo();
        }

        include_once 'view/form.html';

        var_dump($control->lista());
    }
} 