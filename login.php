<?php
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
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top" id="menu">
  			<!-- Brand/logo -->
  			<a class="navbar-brand" href="#">
    			<img src="img/logo.png" alt="logo" style="width:40px;">
  			</a>
  
  			<!-- Links -->
  			<ul class="navbar-nav">
    			<li class="nav-item">
      				<a class="nav-link" href="index.html">Início</a>
    			</li>
				<li class="nav-item">
      				<a class="nav-link" href="#">Criadores</a>
    			</li>
    			<li class="nav-item">
      				<a class="nav-link" href="login.php">Entrar</a>
    			</li>
    			<li class="nav-item">
      				<a class="nav-link" href="Cadastro.php">Cadastrar</a>
    			</li>
				
  			</ul>
		</nav>
		<br/><br/><br/>
		<div  class="container-fluid col-12 col-sm-12 col-md-10 col-xl-10 p-2 mt-2">
			<center>
				<form id="login" name="formteste" method="POST" action="validalogin.php">
					<br/>
					<p><input type="email" name="email" placeholder="E-mail..." required="required"/></p><br/>
					<p><input type="password" name="senha" placeholder="Senha..." required="required"/></p><br/>
					<input type="submit" class="btn btn-outline-secondary" name="btnLogin" value="Entrar">
					
					<?php if(isset($_SESSION['loginErro'])){?>
					<div class="p-3 mt-3 alert alert-danger alert-dismissible">
					<button type="button" class="close" data-dismiss="alert">&times;</button>
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
		
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="jquery/dist/jquery.js"></script>
        <script src="popper.js/dist/popper.js"></script>
        <script src="js/bootstrap.js"></script>
        
    </body>
</html>