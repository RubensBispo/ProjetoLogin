<?php 

include_once 'php_action/conexao_bd.php';

?>

<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		
		.box{
			margin: 0 auto; width: 50%;
			padding: 10px;
			margin-top: 30px;
		}


	</style>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--Import Google Icon Font-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<!--Import materialize.css-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<title>Login</title>
</head>
<body>

	<div class="box">
		<h1>Login</h1>
		<form action="php_action/verifica_usuario.php">
			<div class="form-group row">
				<label for="usuario" class="col-sm-2 col-form-label">Usuario</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="usuario" id="usuario" placeholder="Usuário">
				</div>
			</div>
			<div class="form-group row">
				<label for="senha" class="col-sm-2 col-form-label">Senha</label>
				<div class="col-sm-10">
					<input type="password" class="form-control" name="senha" id="senha" placeholder="Senha">
				</div>
			</div>

			<div class="form-group row">
				<div class="col-sm-10">
					<button type="submit" class="btn btn-primary">Entrar</button>
				</div>
			</div>
		</form>
	</body>
	</html>
