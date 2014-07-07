<?php

namespace Whatever\View;
use Twig_Autoloader;

class View
{
    protected $vars;
    protected $twig;
    
    public function __construct()
    {
       Twig_Autoloader::register();
       $loader = new \Twig_Loader_Filesystem(TEMPLATE);
       $this->twig = new \Twig_Environment($loader, array(
            'cache' => './tmp/cache',
            'debug' => false
        ));
        $this->twig->addExtension(new \Twig_Extension_Debug());
    }
    
    public function render($file, $data)
    {
        if (isset($data) && is_array($data))
             $this->vars = ['filme' => $data];

        $this->twig->loadTemplate($file)->display($this->vars);

    }

    public function __set( $name, $value)
    {
        $this->vars[$name] = $value;
        return $this;
    }

    public function __get($name)
    {
        return $this->vars[$name];
    }

}
