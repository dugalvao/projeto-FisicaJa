<!DOCTYPE html>
<?php
 include("conexao.php"); 
 session_start();
?>
<html lang="pt-br">
    <head>
        <title>Torriceli</title>
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
		<div class="container col-12 col-sm-12 col-md-10 col-xl-10" id="divs">
			<br/>
			<h2 class="p-3 m-3" id="h2formulas">Equação de Torriceli</h2><br/>
			<div class="container col-12 col-sm-12 col-md-10 col-xl-10" id="divsBorder">
				<div  class="container col-12 col-sm-12 col-md-10 col-xl-10"  id="txtDestaque3">
					<center><strong>CLIQUE NA GRANDEZA QUE DESEJA DESCOBRIR!</strong></center>
				</div>
				<center>
					<h4 id="formulaSemHover">
					<a href="Torricelir1.php" id="formula"> V²</a> = <a href="Torricelir2.php" id="formula"> Vo² </a> + 2 . 
					<a href="Torricelir3.php" id="formula"> a </a> . (<a href="Torricelir4.php" id="formula"> S </a> -
					<a href="Torricelir5.php" id="formula"> So</a>)
					</h4>
				</center>
				
			</div><br/>
			<div class="container col-12 col-sm-12 col-md-10 col-xl-10">
				<!--<img src="img/gifAlbert.gif" alt="Gif" height="145" width="75" align="left">-->
				<h4> <strong> Não se esqueça, para V²=Vo²+2.a.(S - So) temos:</strong><br/>
					<strong>V </strong> <span class="icon-right" aria-hidden="true"></span>metros por segundo (m/s) <br/>
					<strong>Vo </strong><span class="icon-right" aria-hidden="true"></span> metros por segundo (m/s) <br/>
					<strong>a </strong> <span class="icon-right" aria-hidden="true"></span>metros por segundo ao quadrado (m/s²)<br/>
					<strong>S </strong><span class="icon-right" aria-hidden="true"></span> metros (m)<br/>
					<strong>So </strong><span class="icon-right" aria-hidden="true"></span> metros (m)<br/>
				</h4><br/>
				<h4 id="text-conteudo">
				Qualquer problema do MUV pode ser resolvido com as equações horárias da posição e da velocidade.
				No entanto, há problemas que podem ser resolvidos mais rapidamente usando uma outra equação, que
				relaciona a velocidade escalar com o espaço, sem envolver o tempo. Essa equação pode ser obtida 
				eliminando-se o tempo na equação horária da velocidade e substituindo na equação horária do espaço.
				Efetuando os cálculos, obtemos uma equação conhecida pelo nome de Equação de Torricelli.
				</h4><br/><br/><br/>
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