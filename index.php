<?php

//só poderá ser acessado por alguem que já esteja logado

session_start();
//se existe a sessão com o id e ela não tiver vazia
	if (isset($_SESSION['id']) && empty($_SESSION['id'])== false ){ 
	echo "Área restrita (vai ficar o Beaba)";

	}else{
	//redirecionar para o login
	//mandando o usuário para o login.php
		header("Location: login.php");
	}


?>