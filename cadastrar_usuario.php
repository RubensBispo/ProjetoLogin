	<?php 

	include_once 'php_action/conexao_bd.php';

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
				<div class="form-check">
					<label for="sexo" class="col-sm-2 col-form-label">Sexo</label>
					<input type="radio" class="form-check-input" id="masculino" name="optsexo" value="m" checked>Masculino
					<label class="form-check-label" for="masculino"></label>
				</div>
				<div class="form-check">
					<input type="radio" class="form-check-input" id="feminino" name="optsexo" value="f">Feminino
					<label class="form-check-label" for="feminino"></label>
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
