<!DOCTYPE html>
<?php
	session_start();
	include("conexao.php");
?>
<html lang="pt-br">
    <head>
	<title>Equação de Torricelli</title>
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
						valor4: {
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
        				<?php echo "Olá, " .$_SESSION['name_user'];?>
      				</a>
      				<div class="dropdown-menu">
						<a class="dropdown-item" href="perfil.php">Ver perfil</a>
        				<a class="dropdown-item" href="sair.php">Sair</a>
      				</div>
    			</li>
                </ul>
            </div>
		</nav><br/>
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12">
					<h2 class="p-3 mt-3" id="h2formulas">V² = Vo² + 2 . a . (S - <strong>So</strong>)</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12">
					<form action="GET" action="Torricelig5.php" id="formularioMRU">
						<label>V<p>
							<input  id="valor1" name ="valor1"  type="number" placeholder="V"  onkeyup="pegarvalor();" maxlength="20">
						</label>
						<label>Vo<p>
							<input  id="valor2" name="valor2" type="number" placeholder="Vo"   onkeyup="pegarvalor();" maxlength="20">
						</label><br/>
						<label>a<p>
							<input  id="valor3" name="valor3" type="number" placeholder="a"   onkeyup="pegarvalor();" maxlength="20">
						</label><br/>
						<label>S<p>
							<input  id="valor4" name="valor4" type="number" placeholder="S"   onkeyup="pegarvalor();" maxlength="20">
						</label><br/>
						<div class="col-xs-12">
							<ul id="resultado"  style="display: none;">
								<li id="r1">V² = </li>
								<li id="r2" >Vo² + </li>
								<li id="r3">2 . a .</li>
								<li id="r4"> (S -</li>
								<li >So)</li>
							</ul>
						</div>
					</form>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12">
					 <center><button type="submit" id="resolver" class="btn btn-lg" onclick="enviar();">Resolver</button></center>				
				</div>
			</div>
		</div>  
	</body>
	<script>
		function pegarvalor(){
			var v = document.getElementById("valor1").value + "² =";
			var vo = document.getElementById("valor2").value + "² +  "
			var a = "2 . " + document.getElementById("valor3").value + " . "
			var s = "( "+ document.getElementById("valor4").value + " - "

			var vx = document.getElementById("valor1").value;
			var voy = document.getElementById("valor2").value;
			var az = document.getElementById("valor3").value;
			var sw = document.getElementById("valor4").value;

			if(vx !== "" && voy !== "" && az !== "" && sw !== ""){
				document.getElementById("resultado").style.cssText = "display: block;"
			}else{
				document.getElementById("resultado").style.cssText = "display: none;"
			}

			if(vx == ""){
				var v = "V² = ";
			}
			document.getElementById("r1").innerHTML = v; //PEGA O VALOR DE so E SETA NO OBJETO "r1";

			if(voy == ""){
				var vo = "² + "
			}
			document.getElementById("r2").innerHTML = vo;

			if(az == ""){
				var a = "2 . a ."
			}
			document.getElementById("r3").innerHTML = a;

			if(sw == ""){
				var s = "( S - "
			}
			document.getElementById("r4").innerHTML = s;

		}
		// pegarvalor(); // QUANDO FIZER ESSA DECLARAÇÃO, A FUNÇÃO VAI SER CHAMADA ASSIM QUE CARREGAR A PAGINA  
		function enviar(){
			var v = document.getElementById("valor1").value;
			var vo =  document.getElementById("valor2").value;
			var a = document.getElementById("valor3").value;
			var s = document.getElementById("valor4").value;


			if(v == "" || vo == "" || a == "" || s == ""){
				alert("Campos vazios");
				return;
			}
			
			location.replace(`Torricelig5.php?valor1=${v}&valor2=${vo}&valor3=${a}&valor4=${s}`);
		}
	</script>
</html>