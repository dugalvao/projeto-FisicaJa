<!DOCTYPE html>
<?php 
include("conexao.php");
session_start();
 ?>
<html lang="pt-br">
    <head>
        <title>Escala Termométrica</title>
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
		<div class="container col-12 col-sm-12 col-md-10 col-xl-10" id="divs">
			<h2 class="p-3 mt-3" id="h2formulas">Escala Termométrica</h2><br/>

			<div class="container col-12 col-sm-12 col-md-10 col-xl-10">
				<img src="img/gifAlbert.gif" alt="Gif" height="145" width="75" align="left">
				<h4> <strong> Não se esqueça:</strong><br/>
					<strong>C </strong><img src="img/seta.jpg" alt="Seta verde" height="15" width="25"> Celsius (°C) <br/>
					<strong>F </strong><img src="img/seta.jpg" alt="Seta verde" height="15" width="25"> Farenhit (F) <br/>
					<strong>K </strong><img src="img/seta.jpg" alt="Seta verde" height="15" width="25"> Kelvin (K) <br/>
					<strong>T </strong><img src="img/seta.jpg" alt="Seta verde" height="15" width="25"> temperatura <br/>
				</h4><br/>
				<h2 class="p-2 m-2" id="h2formulas">°C para K</h2><br/>
				<h4>
				A temperatura está relacionada com a agitação das moléculas de um corpo.
				Em 1848, o físico inglês William Thomson (1824-1907), também chamado lorde
				Kelvin, realizou experimentos que o levaram a concluir que a temperatura mais
				baixa possível seria -273,15 °C (o zero absoluto). Com base nisso propôs uma
				nova escala cujo zero seria essa temperatura mais baixa e cujo “tamanho do grau”
				seria idêntico ao tamanho do grau Celsius, isto é, uma variação de 1 grau na escala
				Kelvin corresponde a uma variação de 1 grau na escala Celsius. 
				</h4><br/><br/><br/>
				Fonte: SAMPAIO, J. L.; CALÇADA, C. S. Física. Volume único. 2ª edição. São Paulo: Atual, 2005.
				<h2 class="p-2 m-2" id="h2formulas">°C para F</h2><br/>
				<h4>
				Em países de língua inglesa é usada uma escala proposta pelo alemão Daniel Fahrenheit
				(1686-1736). Sob pressão de 1 atm, é atribuída a temperatura de 32 graus Fahrenheit 
				(32ºF) ao gelo fundente e 212ºF à agua em ebulição. O espaço entre esses dois pontos 
				é dividido em 180 partes iguais, cada um valendo 1ºF.
				</h4><br/><br/>
				Fonte: SAMPAIO, J. L.; CALÇADA, C. S. Física. Volume único. 2ª edição. São Paulo: Atual, 2005.
				<h2 class="p-2 m-2" id="h2formulas">F para K</h2><br/>
				<h4>
				A partir das relações entre as escalas Celsius e Kelvin e Celsius e Fahrenheit podemos obter
				uma relação direta entre as escalas ºF e K, de forma a facilitar os cálculos, ao invés de
				utilizar as duas fórmulas separadamente.
				</h4><br/><br/>
				Fonte: SAMPAIO, J. L.; CALÇADA, C. S. Física. Volume único. 2ª edição. São Paulo: Atual, 2005.
			</div>
				
				
				
		
		</div><br/>
		<div class="container col-12 col-sm-12 col-md-10 col-xl-10" id="divs">
		<h2 class="p-3 mt-3" id="h2formulas">Qual grandeza você quer descobrir?</h2><br/>
				<center><h3 class="p-2 mt-2"><a href="MRUg1.html" id="formula">Tk</a> = 
				<a href="MRUg2.html" id="formula">Tc</a> + 273,15 <center>
				
				<center><h3 class="p-2 mt-2"><a href="MRUg1.html" id="formula">Tc</a>/5 = (
				<a href="MRUg2.html" id="formula">Tf</a>- 32)/9 <center>
				
				<center><h3 class="p-2 mt-2"><a href="MRUg1.html" id="formula">(Tk</a>- 273)/5 = (
				<a href="MRUg2.html" id="formula">Tf</a>- 32)/9 <center>
		</div>
		
		
       
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="jquery/dist/jquery.js"></script>
        <script src="popper.js/dist/popper.js"></script>
        <script src="js/bootstrap.js"></script>
        
    </body>
</html>