<?php
	include("conexao.php");
	
	$valor1 = $_GET['valor1'];
	$valor2 = $_GET['valor2'];
	$valor3 = $_GET['valor3'];
	$resultado = $valor1 - ($valor2 * $valor3);
	$conexaosql = mysqli_query($conectar, "INSERT INTO formula(valor1, valor2, valor3, valor4, valor5)
	VALUES ('$valor1', '$valor2', '$valor3', '', '')");
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>MRU</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/formula.css">
    </head>
    <body>
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  			<!-- Brand -->
  			<a class="navbar-brand" href="#"><img src="img/logo.png" alt="logo" style="width:40px;"></a>

  			<!-- Links -->
  			<ul class="navbar-nav">
    			<li class="nav-item">
      				<a class="nav-link" href="paginaInicial.html">Início</a>
    			</li>
    			<!-- Dropdown -->
    			<li class="nav-item dropdown ">
      				<a class="nav-link dropdown-toggle " href="#" id="navbardrop" data-toggle="dropdown">
        				Ensino Médio
      				</a>
      				<div class="dropdown-menu">
        				<a class="dropdown-item" href="#">1° Série</a>
        				<a class="dropdown-item" href="#">2° Série</a>
        				<a class="dropdown-item" href="#">3° Série</a>
      				</div>
    			</li>
  			</ul>
		</nav> 
		<div class="container col-12 col-sm-12 col-md-10 col-xl-10">
			<h3><?php echo "So = $valor1 -  $valor2 x $valor3";?></h3><br/>
			<h3><?php echo "So = $valor1 - " .($valor2 * $valor3);?></h3>
			<h3><?php echo "So = $resultado";?></h3>
			<a href="">
				<button type="button" class="btn btn-lg">Salvar</button><br/>
			</a>
			
		</div>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="jquery/dist/jquery.js"></script>
        <script src="popper.js/dist/popper.js"></script>
        <script src="js/bootstrap.js"></script>
        
    </body>
</html>