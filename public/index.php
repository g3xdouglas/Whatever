<?php
/**
 * Created by PhpStorm.
 * User: douglas2
 * Date: 24/05/14
 * Time: 20:16
 */
include 'bootstrap.php';

use Whatever\Controller\IndexController;

use Whatever\Dao\FilmeDao;
$sqlite  =new PDO('sqlite:Whatever.sqlite3');
//$mysql = new PDO("mysql:host=localhost; dbname=whatever", "root", "" );
$dao = new FilmeDao($sqlite);
$control = new IndexController($dao);
if($_POST) {

    $control->novo();
}

require_once 'views/form.html';

var_dump($control->lista() );
?>