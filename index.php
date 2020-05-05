<?php


//só poderá ser acessado por alguem que já esteja logado

session_start();
//se existe a sessão com o id e ela não tiver vazia
	if (isset($_SESSION['id']) && empty($_SESSION['id'])== false ){ 
	//echo "Área restrita (vai ficar o Beaba)";

	}else{
	//redirecionar para o login
	//mandando o usuário para o login.php
		header("Location: login.php");
	}


?>
<html lang="pt-br">
<head>
	<meta charset="utf-8"/>
<title>Projeto Beaba</title>
<link rel="stylesheet" type="text/css" href="CSS/estilos1.css">

<head>
<div id ="corpo-form">
	<form >

		<?php
		date_default_timezone_set('America/Sao_Paulo');
  		echo date ('d/m/Y \à\s H:i:s');
		?>
		


<h1>Seja bem vindo aqui está sua tela inicial</h1>
<center>
<a  href="Sair.php" type="button" value="Sair">Sair</a>
</center>
</form>
