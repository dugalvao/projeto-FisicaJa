<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Calsius</title>
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
			<h2>Farenhit para <strong>Celsius</strong></h2>
			<form method="GET" action="EscTermCF.php">
				<center>
				<h3><b>C / 5 = <input type="number" name="valor1" placeholder="F"  required="required"> - 32 / 9</b></h3>
				<button type="submit" class="btn btn-lg">Resolver</button>
				</center>
			</form>
		</div><br/>
		<div class="container col-12 col-sm-12 col-md-10 col-xl-10">
			<h2>Kelvin para <strong>Celsius</strong></h2>
			<form method="GET" action="EscTermCK.php">
				<center>
				<h3><b>C / 5 = <input type="number" name="valor1" placeholder="K"  required="required"> - 273 / 5</b></h3>
				<button type="submit" class="btn btn-lg">Resolver</button>
				</center>
			</form>
		</div><br/>
		<div class="container col-12 col-sm-12 col-md-10 col-xl-10">
			<h2>Celsius para <strong>Farenhit</strong></h2>
			<form method="GET" action="EscTermFC.php">
				<center>
				<h3><b>F - 32 / 9 = <input type="number" name="valor1" placeholder="C"  required="required"> / 5</b></h3>
				<button type="submit" class="btn btn-lg">Resolver</button>
				</center>
			</form>
		</div><br/>
		<div class="container col-12 col-sm-12 col-md-10 col-xl-10">
			<h2>Kelvin para <strong>Farenhit</strong></h2>
			<form method="GET" action="EscTermFK.php">
				<center>
				<h3><b>F - 32 / 9 = <input type="number" name="valor1" placeholder="K"  required="required"> - 273 / 5</b></h3>
				<button type="submit" class="btn btn-lg">Resolver</button>
				</center>
			</form>
		</div><br/>
		<div class="container col-12 col-sm-12 col-md-10 col-xl-10">
			<h2>Calsius para <strong>Kelvin</strong></h2>
			<form method="GET" action="EscTermKC.php">
				<center>
				<h3><b>K - 273 / 5 = <input type="number" name="valor1" placeholder="C"  required="required"> / 5</b></h3>
				<button type="submit" class="btn btn-lg">Resolver</button>
				</center>
			</form>
		</div><br/>
		<div class="container col-12 col-sm-12 col-md-10 col-xl-10">
			<h2>Farenhit para <strong>Kelvin</strong></h2>
			<form method="GET" action="EscTermKF.php">
				<center>
				<h3><b>k - 273 / 5 = <input type="number" name="valor1" placeholder="F"  required="required"> - 32 / 9</b></h3>
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