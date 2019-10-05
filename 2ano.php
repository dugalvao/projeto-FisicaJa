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
  			<img src="img/logo.png" alt="logo" style="width:40px;">

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
		</nav><br/><br/>
		<div class="container col-12 col-sm-12 col-md-10 col-xl-10 p-3 mt-3">
		<h2 class="p-3">Escalas termométricas</h2>
			<center>
				<h1 class="p-3">Tc / 5 = (Tf - 32) / 9</h1>
				<h1 class="p-3">(Tk - 273) / 5 = (Tf - 32) / 9</h1>
				<h1 class="p-3">Tk= Tc + 273,15</h1>
			</center>
			<div class="container-fluid">
				<a href="EscTerm.php?id=<?php $id_cookie = $_COOKIE['pega_id']; echo $id_cookie;?>" class="btn btn-lg btn-block w-100 " style="text-decoration:none; color:black; background-color:#9bcd9b;">
					Ver mais
				</a>
			</div>
		</div><br/>
		</div><br/>
		<div class="container col-12 col-sm-12 col-md-10 col-xl-10 p-3 mt-3">
		<h2 class="p-3">Calorimetria - calor específico</h2>
			<center>
			<h1 class="p-3">c = Q / (m . ((t - to))</h1>
			</center>
			<div class="container-fluid">
				<a href="CalorEsp.php?id=<?php $id_cookie = $_COOKIE['pega_id']; echo $id_cookie;?>" class="btn btn-lg btn-block w-100 " style="text-decoration:none; color:black; background-color:#9bcd9b;">
					Ver mais
				</a>
			</div>
		</div>
		
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="jquery/dist/jquery.js"></script>
        <script src="popper.js/dist/popper.js"></script>
        <script src="js/bootstrap.js"></script>
        
    </body>
</html>