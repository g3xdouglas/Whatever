<?php

namespace Whatever;

use Whatever\Controller\FilmeController;
use Whatever\Dao\FilmeDao;
use Whatever\View\Twig;

class App
{
    private $pdo;

    public function __construct()
    {
        $this->pdo = new \PDO('sqlite:filmes.db');

        $dao = new FilmeDao($this->pdo);
        $control = new FilmeController($dao, new Twig());
        $control->novo();

    }
} 