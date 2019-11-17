<!DOCTYPE html>
<?php
	session_start();
	include("conexao.php");
?>
<html lang="pt-br">
    <head>
	<title>MRU - t</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/form.css">
		<link rel="stylesheet" href="css/fontello.css">
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
					  	<span class="icon-user-female" aria-hidden="true"></span>
        				<?php echo "Olá, " .$_SESSION['name_user'];?>
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
					<h2 class="p-3 mt-3" id="h2formulas">S = So + ( V . <strong>t</strong> )</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12">
					<form action="GET" action="MRUg1.php" id="formularioMRU">
						<label>S<p>
							<input  id="valor1" name="valor1" type="number" placeholder="S"   onkeyup="pegarvalor();" maxlength="20">
						</label>
						<label>So<p>
							<input  id="valor2"  name ="valor2" type="number" placeholder="So"  onkeyup="pegarvalor();" maxlength="20">
						</label>
						<label>V<p>
							<input  id="valor3" name="valor3" type="number" placeholder="V"   onkeyup="pegarvalor();" maxlength="20">
						</label><br/>
						<div class="col-xs-12">
							<ul id="resultado" style="display: none;">
								<li id="r1">S = </li>
								<li id="r2">So + </li>
								<li id="r3" >(V.</li>
								<li>t)</li>
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
			var s = document.getElementById("valor1").value + " =";
			var so = document.getElementById("valor2").value + " + ";
			var v = "(" + document.getElementById("valor3").value + " . "; 

			var sx= document.getElementById("valor1").value;
			var soy = document.getElementById("valor2").value;
			var vz = document.getElementById("valor3").value;

			if(sx !== "" && soy !== "" && vz !== ""){
				document.getElementById("resultado").style.cssText = "display: block;"
			}else{
				document.getElementById("resultado").style.cssText = "display: none;"
			}

			if(s == ""){
				var s = "S =";
			}
			document.getElementById("r1").innerHTML = s; //PEGA O VALOR DE so E SETA NO OBJETO "r1";

			if(so == ""){
				var so = " So + "
			}
			document.getElementById("r2").innerHTML = so;

			if(v == ""){
				var v = "(V."
			}
			document.getElementById("r3").innerHTML = v;

		}
		// pegarvalor(); // QUANDO FIZER ESSA DECLARAÇÃO, A FUNÇÃO VAI SER CHAMADA ASSIM QUE CARREGAR A PAGINA  
		function enviar(){
			var s = document.getElementById("valor1").value;
			var so = document.getElementById("valor2").value;
			var v = document.getElementById("valor3").value;

			if(s == "" || so == "" || v == ""){
				alert("Campos vazios");
				return;
			}
			
			location.replace(`MRUg4.php?valor1=${s}&valor2=${so}&valor3=${v}`);
		}
	</script>
</html>