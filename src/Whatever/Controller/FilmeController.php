<?php

namespace Whatever\Controller;

use Whatever\Dao\FilmeDao;
use Whatever\Model\Filme;
use Whatever\View\Twig;

class FilmeController
{
    private $dao;
    private $view;

    public function __construct(FilmeDao $dao)
    {
        $this->dao = $dao;
                $this->view = new Twig();
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

            $this->dao->insert($filme);
        }
        
        $this->view->render('form.twig',  $this->lista());
    }

    public function lista()
    {
        return $this->dao->findAll();
    }
}
