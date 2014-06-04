<?php
/**
 * Created by PhpStorm.
 * User: douglas2
 * Date: 24/05/14
 * Time: 20:16
 */
namespace Whatever\Dao;

use PDO;
use Whatever\Model\Entity;
use Whatever\Model\Filme;

class FilmeDao implements DataAccess
{

    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;

        $this->pdo->exec('
            CREATE TABLE IF NOT EXISTS filmes (
                id INTEGER PRIMARY KEY AUTOINCREMENT,
                nome TEXT NOT NULL,
                diretor TEXT NOT NULL,
                genero TEXT NOT NULL
            );
        ');
    }

    public function insert(Entity $filme)
    {
        $sql = 'INSERT INTO filmes(nome, diretor, genero
        ) VALUES (:nome, :diretor, :genero);';

        $stm = $this->pdo->prepare($sql);

        $stm->bindValue(':nome', $filme->getNome(), PDO::PARAM_STR);
        $stm->bindValue(':diretor', $filme->getDiretor(), PDO::PARAM_STR);
        $stm->bindValue(':genero', $filme->getGenero(), PDO::PARAM_STR);

        if ($stm->execute()) {
            return $this->pdo->lastInsertId();
        }
        throw new \RuntimeException('erro ao cadastrar o filme!');
    }

    public function getAll()
    {
        $stm = $this->pdo->prepare('
            SELECT * FROM filmes;
        ');

        $stm->setFetchMode(PDO::FETCH_CLASS, 'Whatever\Model\Filme');

        if ($stm->execute()) {
            return $stm->fetchAll();
        }
    }

    public function delete()
    {
    }

    public function getById($id)
    {
    }

}
