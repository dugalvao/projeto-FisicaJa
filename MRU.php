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
			<h2  class="p-3" id="h2formulas">Movimento Retilíneo Uniforme (M.R.U.) - Velocidade Constante</h2><br/>
			<div class="container col-12 col-sm-12 col-md-10 col-xl-10" id="divsBorder">
				<div  class="container col-12 col-sm-12 col-md-10 col-xl-10"  id="txtDestaque3">
					<center><strong>CLIQUE NA GRANDEZA QUE DESEJA DESCOBRIR!</strong></center>
				</div>
				<center>
					<h4 id="formulaSemHover">
					<a href="MRUr1.php" id="formula"> S </a> = <a href="MRUr2.php" id="formula"> So </a> + 
					<a href="MRUr3.php" id="formula"> V </a> . <a href="MRUr4.php" id="formula"> t </a>
					</h4>
				</center>
			</div>
			<div class="container col-12 col-sm-12 col-md-10 col-xl-10" id="divs">
					<!-- <img src="img/gifAlbert.gif" alt="Gif" height="145" width="75" align="left"> -->
					<h4 class="p-3" id="lembrete"> <strong> Não se esqueça, para S=So+V.t temos:</strong><br/>
						<strong>S </strong><span class="icon-right" aria-hidden="true"></span> metros (m)<br/>
						<strong>So </strong><span class="icon-right" aria-hidden="true"></span> metros (m) <br/>
						<strong>V </strong><span class="icon-right" aria-hidden="true"></span>metros por segundo (m/s)<br/>
						<strong>t </strong><span class="icon-right" aria-hidden="true"></span> segundos (s)<br/>
					</h4>
				<h4 id="text-conteudo">	
					O Movimento Retilíneo Uniforme (MRU) é o movimento no qual a velocidade permanece constante.
					Considerando uma partícula em MRU, com velocidade escalar V (que pode ser positiva ou negativa)
					e iniciando a contagem dos tempos (t0 = 0), a partícula apresenta a abscissa S0 (espaço inicial).
					Algum tempo depois, no instante t, a abscissa terá abscissa (ou espaço) S. Como o movimento é 
					uniforme, a velocidade instantânea coincide com a velocidade média num intervalo de tempo qualquer.
					Assim, obtemos a equação horária dos espaços (ou abscissas) para o MRU. Ela nos fornece o espaço S 
					num instante qualquer t.<br/><br/>
					<center><img src="img/mru.gif" alt="Gif" height="200" width="400" class="img-thumbnail"></center><br/><br/><br/><br/>
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