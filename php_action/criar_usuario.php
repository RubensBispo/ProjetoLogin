<?php 

session_start();

require_once 'conexao_bd.php';

if (isset($_POST['btn-cadastrar'])) {

	//sanitização

	$nome = mysqli_escape_string($connection,$_POST['nome']);
	$sobrenome = mysqli_escape_string($connection,$_POST['sobrenome']);
	$email = mysqli_escape_string($connection,$_POST['email']);
	$cpf = mysqli_escape_string($connection,$_POST['cpf']);
	$sexo = mysqli_escape_string($connection,$_POST['sexo']);
	$usuario = mysqli_escape_string($connection,$_POST['usuario']);
	$senha = mysqli_escape_string($connection,$_POST['senha']);
	/*
	$consulta = "SELECT * FROM pessoa where email = $email";

	if (mysqli_query($connection,$consulta))
	{
		$_SESSION['mensagem'] = "Usuário já é cadastrado";			

		header('Location: ../login.php');
	}
	else{*/

		$sql = "INSERT INTO pessoa(nome,sobrenome,email,cpf,sexo,usuario,senha)VALUES('$nome','$sobrenome','$email','$cpf','$sexo','$usuario','$senha')";

		if(mysqli_query($connection, $sql)) {

			$_SESSION['mensagem'] = "Usuário cadastrado com sucesso.";

			header('Location: ../login.php');
		}
		else{

			$_SESSION['mensagem'] = "Erro ao cadastrar usuário.";

			header('Location: ../index.php');	
		}
}