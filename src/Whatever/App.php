<?php

namespace Whatever;

use Whatever\Controller\FilmeController;
use Whatever\Dao\FilmeDao;
use Whatever\View\View;

class App
{
    private $pdo;


    public  function __construct()
    {
        //$this->pdo  = new \PDO('sqlite:Whatever.sqlite3');
        $this->pdo = new \PDO("mysql:host=localhost; dbname=whatever", "root", "@cesso" );

        $dao = new FilmeDao($this->pdo);
        $control = new FilmeController($dao);


        /** aqui entratria a classe view */
        if($_POST) {
            $control->novo();
            print_r($_POST);
        }

        return new View('form.html');

        var_dump($control->lista());
    }
} 