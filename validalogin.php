<?php
	include("conexao.php");
	session_start();
	
	
		if((isset ($_POST['email'])) && (isset($_POST['senha']))){
			$usuario = mysqli_real_escape_string($conectar, $_POST['email']); //Escapar de caracteres especiais, como aspas, prevenindo SQL injection
			$senha = mysqli_real_escape_string($conectar, $_POST['senha']);
			
			
			//Buscar na tabela usuario o usuário que corresponde com os dados digitado no formulário
			$sqlselect = "SELECT * FROM usuario WHERE email_usuario = '$usuario' && senha_usuario = '$senha' LIMIT 1";
			$result = mysqli_query($conectar, $sqlselect);
			$resultado = mysqli_fetch_assoc($result);
			
			
			if(empty($resultado)){
				//se resultado for vazio
				$_SESSION['loginErro'] = 'Usuário ou senha inválido';
				header("Location: login.php");
			}elseif(isset($resultado)){
				//se resultado for diferente de vazio
				//setcookie("pega_id",$resultado['id_usuario']);
				//esse código serve para pegar cookie 
				$_SESSION['id_user'] = $resultado['id_usuario'];
				$_SESSION['name_user'] = $resultado['nome_usuario'];
				$_SESSION['sobrenome_user'] = $resultado['sobrenome_usuario'];
				$_SESSION['email_user'] = $resultado ['email_usuario'];
				header("Location: listagem.php");
			
			}else{
				$_SESSION['loginErro'] = 'Usuário ou senha inválido.'; 
				header("Location: login.php");
			}
		}else{
			$_SESSION['loginErro'] = 'Usuário ou senha inválido.';
			header("Location: login.php");
		}
		
?>  