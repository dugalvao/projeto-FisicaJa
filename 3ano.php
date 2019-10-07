<!DOCTYPE html>
<?php
	session_start();
	include("conexao.php");
?>
<html lang="pt-br">
    <head>
        <title>Fórmulas</title>
        <meta charset="utf-8">
		<!-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> -->
		<meta name="viewport" content="width=device-width, user-scalable=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/estilo.css">
		<script src="jquery/dist/jquery.js"></script>
        <script src="popper.js/dist/popper.js"></script>
        <script src="js/bootstrap.js"></script>
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
				<li class="nav-item dropdown ">
      				<a class="nav-link dropdown-toggle " href="#" id="navbardrop" data-toggle="dropdown">
        				Ensino Médio
      				</a>
      				<div class="dropdown-menu">
        				<a class="dropdown-item" href="1ano.php">1° Série</a>
        				<a class="dropdown-item" href="2ano.php">2° Série</a>
        				<a class="dropdown-item" href="3ano.php">3° Série</a>
      				</div>
    			</li>
				<li class="nav-item dropdown" id="nomeusuario">
      				<a class="nav-link dropdown-toggle " href="#" id="navbardrop" data-toggle="dropdown" >
        				<?php
						//$id = $_GET["id"];
						//$selectnome = mysqli_query($conectar, "select nome_usuario from usuario where id_usuario='$id'");
						//$resultado = mysqli_fetch_array($selectnome);
						//echo "Olá, " .$resultado["nome_usuario"];
						echo "Olá, " .$_SESSION['name_user'];
					?>
      				</a>
      				<div class="dropdown-menu">
						<a class="dropdown-item" href="perfil.php">Ver perfil</a>
        				<a class="dropdown-item" href="sair.php">Sair</a>
      				</div>
    			</li>
                </ul>
            </div>

        </nav>
    </div><br/>
		
		<div class="container col-12 col-sm-12 col-md-10 col-xl-10  p-3 mt-3" id="divs">
		<h2  class="p-3 mt-3" id="h2formulas">Carga elétrica</h2>
			<center>
			<h1 class="p-3 mt-3">Q = n . e</h1>
			</center>
			<a href="#" id="vermais"  class="btn btn-lg btn-block w-100 ">
				Ver mais
			</a>	
		</div><br/>
		<div class="container col-12 col-sm-12 col-md-10 col-xl-10  p-3 mt-3" id="divs">
		<h2 class="p-3 mt-3" id="h2formulas">Força eletrostática (Lei de Coulomb)</h2>
			<center>
			<h1 class="p-3 mt-3" id="textoCentro">F = (K . (|Q1| . |Q2|)) / D²</h1>
			</center>
			<a href="#" id="vermais"  class="btn btn-lg btn-block w-100 ">
				Ver mais
			</a>	
		</div><br/>
		<div class="container col-12 col-sm-12 col-md-10 col-xl-10 p-3 mt-3" id="divs">
		<h2 class="p-3 mt-3" id="h2formulas">Campo elétrico</h2>
			<center>
			<h1>E = (K . q)/ D²</h1>
			</center>
			<a href="#" id="vermais"  class="btn btn-lg btn-block w-100 ">
				Ver mais
			</a>	
		</div><br/>
		<div class="container col-12 col-sm-12 col-md-10 col-xl-10 p-3 mt-3" id="divs">
		<h2 class="p-3 mt-3" id="h2formulas">Potencial elétrico</h2>
			<center>
			<h1 class="p-3 mt-3">V = (K . q)/ D</h1>
			</center>
			<a href="#" id="vermais"  class="btn btn-lg btn-block w-100 ">
				Ver mais
			</a>	
		</div><br/>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        
        
    </body>
</html>