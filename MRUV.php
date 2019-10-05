<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>MRUV</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/listagem.css">
    </head>
    <body>
		<?php include("conexao.php");?>
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
  			<!-- Brand -->
  			<img src="img/logo.png" alt="logo" style="width:40px;">

  			<!-- Links -->
  			<ul class="navbar-nav">
    			<!-- Dropdown -->
    			<li class="nav-item dropdown ">
      				<a class="nav-link dropdown-toggle " href="#" id="navbardrop" data-toggle="dropdown">
        				Ensino Médio
      				</a>
      				<div class="dropdown-menu">
        				<a class="dropdown-item" href="1ano.php?id=<?php $id_cookie = $_COOKIE['pega_id']; echo $id_cookie;?>">1° Série</a>
        				<a class="dropdown-item" href="1ano.php?id=<?php $id_cookie = $_COOKIE['pega_id']; echo $id_cookie;?>">2° Série</a>
        				<a class="dropdown-item" href="1ano.php?id=<?php $id_cookie = $_COOKIE['pega_id']; echo $id_cookie;?>">3° Série</a>
						<a class="dropdown-item" href="listagem.php?id=<?php $id_cookie = $_COOKIE['pega_id']; echo $id_cookie;?>">Ver tudo</a>
      				</div>
    			</li>
				<li class="nav-item dropdown" id="nomeusuario">
      				<a class="nav-link dropdown-toggle " href="#" id="navbardrop" data-toggle="dropdown" >
        				<?php
						$id = $_GET["id"];
						$selectnome = mysqli_query($conectar, "select nome_usuario from usuario where id_usuario='$id'");
						$resultado = mysqli_fetch_array($selectnome);
						echo "Olá, " .$resultado["nome_usuario"];
					?>
      				</a>
      				<div class="dropdown-menu">
						<a class="dropdown-item" href="perfil.php?id=<?php $id_cookie = $_COOKIE['pega_id']; echo $id_cookie;?>">Ver perfil</a>
        				<a class="dropdown-item" href="sair.php">Sair</a>
      				</div>
    			</li>
  			</ul>
		</nav> 
		<br/>
		<div class="container col-12 col-sm-12 col-md-10 col-xl-10 p-3 mt-3">
		<h2  class="p-3">Movimento Retilíneo Uniforme (M.R.U.) - Velocidade Constante</h2><br/>
		<div class="container col-12 col-sm-12 col-md-10 col-xl-10">
			<div class="container col-10 col-sm-10 col-md-10 col-xl-10  p-3 mt-3" id="lembrete">
				<img src="img/gifAlbert.gif" alt="Gif" height="155" width="75" align="left">
				<h4> <strong> Não se esqueça, para S=So+Vo.t+½.a.t² temos:</strong><br/>
					<strong>S </strong><img src="img/seta.jpg" alt="Seta verde" height="15" width="25"> metros (m)<br/>
					<strong>So </strong><img src="img/seta.jpg" alt="Seta verde" height="15" width="25"> metros (m) <br/>
					<strong>Vo </strong><img src="img/seta.jpg" alt="Seta verde" height="15" width="25"> metros por segundo (m/s)<br/>
					<strong>t </strong> <img src="img/seta.jpg" alt="Seta verde" height="15" width="25"> segundos (s)<br/>
					<strong>a </strong> <img src="img/seta.jpg" alt="Seta verde" height="15" width="25"> metros por segundo ao quadrado (m/s²)<br/>
				</h4><br/>
			</div>
			<h4>
				O Movimento Retilíneo Uniformemente Variado (MRUV) é o movimento no qual a aceleração permanece constante.
				Considerando uma partícula em MRUV, com velocidade escalar V0, iniciando a contagem dos tempos (t0 = 0),
				a partícula apresenta a abscissa S0 (espaço inicial). Algum tempo depois, no instante t, a abscissa terá
				abscissa (ou espaço) S, com velocidade escalar V. Sendo "a" a aceleração escalar, obtemos a equação horária
				dos espaços (ou abscissas) para o MRUV. Ela nos fornece o espaço S num instante qualquer t.
			</h4><br/><br/><br/><br/>
			Fonte: SAMPAIO, J. L.; CALÇADA, C. S. Física. Volume único. 2ª edição. São Paulo: Atual, 2005.
		</div>
		<h2 class="p-3 mt-3">Qual grandeza da fórmula do MRUV você deseja descobrir?</h2><br/>
			<center><h3><a href="MRUVg1.html" id="grandeza" style="text-decoration:none; color:black;">S </a> = 
			<a href="MRUVg2.html" id="grandeza" style="text-decoration:none; color:black;">So</a> + 
			<a href="MRUVg3.html" id="grandeza" style="text-decoration:none; color:black;">Vo </a>.
			<a href="MRUVg4.html" id="grandeza" style="text-decoration:none; color:black;">t </a>+ 1/2 .
			<a href="MRUVg5.html" id="grandeza" style="text-decoration:none; color:black;">a</a> .
			<a href="MRUVg6.html" id="grandeza" style="text-decoration:none; color:black;">t²</h2></center><br/>
		</div><br/>
		
		
       
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="jquery/dist/jquery.js"></script>
        <script src="popper.js/dist/popper.js"></script>
        <script src="js/bootstrap.js"></script>
        
    </body>
</html>