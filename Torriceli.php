<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Torriceli</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/listagem.css">
    </head>
    <body>
		<?php include("conexao.php"); ?>
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
  			<!-- Brand -->
  			<a class="navbar-brand" href="#"><img src="img/logo.png" alt="logo" style="width:40px;"></a>

  			<!-- Links -->
  			<ul class="navbar-nav">
    			
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
		</nav> <br/>
		<div class="container col-12 col-sm-12 col-md-10 col-xl-10">
			<br/>
			<h2 class="p-3 m-3">Equação de Torriceli</h2><br/>

			<div class="container col-12 col-sm-12 col-md-10 col-xl-10">
				<img src="img/gifAlbert.gif" alt="Gif" height="145" width="75" align="left">
				<h4> <strong> Não se esqueça, para V²=Vo²+2.a.(S - So) temos:</strong><br/>
					<strong>V </strong><img src="img/seta.jpg" alt="Seta verde" height="15" width="25"> metros por segundo (m/s) <br/>
					<strong>Vo </strong><img src="img/seta.jpg" alt="Seta verde" height="15" width="25"> metros por segundo (m/s) <br/>
					<strong>a </strong><img src="img/seta.jpg" alt="Seta verde" height="15" width="25"> metros por segundo ao quadrado (m/s²)<br/>
					<strong>S </strong> <img src="img/seta.jpg" alt="Seta verde" height="15" width="25"> metros (m)<br/>
					<strong>So </strong> <img src="img/seta.jpg" alt="Seta verde" height="15" width="25"> metros (m)<br/>
				</h4><br/>
				<h4>
				Qualquer problema do MUV pode ser resolvido com as equações horárias da posição e da velocidade.
				No entanto, há problemas que podem ser resolvidos mais rapidamente usando uma outra equação, que
				relaciona a velocidade escalar com o espaço, sem envolver o tempo. Essa equação pode ser obtida 
				eliminando-se o tempo na equação horária da velocidade e substituindo na equação horária do espaço.
				Efetuando os cálculos, obtemos uma equação conhecida pelo nome de Equação de Torricelli.
				</h4><br/><br/><br/>
				Fonte: SAMPAIO, J. L.; CALÇADA, C. S. Física. Volume único. 2ª edição. São Paulo: Atual, 2005.
			</div>
				<h2 class="p-3 m-3">Qual grandeza você quer descobrir?</h2><br/>
				<div class="container col-12 col-sm-12 col-md-10 col-xl-10">
				<center><h3 class="p-2 mt-2"><a href="MRUg1.html" id="grandeza" style="text-decoration:none; color:black;">V²</a> = 
				<a href="MRUg2.html" id="grandeza" style="text-decoration:none; color:black;">Vo²</a> 
				+ 2.<a href="MRUg3.html" id="grandeza" style="text-decoration:none; color:black;">a</a> . 
				(<a href="MRUg4.html"id="grandeza"style="text-decoration:none; color:black;">S</a> - 
				<a href="MRUg4.html"id="grandeza"style="text-decoration:none; color:black;">So</a>)
				</h3></center><br/>
				</div>	
		</div><br/>
		
		
       
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="jquery/dist/jquery.js"></script>
        <script src="popper.js/dist/popper.js"></script>
        <script src="js/bootstrap.js"></script>
        
    </body>
</html>