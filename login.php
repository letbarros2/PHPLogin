<?php
session_start();
//se o campo email for citado
if(isset($_POST['email']) && empty($_POST['email']) == false ){
	$email = addslashes($_POST['email']);
	$senha = md5(addslashes($_POST['senha']));


	//dados do usuário 
	//verificar se o usuario existe
	// se add o email e senha corretamente

	$nomedobanco = "mysql:dbname=leticia;host=127.0.0.1";
	$usuariodobanco = "root";
	$senhadobanco = "";

	try{
		//configuração do banco
		$bancodedados = new PDO($nomedobanco,$usuariodobanco,$senhadobanco);
		//execute($bancodedados);
		//query com resultado ou não
		$sql = $bancodedados -> query("SELECT * FROM `usuarios` WHERE `email` ='$email' AND `senha` = '$senha' ");

		//se ele digitou errado ou não existe
		//metodo rowCount onde vai retornar os resultados.
		//if($sql-> rowCount() > 0 ){
		if($sql-> rowCount() > 0 ){

		//se ele digitou tudo certo vai pegar o id e salvar na sessão
			//tornou dado em um array
			$dado = $sql->fetch();
			$_SESSION['id'] = $dado['id'];

			header("Location:index.php");

		}

	} catch(PDOException $e){
		echo "Falhou: ".$e->getMessage();
	} 
	

}


?>

<html lang="pt-br">
<head>
 
	<meta charset="utf-8"/>
	<title>Projeto Beaba</title>
	<link rel="stylesheet" type="text/css" href="CSS/estilos1.css">

	<head>
		<div id ="corpo-form">

			<h1 style = "font-family: Monaco"> Beaba Sistema de Login </h1>
			<form method = "POST">

				<!-- E-mail:<br/> -->
				<input type="email" placeholder="Email" name = "email" />

				<!-- Senha:<br/> -->
				<input type="password" placeholder="Senha" name="senha" />

			
				
					<button  type="submit">Entrar</button>
					
					<a  href="cadastro.php" type="button" value="Cadastrar">Painel</a>
<div class="load"> <i class="fa fa-cog fa-spin fa-5x fa-fw"></i><span class="sr-only">Loading...</span> </div>



			</form>

			
		</div>
	</head>


	</html>
	<?php
//se o campo email e campo senha estiverem vazios  vai retornar uma mensagem

	if(isset($_POST['email']) && empty($_POST['senha']) ){
		?>
		<div class = "msg-erro">

			Preencha todos os campos
		</div>
		<?php
	}
	?>