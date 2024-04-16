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
	<title>Cadastro de Usuário</title>
</head>
<body>

	<div class="box">
		<h1>Cadastro de usuários</h1>
		<form action="php_action/verifica_usuario.php">
			<div class="form-group row">
				<label for="nome" class="col-sm-2 col-form-label">Nome</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="nome" id="nome" placeholder="Nome">
				</div>
			</div>
			<div class="form-group row">
				<label for="sobrenome" class="col-sm-2 col-form-label">Sobrenome</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="sobrenome" id="sobrenome" placeholder="Sobrenome">
				</div>
			</div>
			<div class="form-group row">
				<label for="email" class="col-sm-2 col-form-label">E-mail</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="email" id="email" placeholder="E-mail">
				</div>
			</div>
			<div class="form-group row">
				<label for="cpf" class="col-sm-2 col-form-label">CPF</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="cpf" id="cpf" placeholder="Nome">
				</div>
			</div>

			<div class="form-group row">
				<div class="form-check">
					<label for="sexo" class="col-sm-2 col-form-label">Sexo</label>
					<input type="radio" class="form-check-input" id="radio1" name="optradio" value="option1" checked>Option 1
					<label class="form-check-label" for="radio1"></label>
				</div>
				<div class="form-check">
					<input type="radio" class="form-check-input" id="radio2" name="optradio" value="option2">Option 2
					<label class="form-check-label" for="radio2"></label>
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
