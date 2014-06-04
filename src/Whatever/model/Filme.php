<?php
/**
 * Created by PhpStorm.
 * User: douglas2
 * Date: 24/05/14
 * Time: 20:25
 */
namespace Whatever\Model;

use Whatever\Model\Entity;

class Filme implements Entity
{

    private $nome;
    private $diretor;
    private $genero;

    /**
     * @return string
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @return string
     */
    public function getDiretor()
    {
        return $this->diretor;
    }

    /**
     * @return string
     */
    public function getGenero()
    {
        return $this->genero;
    }

    /**
     * @param string $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @param string $diretor
     */
    public function setDiretor($diretor)
    {
        $this->diretor = $diretor;
    }

    /**
     * @param string $genero
     */
    public function setGenero($genero)
    {
        $this->genero = $genero;
    }
}
