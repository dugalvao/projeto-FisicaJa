<?php
    include("conexao.php");
	session_start();
?>
<!doctype html>
<html lang="pt-br">
    <head>
        <title>Física Já</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/estilo.css">
    </head>
    <body>
	<div class="container-fluid col-10 col-sm-10 col-md-10 col-xl-10 p-3 mt-3">
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top" id="menu">
            <!-- Brand -->

            <img src="img/logo.png" alt="logo" style="width:40px;">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Início</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="criadores.html">Criadores</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Cadastro.php">Cadastrar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Entrar</a>
                    </li>
                </ul>
            </div>
            
        </nav>
    </div><br/>

		<br/>
		<div  class="container-fluid col-12 col-sm-12 col-md-10 col-xl-10 p-2 mt-2">
			<center>
				<form id="login" name="formteste" method="POST" action="validalogin.php">
					<br/>
					<strong><h4 class="mt-2" id="aviso">DIGITE SEU E-MAIL E SENHA</h4></strong><br/>
                    <h4 class="mt-2" id="aviso2">E-mail:</h4>
					<p><input id="inputBox" type="email"class="col-10 col-sm-10 col-md-10 col-xl-10" name="email" placeholder="Digite seu e-mail..." required="required"/></p><br/>
                    <h4 class="mt-2" id="aviso2">Senha:</h4>
					<p><input id="inputBox" type="password" class="col-10 col-sm-10 col-md-10 col-xl-10" name="senha" placeholder="Digite sua senha..." required="required"/></p><br/>
					<p><input id="btnlogin" type="submit" class="btn btn-outline-secondary col-10 col-sm-10 col-md-10 col-xl-10" name="btnLogin" value="Entrar"></p>
					
					<?php if(isset($_SESSION['loginErro'])){?>
						<div class="p-3 mt-3 alert alert-danger alert-dismissible ">
						<p class="text-center text-danger">
							<?php echo $_SESSION['loginErro'];
							unset($_SESSION['loginErro']); ?>
					<?php }?>
					</p>
					</button>
					</div>
				</form>
				
				
			</center>
        </div>
		<footer class="page-footer font-small blue pt-4 fixed-bottom">
            <div class="footer-copyright text-center p-2">
                © 2019 Copyright: Física Já
            </div>
        </footer>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="jquery/dist/jquery.js"></script>
        <script src="popper.js/dist/popper.js"></script>
        <script src="js/bootstrap.js"></script>
        
    </body>
</html>