<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Calor Específico</title>
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
			<h2><strong>Q</strong> = n . e </h2>
			<form method="GET" action="CargaEletricag1.php">
				<center>
				<h3><b>Q = <input type="number" name="valor1" placeholder="n"  required="required"> . e </h3></br>
				<button type="submit" class="btn btn-lg">Resolver</button>
				</center>
			</form>
		</div><br/>
		
		
       
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="jquery/dist/jquery.js"></script>
        <script src="popper.js/dist/popper.js"></script>
        <script src="js/bootstrap.js"></script>
        
    </body>
</html>