<?php

	session_start();

	include("conexao.php");
	
	$usuarioEmail = mysqli_real_escape_string($conectar, $_POST['emailU']);
	
	//Buscar na tabela usuario o usuário que corresponde com os dados digitado no formulário
	$sqlselect = "SELECT * FROM usuario WHERE email_usuario = '$usuarioEmail' LIMIT 1";
	$result = mysqli_query($conectar, $sqlselect);
	$resultadoConsulta = mysqli_fetch_assoc($result);

	$_SESSION['emailUser'] = $resultadoConsulta['email_usuario'];

	$nomeUsuario = $_POST["nomeU"];
	$sobrenomeUsuario = $_POST["sobrenomeU"];
	$emailUsuario = $_POST["emailU"];
	$senhaUsuario = $_POST["senhaU"];
	
	$select = mysqli_query($conectar, "select email_usuario from usuario");
	$resultado  = mysqli_fetch_array($select);

	if($emailUsuario === $_SESSION['emailUser'] ){
		// echo "<script language='javascript' type='text/javascript'> alert('Conta já existente. Tente novamente!');window.location.href='Cadastro.php';</script>";
		echo "<script type=\"text/javascript\">alert('Email já cadastrado, por favor fazer login utilizando seu email e senha!');window.location.href='Cadastro.php';</script>";
		
	}
	else{
		$conexaosql = mysqli_query($conectar, "INSERT INTO usuario(nome_usuario, sobrenome_usuario, email_usuario, senha_usuario)
		VALUES ('$nomeUsuario','$sobrenomeUsuario', '$emailUsuario', '$senhaUsuario')");
		
		$selectId = "SELECT id_usuario, nome_usuario FROM usuario ORDER BY id_usuario DESC LIMIT 1";
		$result = mysqli_query($conectar, $selectId);
		$result = mysqli_fetch_array($result); //s? essa linha? 
		/*$_SESSION['id_user'] = mysqli_fetch_assoc($result['id_usuario']);
		$_SESSION['name_usuario'] = mysqli_fetch_assoc($result['nome_usuario']);*/

		$_SESSION['id_user'] = $result['id_usuario'];
		$_SESSION['name_user'] = $result['nome_usuario'];

		echo "<script language='javascript' type='text/javascript'> alert('Cadastro feito com sucesso!');window.location.href='listagem.php';</script>";
		
	}
	
	// if(isset($conexaosql)){
	// 	echo "";
	// }
	// else($conexaosql){
	// 	echo "<script language='javascript' type='text/javascript'> alert('Cadastro feito com sucesso!');window.location.href='listagem.php';</script>";
	// }
	// else{
	// 	echo "<script language='javascript' type='text/javascript'> alert('Erro ao cadastrar. Tente novamente!');window.location.href='Cadastro.php';</script>";
	// } 

	
	
?>
