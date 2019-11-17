<?php
	session_start();
	include("conexao.php");
	
	$valor1 = $_GET['valor1'];
	$valor2 = $_GET['valor2'];
	$valor3 = $_GET['valor3'];
	$valor4 = $_GET['valor4'];
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
		<title>Calor Específico - m</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/form.css">
		<link rel="stylesheet" href="css/fontello.css">
		<link rel="stylesheet" href="css/confirm.css">
		  <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="jquery/dist/jquery.js"></script>
        <script src="js/bootstrap.js"></script>
		<link rel="stylesheet" href="css/jquery-confirm.css">
		<script src="js/jquery-confirm.js"></script>
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
        </nav><br/><br/>
		<div class="container col-12 col-sm-12 col-md-10 col-xl-10" id="divs">
			<h3><?php echo "$valor1 = $valor2 / m . ( $valor3 - $valor4 )";?></h3><br/>
			<?php $util1_calor_m = $valor3 - $valor4 ;?>
			<h3><?php echo "$valor1 = $valor2 /  m . $util1_calor_m ";?></h3><br/>
			<h3><?php echo "$valor1 . ( $util1_calor_m . m ) = $valor2 ";?></h3><br/>
			<h3><?php echo "$util1_calor_m . m = $valor2 / $valor1";?></h3><br/>
			<?php $util2_calor_m = $valor2 / $valor1 ;?>
			<h3><?php echo "$util1_calor_m . m = $util2_calor_m";?></h3><br/>
			<h3><?php echo "m = $util2_calor_m / $util1_calor_m";?></h3><br/>
			<?php
				if($util1_calor_m == 0){
					$result_calor_m = 0;
				}else{
					$result_calor_m =  $util2_calor_m / $util1_calor_m;
				}
				if($result_calor_m < 0){
					$_SESSION['RespostaNegativaMassa'] = "Obs.: não existe massa menor que zero.";
					$resp_calor_m = $_SESSION['RespostaNegativaMassa'];
				}else{?>
					<h3><?php
					$resultForm_calor_m = number_format($result_calor_m, 2,  ',', '');
					echo "m = " .$resultForm_calor_m. "g (ou Kg)"; 
					$resp_calor_m = "";
					?></h3>
				<?php } ?>
			<!-- a linha abaixo, printa a observação usando a resposta do if-else a em cima-->
			<h3><div class="alert alert-warning" role="alert" style="background: transparent; border: 0px;"><?php echo $resp_calor_m ?></div></h3>
		</div>
		<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12">
					<center><button id="salvar" class="btn btn-lg" onclick="salvar();">Salvar</button></center>
				</div>
		</div>
	</body>
	<script>
			function salvar(){	
				document.getElementById("salvar").style.cssText = "display: none;"; //pegar botão por ID
				const urlParams = new URLSearchParams(window.location.search);   
				const myParam1 = urlParams.get('valor1');    
				const  valor1 = Number(myParam1);

				const myParam2 = urlParams.get('valor2');    
				const  valor2 = Number(myParam2);

				const myParam3 = urlParams.get('valor3');    
				const  valor3 = Number(myParam3);

				const myParam4 = urlParams.get('valor4');    
				const  valor4 = Number(myParam4);

				const valores = `valor1=${valor1}&valor2=${valor2}&valor3=${valor3}&valor4=${valor4}`;
				$.ajax({
					url: "salvar15.php",//pagina em php que ira fazer o insert dos dados
					type: "POST",//metodo que ira passar os dados
					data: valores, //dados
					dataType: "html",
					success: function(response) { //se der "sucesso" ira entrar na função
                    	$.confirm({ //caixa de dialogo confirmando os dados salvos no perfil
							icon: 'icon-emo-laugh',//ICONE
							title: 'Sucesso!', // TITULO QUE VAI APARECER NO BOX
							content: 'Resolução salva em seu perfil.', // MENSAGEM
							buttons: {//botão de "ok" da caixa de dialogo
								OK: function () {
								},
							}
						});
						}
				})

			}
	</script>
</html>