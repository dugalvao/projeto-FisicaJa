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
        <link rel="stylesheet" href="css/form.css">
		
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="jquery/dist/jquery.js"></script>
        <!-- <script src="popper.js/dist/popper.js"></script> -->
        <script src="js/bootstrap.js"></script>
		
		<script src="http://jqueryvalidation.org/files/dist/jquery.validate.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/localization/messages_pt_BR.min.js"></script>
		<script type="text/javascript"> 
		$(document).ready(function() {

			//VALIDACAO DO FORMULARIO//
			$("#formularioMRU").validate({
				rules: {
					valor1: {
						number: true,
						required: true
					},
					valor2: {
						number: true,
						required: true
					},
					valor3: {
						number: true,
						required: true
					},
				},
			})
		})
	</script>
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
		
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12">
					<h2 class="p-3 mt-3" id="h2formulas"><strong>S</strong> = So + ( V . t )</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12">
					<form action="GET" action="MRUg1.php" id="formularioMRU">
						<label>So<p>
							<input  id="valor1" name="valor1" type="number" placeholder="So"  onkeyup="pegarvalor();" maxlength="20">
						</label>
						<label>V<p>
							<input  id="valor2"  name ="valor2" type="number" placeholder="V"   onkeyup="pegarvalor();" maxlength="20">
						</label>
						<label>t<p>
							<input  id="valor3" name="valor3" type="number" placeholder="t"  onkeyup="pegarvalor();" maxlength="20">
						</label><br/>
						<div class="col-xs-12">
							<ul id="resultado" style="display: none;">
								<li>S = </li>
								<li id="r1">So + </li>
								<li id="r2">(V.</li>
								<li id="r3">t)</li>
							</ul>
						</div>
					</form>
				</div>
			</div>
			<div class="row">
				
				<div class="col-xs-12 col-sm-12 col-md-12">
					 <center><button type="submit" class="btn btn-lg" onclick="enviar();">Resolver</button></center>				
				</div>
			</div>
		</div>

        
	</body>
	
	<script>
		function pegarvalor(){
			var so = document.getElementById("valor1").value + " +";
			var v = " ("+ document.getElementById("valor2").value + "."
			var t = document.getElementById("valor3").value + ")"

			var sox = document.getElementById("valor1").value;
			var vy = document.getElementById("valor2").value;
			var tz = document.getElementById("valor3").value;

			if(sox !== "" && vy !== "" && tz !== ""){
				document.getElementById("resultado").style.cssText = "display: block;"
			}else{
				document.getElementById("resultado").style.cssText = "display: none;"
			}

			if(so == ""){
				var so = "So +";
			}
			document.getElementById("r1").innerHTML = so; //PEGA O VALOR DE so E SETA NO OBJETO "r1";

			if(v == ""){
				var v = "(V."
			}
			document.getElementById("r2").innerHTML = v;

			if(t == ""){
				var t = "t)"
			}
			document.getElementById("r3").innerHTML = t;

		}
		// pegarvalor(); // QUANDO FIZER ESSA DECLARAÇÃO, A FUNÇÃO VAI SER CHAMADA ASSIM QUE CARREGAR A PAGINA  
		function enviar(){
			var so = document.getElementById("valor1").value;
			var v = document.getElementById("valor2").value;
			var t = document.getElementById("valor3").value;
			
			location.replace(`MRUg1.php?valor1=${so}&valor2=${v}&valor3=${t}`);
		}
	</script>
</html>