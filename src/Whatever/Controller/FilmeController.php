<?php

namespace Whatever\Controller;

use Whatever\Dao\FilmeDao;
use Whatever\Model\Filme;
use Whatever\View\View;

class FilmeController
{
    private $dao;
    private $view;

    public function __construct(FilmeDao $dao)
    {
        $this->dao = $dao;
    }

    public function novo()
    {
        if ($_POST) {
            $postFilter = array(
                'nome' => FILTER_SANITIZE_STRING,
                'diretor' => FILTER_SANITIZE_STRING,
                'genero' => FILTER_SANITIZE_STRING
            );

            $post = array_filter(filter_var_array($_POST, $postFilter));

            $filme = new Filme();
            $filme->setDiretor($post['diretor']);
            $filme->setNome($post['nome']);
            $filme->setGenero($post['genero']);

            $this->salva($filme);

        }
        $this->view = new View();

        $this->view->render('form.twig',  $this->lista());
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
