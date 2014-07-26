<?php
namespace Whatever\Model;

class Filme implements Entity
{

    private $nome;
    private $diretor;
    private $genero;
    
    /**
     * Gets the value of nome.
     *
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }
    
    /**
     * Sets the value of nome.
     *
     * @param mixed $nome the nome 
     *
     * @return self
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Gets the value of diretor.
     *
     * @return mixed
     */
    public function getDiretor()
    {
        return $this->diretor;
    }
    
    /**
     * Sets the value of diretor.
     *
     * @param mixed $diretor the diretor 
     *
     * @return self
     */
    public function setDiretor($diretor)
    {
        $this->diretor = $diretor;

        return $this;
    }

    /**
     * Gets the value of genero.
     *
     * @return mixed
     */
    public function getGenero()
    {
        return $this->genero;
    }
    
    /**
     * Sets the value of genero.
     *
     * @param mixed $genero the genero 
     *
     * @return self
     */
    public function setGenero($genero)
    {
        $this->genero = $genero;

        return $this;
    }
}