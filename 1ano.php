<?php
include("conexao.php");
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Fórmulas</title>
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
		<div class="container col-12 col-sm-12 col-md-10 col-xl-10 p-3 mt-3" id="divs">
		<h2 class="p-3" id="h2formulas">Movimento Retilíneo Uniforme (M.R.U.) - Velocidade Constante</h2>
			<center>
			<h1 class="p-3"> S = So + V . t </h1>
			</center>
			<div class="container-fluid">
				<a href="MRU.php" class="btn btn-lg btn-block " id="vermais">
					Ver mais
				</a>
			</div>
		</div>
		<div class="container col-12 col-sm-12 col-md-10 col-xl-10  p-3 mt-3" id="divs">
		<h2 class="p-3" id="h2formulas">Movimento Retilíneo Uniformemente Variado (M.R.U.V.) - Aceleração Constante</h2>
			<center>
			<h1 class="p-3"> S = So + Vo . t + 1/2 . a . t² </h1>
			</center>
			<div class="container-fluid">
				<a href="MRUV.php" class="btn btn-lg btn-block w-100 " id="vermais">
					Ver mais
				</a>
			</div>	
		</div>
		<div class="container col-12 col-sm-12 col-md-10 col-xl-10 p-3 mt-3" id="divs">
		<h2 class="p-3" id="h2formulas">Equação horária da velocidade</h2>
			<center>
			<h1 class="p-3">V = Vo + a . t</h1>
			</center>
			<div class="container-fluid">
				<a href="EHV.php"   class="btn btn-lg btn-block w-100 " id="vermais">
					Ver mais
				</a>
			</div>
		</div><br/>
		<div class="container col-12 col-sm-12 col-md-10 col-xl-10 p-3 mt-3" id="divs">
		<h2 class="p-3" id="h2formulas">Equação de Torriceli</h2>
			<center>
			<h1 class="p-3">V² = Vo² + 2 . a . (So - S)</h1>
			</center>
			<div class="container-fluid">
				<a href="Torriceli.php" class="btn btn-lg btn-block w-100 " id="vermais">
					Ver mais
				</a>
			</div>
		</div><br/>
		
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="jquery/dist/jquery.js"></script>
        <script src="popper.js/dist/popper.js"></script>
        <script src="js/bootstrap.js"></script>
        
    </body>
</html>