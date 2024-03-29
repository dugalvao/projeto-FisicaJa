<!DOCTYPE html>
<?php
 session_start();
 include("conexao.php");
?>
<html lang="pt-br">
    <head>
        <title>Calorimetria - Calor Específico</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/estilo.css">
		<link rel="stylesheet" href="css/fontello.css">
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
					  	<span class="icon-user-female" aria-hidden="true"></span>
        				<?php
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
			<h2 class="p-3" id="h2formulas">Calorimetria - Calor Específico</h2><br/>
			<div class="container col-12 col-sm-12 col-md-10 col-xl-10" id="divsBorder">
				<div  class="container col-12 col-sm-12 col-md-10 col-xl-10"  id="txtDestaque3">
					<center><strong>CLIQUE NA GRANDEZA QUE DESEJA DESCOBRIR!</strong></center>
				</div>
				<center>
					<h4 id="formulaSemHover">
					<a href="CalorEspr1.php" id="formula">C</a> = 
					<a href="CalorEspr2.php" id="formula" >Q</a> /[
					<a href="CalorEspr3.php" id="formula" >m</a>.(
					<a href="CalorEspr4.php" id="formula">t</a>-
					<a href="CalorEspr5.php" id="formula" >to</a>)]
					</h4>
				<center>
			</div><br/>
			<div class="container col-12 col-sm-12 col-md-10 col-xl-10">
				<!--<img src="img/gifAlbert.gif" alt="Gif" height="145" width="75" align="left"> -->
				<h4> <strong> Não se esqueça, para c = Q/[m.(t-to)]:</strong><br/>
					<strong>c </strong><span class="icon-right" aria-hidden="true"></span> cal/g.°C ou J/Kg.K <br/>
					<strong>Q </strong><span class="icon-right" aria-hidden="true"></span> cal ou J <br/>
					<strong>m </strong><span class="icon-right" aria-hidden="true"></span> g ou Kg<br/>
					<strong>t </strong><span class="icon-right" aria-hidden="true"></span> °C ou K<br/>
					<strong>to </strong><span class="icon-right" aria-hidden="true"></span> °C ou K<br/>
				</h4>
				<br/>
				<h4 id="text-conteudo">
					O calor específico é igual à quantidade de calor necessária para elevar 1 unidade a temperatura de 
					1 unidade de massa do material. A experiência mostra que em corpos constituídos de um único material,
					a capacidade térmica é proporcional à massa do corpo: C = c.m, onde a constante de proporcionalidade
					c é uma característica do material; isto é, para cada material um valor de c. Essa constante é chamada 
					calor específico do material. Como Q = C.(t-to), obtermos e equação do calor específico.
				</h4><br/><br/>
				Fonte: SAMPAIO, J. L.; CALÇADA, C. S. Física. Volume único. 2ª edição. São Paulo: Atual, 2005.
			</div>
				
		</div><br/>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="jquery/dist/jquery.js"></script>
        <script src="popper.js/dist/popper.js"></script>
        <script src="js/bootstrap.js"></script>
        
    </body>
</html>