<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>MRU</title>
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
        				<a class="dropdown-item" href="2ano.php?id=<?php $id_cookie = $_COOKIE['pega_id']; echo $id_cookie;?>">2° Série</a>
        				<a class="dropdown-item" href="3ano.php?id=<?php $id_cookie = $_COOKIE['pega_id']; echo $id_cookie;?>">3° Série</a>
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
		</nav><br/>
		<div class="container col-12 col-sm-12 col-md-10 col-xl-10 p-3 mt-3">
			<h2  class="p-3">Movimento Retilíneo Uniforme (M.R.U.) - Velocidade Constante</h2><br/>

			<div class="container col-12 col-sm-12 col-md-10 col-xl-10">
				<div class="container col-10 col-sm-10 col-md-10 col-xl-10" id="lembrete">
					<img src="img/gifAlbert.gif" alt="Gif" height="145" width="75" align="left">
					<h4 class="p-3"> <strong> Não se esqueça, para S=So+V.t temos:</strong><br/>
						<strong>S </strong><img src="img/seta.jpg" alt="Seta verde" height="15" width="25"> metros (m)<br/>
						<strong>So </strong><img src="img/seta.jpg" alt="Seta verde" height="15" width="25"> metros (m) <br/>
						<strong>V </strong><img src="img/seta.jpg" alt="Seta verde" height="15" width="25"> metros por segundo (m/s)<br/>
						<strong>t </strong> <img src="img/seta.jpg" alt="Seta verde" height="15" width="25"> segundos (s)<br/>
					</h4>
				</div>
				<h4>
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
			<h2  class="p-3 mt-3">Qual grandeza você quer descobrir?</h2><br/>
				<center><h3 class="p-2 mt-2"><a href="MRUg1.1.php?id=<?php $id_cookie = $_COOKIE['pega_id']; echo $id_cookie;?>" id="grandeza" style="text-decoration:none; color:black;">S</a> = 
				<a href="MRUg2.2.php?id=<?php $id_cookie = $_COOKIE['pega_id']; echo $id_cookie;?>" id="grandeza" style="text-decoration:none; color:black;">So</a> 
				+ <a href="MRUg3.3.php?id=<?php $id_cookie = $_COOKIE['pega_id']; echo $id_cookie;?>" id="grandeza" style="text-decoration:none; color:black;">V</a> . 
				<a href="MRUg4.4.php?id=<?php $id_cookie = $_COOKIE['pega_id']; echo $id_cookie;?>"id="grandeza"style="text-decoration:none; color:black;">t</a></h3></center><br/>	
		</div><br/>
		
		
		
       
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="jquery/dist/jquery.js"></script>
        <script src="popper.js/dist/popper.js"></script>
        <script src="js/bootstrap.js"></script>
        
    </body>
</html>