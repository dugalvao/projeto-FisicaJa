<!DOCTYPE HTML>
<html lang="pt-br">
    <head>
        <title>Física Já</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/estilo.css">
    </head>
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
		
		<div class="container-fluid col-12 col-sm-12 col-md-10 col-xl-10 p-2 mt-2">
			<center>
				
				<form id="login" name="formteste" method="POST" action="cadastroInsert.php" class="p-2 mt-2">
					<br/>
					<strong><h4 class="mt-2" id="aviso"> PREENCHA TODOS OS CAMPOS: </h4></strong><br/>
                        <h4 class="mt-2" id="aviso2">Nome:</h4>
                        <p><input id="inputBox" class=" col-10 col-sm-10 col-md-10 col-xl-10" type="text" name="nomeU" placeholder="* Digite seu nome..." required="required"/></p>
					
                        <h4 class="mt-2" id="aviso2">Sobrenome:</h4>
                        <p><input id="inputBox"  class="col-10 col-sm-10 col-md-10 col-xl-10" type="text" name="sobrenomeU" placeholder="* Digite seu sobrenome..." required="required"/><p>
					
                        <h4 class="mt-2" id="aviso2">E-mail:</h4>
                        <p><input id="inputBox" class="col-10 col-sm-10 col-md-10 col-xl-10" type="email" name="emailU" placeholder="* Digite um e-mail..."required="required"/></p>
					
                        <h4 class="mt-2" id="aviso2">Senha:</h4>
                        <p><input id="inputBox" class="col-10 col-sm-10 col-md-10 col-xl-10"type="password" name="senhaU" placeholder="* Digite uma senha..."required="required"/></p><br/>
					    <p><input id="btncadastro" type="submit" class="btn btn-outline-secondary btn-block col-10 col-sm-10 col-md-10 col-xl-10" value="Cadastrar"></p>
				</form>
					
			</center>
        </div>
        <br/>
        <br/>
        <br/>
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