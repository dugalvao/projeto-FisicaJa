<!DOCTYPE html>
<?php
	session_start();
	include("conexao.php");
?>
<html lang="pt-br">
    <head>
        <title>MRU</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
       
		<link rel="stylesheet" href="css/estilo.css">
		<link rel="stylesheet" href="css/fontello.css">
		<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> -->
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
        				<?php echo "Olá, " .$_SESSION['name_user']; ?>
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
			<h2  class="p-3" id="h2formulas">Campo Elétrico</h2><br/>
			<div class="container col-12 col-sm-12 col-md-10 col-xl-10" id="divsBorder">
				<div  class="container col-12 col-sm-12 col-md-10 col-xl-10"  id="txtDestaque3">
					<center><strong>CLIQUE NA GRANDEZA QUE DESEJA DESCOBRIR!</strong></center>
				</div>
				<center>
					<h4 id="formulaSemHover">
					<a href="CampEletr1.php" id="formula">E</a> = <a href="#" id="formula">( K</a> . 
					<a href="CampEletr3.php" id="formula"> q )</a> / <a href="CampEletr4.php" id="formula"> D² </a>
					</h4>
				</center>
			</div>
			<div class="container col-12 col-sm-12 col-md-10 col-xl-10" id="divs">
					<!-- <img src="img/gifAlbert.gif" alt="Gif" height="145" width="75" align="left"> -->
					<h4 class="p-3" id="lembrete"> <strong> Não se esqueça, para E = (K.q)/D² temos:</strong><br/>
						<strong>E </strong><span class="icon-right" aria-hidden="true"></span> Newton por Coulomb (N/C)<br/>
						<strong>K </strong><span class="icon-right" aria-hidden="true"></span> Constante eletrostática (K (N.m²/C²)) <br/>
						<strong>q </strong><span class="icon-right" aria-hidden="true"></span>Carga (C)<br/>
						<strong>D </strong><span class="icon-right" aria-hidden="true"></span> Distância (m)<br/>
					</h4>
				<h4 id="text-conteudo">	
                    Os efeitos elétricos que ocorrem nas proximidades de cargas elétricas são atribuídos
                    à existência de um campo elétrico. Vejamos um exemplo concreto: se aproximarmos um 
                    dos nossos braços da tela de um televisor ligado, notaremos que seus pelos ficam
                    eriçados. Isso mostra que as cargas elétricas da tela do televisor geram um campo
                    elétrico. Uma esfera eletrizada também gera à sua volta um campo elétrico. Podemos
                    detectá-lo usando uma carga elétrica puntiforme 
					<br/><br/>
					<center><img src="img/tabelaForca.jpg" alt="Tabela dos Meios" height="400" width="400" class="img-thumbnail"></center><br/><br/><br/><br/>
				</h4><br/>
				Fonte: SAMPAIO, J. L.; CALÇADA, C. S. Física. Volume único. 2ª edição. São Paulo: Atual, 2005.
			</div>	
		</div><br/>
		
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="jquery/dist/jquery.js"></script>
        <!-- <script src="popper.js/dist/popper.js"></script> -->
        <script src="js/bootstrap.js"></script>
        
    </body>
</html>