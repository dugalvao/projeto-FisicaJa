<?php
	include("conexao.php");
	
	$valor1 = $_GET['valor1'];
	$valor2 = $_GET['valor2'];
	$valor3 = $_GET['valor3'];
	$valor4 = $_GET['valor4'];
	
	$conexaosql = mysqli_query($conectar, "INSERT INTO formula(valor1, valor2, valor3, valor4, valor5)
	VALUES ('$valor1', '$valor2', '$valor3', '$valor4', '')");
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Equação de Torriceli</title>
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
			<h3><?php echo "F =  $valor1 . ( | $valor2 | . | $valor3 | ) / $valor4 ²";?></h3><br/>
			<?php $util1 = $valor4 * $valor4 ;
				  if($valor2 < 0 ){
					  $valor2 = $valor2 * -1;
				  }
				  if($valor3 < 0 ){
					  $valor3 = $valor3 * -1;
				  }
				  ;?>
			<h3><?php echo "F =  $valor1 . ( $valor2 . $valor3 ) / $util1";?></h3><br/>
			<?php $util2 = $valor2 * $valor3 ;?>
			<h3><?php echo "F = $valor1 . $util2 / $util1";?></h3><br/>
			<?php $util3 = $valor1 * $util2 ;?>
			<h3><?php echo "F = $util3 / $util1";?></h3><br/>
			<h3><?php echo "F = " . $util3 / $util1 . "";?></h3><br/>

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