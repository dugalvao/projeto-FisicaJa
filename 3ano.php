<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Fórmulas</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/listagem.css">
    </head>
    <body>
		<?php include("conexao.php"); ?>
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
  			<!-- Brand -->
  			<a class="navbar-brand" href="#"><img src="img/logo.png" alt="logo" style="width:40px;"></a>

  			<!-- Links -->
  			<ul class="navbar-nav">
    			<!-- Dropdown -->
    			<li class="nav-item dropdown ">
      				<a class="nav-link dropdown-toggle " href="#" id="navbardrop" data-toggle="dropdown">
        				Ensino Médio
      				</a>
      				<div class="dropdown-menu">
        				<a class="dropdown-item" href="1ano.php?id=<?php $id_cookie = $_COOKIE['pega_id']; echo $id_cookie;?>">1° Série</a>
        				<a class="dropdown-item" href="2ano.php?id=<?php $id_cookie = $_COOKIE['pega_id']; echo $id_cookie;?>">2° Série</a>
        				<a class="dropdown-item" href="3ano.php?id=<?php $id_cookie = $_COOKIE['pega_id']; echo $id_cookie;?>">3° Série</a>
						<a class="dropdown-item" href="listagem.php?id=<?php $id_cookie = $_COOKIE['pega_id']; echo $id_cookie;?>">Ver tudo</a>
      				</div>
    			</li>
				<li class="nav-item dropdown" id="nomeusuario">
      				<a class="nav-link dropdown-toggle " href="#" id="navbardrop" data-toggle="dropdown" >
        				<?php
						$id = $_GET["id"];
						$selectnome = mysqli_query($conectar, "select nome_usuario from usuario where id_usuario='$id'");
						$resultado = mysqli_fetch_array($selectnome);
						echo "Olá, " .$resultado["nome_usuario"];
					?>
      				</a>
      				<div class="dropdown-menu">
						<a class="dropdown-item" href="perfil.php?id=<?php $id_cookie = $_COOKIE['pega_id']; echo $id_cookie;?>">Ver perfil</a>
        				<a class="dropdown-item" href="sair.php">Sair</a>
      				</div>
    			</li>
  			</ul>
		</nav><br/>
		
		<div class="container col-12 col-sm-12 col-md-10 col-xl-10  p-3 mt-3">
		<h2  class="p-3 mt-3">Carga elétrica</h2>
			<center>
			<h1 class="p-3 mt-3">Q = n . e</h1>
			</center>
			<a href="#" id="botao"  class="btn btn-lg btn-block w-100 " style="text-decoration:none; color:black; background-color:#9bcd9b;">
				Ver mais
			</a>	
		</div><br/>
		<div class="container col-12 col-sm-12 col-md-10 col-xl-10  p-3 mt-3">
		<h2 class="p-3 mt-3">Força eletrostática (Lei de Coulomb)</h2>
			<center>
			<h1 class="p-3 mt-3">F = (K . (|Q1| . |Q2|)) / D²</h1>
			</center>
			<a href="#" id="botao"  class="btn btn-lg btn-block w-100 " style="text-decoration:none; color:black; background-color:#9bcd9b;">
				Ver mais
			</a>	
		</div><br/>
		<div class="container col-12 col-sm-12 col-md-10 col-xl-10 p-3 mt-3">
		<h2 class="p-3 mt-3">Campo elétrico</h2>
			<center>
			<h1>E = (K . q)/ D²</h1>
			</center>
			<a href="#" id="botao"  class="btn btn-lg btn-block w-100 " style="text-decoration:none; color:black; background-color:#9bcd9b;">
				Ver mais
			</a>	
		</div><br/>
		<div class="container col-12 col-sm-12 col-md-10 col-xl-10 p-3 mt-3">
		<h2 class="p-3 mt-3">Potencial elétrico</h2>
			<center>
			<h1 class="p-3 mt-3">V = (K . q)/ D</h1>
			</center>
			<a href="#" id="botao"  class="btn btn-lg btn-block w-100 " style="text-decoration:none; color:black; background-color:#9bcd9b;">
				Ver mais
			</a>	
		</div><br/>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="jquery/dist/jquery.js"></script>
        <script src="popper.js/dist/popper.js"></script>
        <script src="js/bootstrap.js"></script>
        
    </body>
</html>