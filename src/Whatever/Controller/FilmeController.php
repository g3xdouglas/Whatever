<?php

namespace Whatever\Controller;

use Whatever\Dao\FilmeDao;
use Whatever\Model\Filme;

class FilmeController
{
    private $dao;

    public function __construct(FilmeDao $dao)
    {
        $this->dao = $dao;
    }

    public function novo()
    {
        $postFilter = array(
            'nome'=> FILTER_SANITIZE_STRING,
            'diretor' => FILTER_SANITIZE_STRING,
            'genero' => FILTER_SANITIZE_STRING
        );

        $post = array_filter(filter_var_array($_POST, $postFilter));

        $filme = new Filme();
        $filme->setDiretor($post['diretor']);
        $filme->setNome($post['nome']);
        $filme->setGenero($post['genero']);

        return $this->salva($filme);
    }

    public function salva(Filme $filme)
    {
        return $this->dao->insert($filme);
    }

    public function lista()
    {
        return $this->dao->findAll();
    }
}
