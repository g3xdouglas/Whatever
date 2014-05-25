<?php
/**
 * Created by PhpStorm.
 * User: douglas2
 * Date: 24/05/14
 * Time: 21:40
 */
require_once 'public/index.php';
?>

<!DOCTYPE html>
<html>
	<head>
	    <title>Filmes</title>
	    <meta charset="utf-8">
	</head>
<body>
<h1>cadastro de filmes</h1>
	<form method="post">
	    <label>Nome</label>
	    <input type="text" name="nome" /><br />
	    <label>Diretor</label>
	    <input type="text" name="diretor" /><br />
	    <label>Genero</label>
	    <input type="text" name="genero" /><br />
	    <input type="submit"  />
	</form>
</body>
</html>