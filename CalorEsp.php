<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Calorimetria - Calor Específico</title>
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
    			<!-- Dropdown -->
    			<li class="nav-item dropdown ">
      				<a class="nav-link dropdown-toggle " href="#" id="navbardrop" data-toggle="dropdown">
        				Ensino Médio
      				</a>
      				<div class="dropdown-menu">
        				<a class="dropdown-item" href="1ano.php?id=<?php $id_cookie = $_COOKIE['pega_id']; echo $id_cookie;?>">1° Série</a>
        				<a class="dropdown-item" href="2ano.php?id=<?php $id_cookie = $_COOKIE['pega_id']; echo $id_cookie;?>">2° Série</a>
        				<a class="dropdown-item" href="3ano.php?id=<?php $id_cookie = $_COOKIE['pega_id']; echo $id_cookie;?>">3° Série</a>
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
		</nav><br/><br/>
		<div class="container col-12 col-sm-12 col-md-10 col-xl-10">
			<h2 class="p-3 m-3">Calorimetria - Calor Específico</h2><br/>

			<div class="container col-12 col-sm-12 col-md-10 col-xl-10">
				<img src="img/gifAlbert.gif" alt="Gif" height="145" width="75" align="left">
				<h4> <strong> Não se esqueça, para c=Q/(m.(t-to)):</strong><br/>
					<strong>c </strong><img src="img/seta.jpg" alt="Seta verde" height="15" width="25"> cal/g.°C ou J/Kg.K <br/>
					<strong>Q </strong><img src="img/seta.jpg" alt="Seta verde" height="15" width="25"> cal ou J <br/>
					<strong>m </strong><img src="img/seta.jpg" alt="Seta verde" height="15" width="25"> g ou Kg<br/>
					<strong>t </strong> <img src="img/seta.jpg" alt="Seta verde" height="15" width="25"> °C ou K<br/>
					<strong>to </strong> <img src="img/seta.jpg" alt="Seta verde" height="15" width="25"> °C ou K<br/>
				</h4>
				<br/>
				<h4>
					O calor específico é igual à quantidade de calor necessária para elevar 1 unidade a temperatura de 
					1 unidade de massa do material. A experiência mostra que em corpos constituídos de um único material,
					a capacidade térmica é proporcional à massa do corpo: C = c.m, onde a constante de proporcionalidade
					c é uma característica do material; isto é, para cada material um valor de c. Essa constante é chamada 
					calor específico do material. Como Q = C.(t-to), obtermos e equação do calor específico.
				</h4><br/><br/>
				Fonte: SAMPAIO, J. L.; CALÇADA, C. S. Física. Volume único. 2ª edição. São Paulo: Atual, 2005.
			</div>
				<h2 class="p-3 m-3">Qual grandeza você quer descobrir?</h2><br/>
				<div class="container col-12 col-sm-12 col-md-10 col-xl-10">
					<center><h3 class="p-2 mt-2"><a href="MRUg1.html" id="grandeza" style="text-decoration:none; color:black;">C</a> = 
					<a href="MRUg2.html" id="grandeza" style="text-decoration:none; color:black;">Q</a> /(
					<a href="MRUg1.html" id="grandeza" style="text-decoration:none; color:black;">m</a>.(<a href="MRUg1.html" id="grandeza" style="text-decoration:none; color:black;">t</a>-
					<a href="MRUg1.html" id="grandeza" style="text-decoration:none; color:black;">to</a>)
					</h3><center>
				</div>
				</div>
				
		</div><br/>
		
		
       
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="jquery/dist/jquery.js"></script>
        <script src="popper.js/dist/popper.js"></script>
        <script src="js/bootstrap.js"></script>
        
    </body>
</html>