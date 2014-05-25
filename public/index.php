<?php
/**
 * Created by PhpStorm.
 * User: douglas2
 * Date: 24/05/14
 * Time: 20:16
 */
include 'bootstrap.php';

use Whatever\Controller;

use Whatever\Dao\FilmeDao;

$dao = new FilmeDao(new PDO("mysql:host=localhost; dbname=whatever", "root", "" ));
$control = new Controller($dao);
if($_POST) {

    $control->novo();
}
var_dump($control->lista() );
?>  
