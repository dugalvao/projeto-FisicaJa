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
			<h2><strong>F</strong> =  K . ( |Q1| . |Q2| ) / D²</h2>
			<form method="GET" action="ForcEletrog1.php">
				<center>
				<h3><b>F = <input type="number" name="valor1" placeholder="K"  required="required"> . ( | 
				<input type="number" name="valor2" placeholder="Q1"  required="required">| ) . ( |
				<input type="number" name="valor3" placeholder="Q2"  required="required">| ) /
				<input type="number" name="valor4" placeholder="D"  required="required">² </b></h3>
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