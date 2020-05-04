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
<link rel="stylesheet" type="text/css" href="CSS/estilo.css">

<head>
<div id ="corpo-form">
<h1> Login </h1> 

<h1>OPAAAAAAAAAA DEU CERTO
SEJA BEM VINDO</h1>
<a href ="Sair.php">SAIR </a>