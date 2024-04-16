	<?php 

	include_once 'php_action/conexao_bd.php';

	//cabeçalho
	include_once 'includes/header.php';

	include_once 'includes/mensagem.php';

	?>

	<div class="box">
		<h1>Cadastro de usuários</h1>
		<form action="php_action/criar_usuario.php">
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
				<p>
					<label>
						<input name="sexo" id="sexo" type="radio" checked />
						<span>Maculino</span>
					</label>
				</p>
				<p>
					<label>
						<input name="sexo" id="sexo" type="radio" />
						<span>Feminino</span>
					</label>
				</p>
			</div>

			<div class="form-group row">
				<label for="senha" class="col-sm-2 col-form-label">Senha</label>
				<div class="col-sm-10">
					<input type="password" class="form-control" name="senha" id="senha" placeholder="Senha">
				</div>
			</div>

			<div class="form-group row">
				<div class="col-sm-10">
					<button type="submit" class="btn btn-primary">Cadastrar</button>
				</div>
			</div>
		</form>
	</body>
	</html>
