<?php
include("conexao.php");
session_start();
$id_usuario = $_SESSION['id_user'];
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Perfil</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/perfil.css">
		<link rel="stylesheet" href="css/sanfona.css">
		<link rel="stylesheet" href="css/fontello.css">
		
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="jquery/dist/jquery.js"></script>
        <script src="popper.js/dist/popper.js"></script>
        <script src="js/bootstrap.js"></script>
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
		<div class="alert alert-info alert-dismissible">
		    <button type="button" class="close" data-dismiss="alert">&times;</button>
		    <center><strong>Aqui em seu perfil suas fórmulas ficarão sempre salvas, para que você veja mais tarde. 
				Bom estudo!  <span class="icon-emo-happy" aria-hidden="true"></span></strong></center>
		</div>
		
		<div class="container col-10 col-sm-10 col-md-10 col-xl-10">
			<center><h2 class="p-3 mt-3" id="h2formulas"> <span class="icon-ok" aria-hidden="true"></span> Lista das resoluções arquivadas</h2>
		</div>
		<div class="container containerFavoritos col-10 col-sm-10 col-md-10 col-xl-10" id="divs">
				<?php 
					$select_formula = mysqli_query($conectar, "SELECT * from formula WHERE id_usuario = $id_usuario" );
					$cont_linha_resolucao = mysqli_query($conectar, "SELECT count(*) as total from formula where id_usuario = $id_usuario");
					$total_linhas = mysqli_fetch_assoc($cont_linha_resolucao);
					//echo $total_linhas['total'];
					if($total_linhas['total'] == 0){
						$_SESSION['nadaArquivado'] = "Você ainda não tem nenhuma resolução salva em seu perfil. :(";
						$perfilVazio = $_SESSION['nadaArquivado'];
					}else{
						$perfilVazio = "";
					}
				?>
				<!-- a linha abaixo, printa a observação usando a resposta do if-else a em cima-->
				<h3><div class="alert alert-primary" role="alert" style="background: transparent; border: 0px;"><center><?php echo $perfilVazio;?> </center></div></h3>
				<?php
					$i = 1;
				?>
				<?php foreach ($select_formula as $usuario ) : ?>
				<!-- <div class="row" id="linhaFavorito">
					<ul id="favorito" onclick="exibirFormula();">
						<li><?php echo $usuario['id_formula']; ?></li>
						<li><?php echo $usuario['tipo_formula']; ?></li>
					</ul>
				</div> -->
				<div class="accordion" id="accordionExample">
					<div class="card">
						<div class="card-header" id="headingOne" data-toggle="collapse" data-target="#collapse<?php echo $usuario['id_formula']; ?>" aria-expanded="true" aria-controls="collapseOne">
						<h2 class="mb-0">
							<button class="btn btn-link" type="button" >
							<span class="icon-down-open-big" aria-hidden="true"></span> <?php echo $i; ?> - <?php echo $usuario['tipo_formula']; ?>
							</button>
						</h2>
						</div>
						<div id="collapse<?php echo $usuario['id_formula']; ?>" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
							<div class="card-body">
								<?php if( $usuario['tipo_formula'] == 'MRU - fórmula S'){ ?>
									<h3>S = So + (V . t)</h3><br/>
									<h3>S = <?php echo $usuario['valor1'] ?> + (<?php echo $usuario['valor2'] ?> . <?php echo $usuario['valor3'] ?>)</h3><br/>
									<h3>S = <?php echo $usuario['valor1'] ?> + <?php echo $usuario['valor2'] * $usuario['valor3'] ?></h3><br/>
									<h3>S = <?php echo $usuario['valor1'] +  ($usuario['valor2'] * $usuario['valor3']) ?> m</h3>
								<?php }?>
								<?php if( $usuario['tipo_formula'] == 'MRU - fórmula So'){ ?>
									<h3>S = So + (V . t)</h3><br/>
									<h3><?php echo $usuario['valor1']?> = So + (<?php echo $usuario['valor2']?> . <?php echo $usuario['valor3']?>)</h3><br/>
									<h3><?php echo $usuario['valor1']?> = So + <?php echo $usuario['valor2'] * $usuario['valor3'];?></h3><br/>
									<h3><?php echo "-So = ".( $usuario['valor1']* -1);?> + <?php echo ( $usuario['valor2'] * $usuario['valor3']  );?></h3>
									<?php $util1 = ( $usuario['valor1']* -1) + ( $usuario['valor2'] * $usuario['valor3']);?><br/>
									<h3><?php echo "-So = $util1 m";?></h3><br/>
									<h3><?php echo "-So ( . -1) = $util1 m ( . -1)";?></h3><br/>
									<h3><?php echo "So  = " .($util1 = $util1 * -1); echo "m";?></h3><br/>
									<?php
									$resultForm2 = number_format($util1, 2,  ',', '');?>
									<h3><?php echo "So  = ".$resultForm2."m";?></h3><br/>
								<?php }?>
								<?php if($usuario['tipo_formula'] == 'MRU - fórmula t'){?>
									<h3>S = So + (V . t)</h3><br/>
									<h3><?php echo $usuario['valor1']?> = <?php echo $usuario['valor2']?> + ( <?php echo $usuario['valor3']?>.  t )</h3><br/>
									<h3><?php echo  $usuario['valor1']?> - <?php echo  $usuario['valor2']?> = ( <?php echo $usuario['valor3'] ?>.  t )</h3><br/>
									<h3><?php echo  ($usuario['valor1'] - $usuario['valor2']) ?> = ( <?php echo $usuario['valor3'] ?> .  t )</h3><br/>
									<h3><?php echo ($usuario['valor1'] - $usuario['valor2']) ?> / <?php echo $usuario['valor3']?> = t </h3><br/>
									<?php
									 	$resultado = ($usuario['valor1'] - $usuario['valor2']) / $usuario['valor3'];
										$resultForm2 = number_format($resultado, 2,  ',', '');?>
									<h3><?php echo "t = " . $resultForm2 . " s"?></h3><br/>
								<?php } ?>
								<?php if($usuario['tipo_formula'] == 'MRU - fórmula V'){?>
									<h3>S = So + (V . t)</h3><br/>
									<h3><?php echo $usuario['valor1']?> = <?php echo $usuario['valor2']?> + (V . <?php echo $usuario['valor3']?>)</h3><br/>
									<h3><?php echo  $usuario['valor1']?> - <?php echo  $usuario['valor2']?> = V . <?php echo $usuario['valor3'] ?></h3><br/>
									<h3><?php echo  ($usuario['valor1'] - $usuario['valor2']) ?> = V . <?php echo $usuario['valor3'] ?></h3><br/>
									<h3>V = <?php echo ($usuario['valor1'] - $usuario['valor2'])?> / <?php echo $usuario['valor3']?></h3><br/>
									<?php
									 	$resultado = ($usuario['valor1'] - $usuario['valor2']) / $usuario['valor3'];
										$resultForm2 = number_format($resultado, 2,  ',', '');?>
									<h3><?php echo "V = " . $resultForm2 . " m/s"?></h3><br/>
								<?php } ?>
								<?php if($usuario['tipo_formula'] == 'Torricelli - V'){?>
									<h3>V² = Vo² + 2 . a . (S - So)</h3><br/>
									<h3>V² = <?php echo $usuario['valor1']?>² + 2 . <?php echo $usuario['valor2']?>. (<?php echo $usuario['valor3']?> - <?php echo $usuario['valor4']?>)</h3><br/>
									<?php $util1_torriceli_v = $usuario['valor1'] * $usuario['valor1'];
										$util2_torriceli_v = $usuario['valor3']- $usuario['valor4'] ;
										$util3_torriceli_v = 2 * $usuario['valor2'] ?>
									<h3>V ² = <?php echo  $usuario['valor1'] ?>² + 2 . <?php echo  $usuario['valor2']?>. (<?php echo $util2_torriceli_v ?> )</h3><br/>
									<h3>V ² = <?php echo $util1_torriceli_v ?> +  2 . <?php echo $usuario['valor2']?> . <?php echo $util2_torriceli_v ?></h3><br/>
									<h3><?php echo "V ² = $util1_torriceli_v  + $util3_torriceli_v   . $util2_torriceli_v ";?></h3><br/>
									<?php $util4_torriceli_v  = $util3_torriceli_v  * $util2_torriceli_v ;?>
									<h3><?php echo "V ² = $util1_torriceli_v  + $util4_torriceli_v  ";?></h3><br/>
									<?php $resposta_torriceli_v  = $util1_torriceli_v  + $util4_torriceli_v ;?>
									<h3><?php echo "V ² = $resposta_torriceli_v ";?></h3><br/>
									<h3><?php echo "V =  √  $resposta_torriceli_v ";?></h3><br/>
									<?php
										if($resposta_torriceli_v  < 0){
											$_SESSION['RespostaRaiz_torriceli_v'] = "Obs.: não existe raiz de número negativo.";
											$resp_torriceli_v = $_SESSION['RespostaRaiz_torriceli_v'];
										}else{?>
											<h3><?php
											$raiz_torriceli_v  = sqrt($resposta_torriceli_v );
											$resultForm_torriceli_v  = number_format($raiz_torriceli_v , 2,  ',', '');
											echo "V =" .$resultForm_torriceli_v. "m/s"; 
											$resp_torriceli_v  = "";
											?></h3>
										<?php }?>
									<!-- a linha abaixo, printa a observação usando a resposta do if-else a em cima-->
									<h3><div class="alert alert-warning" role="alert" style="background: transparent; border: 0px;"><?php echo $resp_torriceli_v ?></div></h3>		
								<?php } ?>
								<?php if($usuario['tipo_formula'] == 'Torricelli - Vo'){?>
									<h3>V² = Vo² + 2 . a . (S - So)</h3><br/>
									<h3><?php echo $usuario['valor1']?>² = Vo² + 2 . <?php echo $usuario['valor2']?>. (<?php echo $usuario['valor3']?> - <?php echo $usuario['valor4']?>)</h3><br/>
									<?php $util1_torriceli_vo = $usuario['valor1'] * $usuario['valor1'];
										$util2_torriceli_vo = $usuario['valor3'] - $usuario['valor4'] ;?>
									<h3><?php echo $util1_torriceli_vo ?> = Vo ² +  2 .  <?php echo $usuario['valor2']?> . <?php echo $util2_torriceli_vo ?></h3><br/>
									<?php $util3_torriceli_vo = $util2_torriceli_vo * $usuario['valor2'] ;?>
									<h3><?php echo "$util1_torriceli_vo  = Vo ² + 2 . $util3_torriceli_vo ";?></h3><br/>
									<h3><?php echo "$util1_torriceli_vo  = Vo ² + (" .  2 * $util3_torriceli_vo  .")";?></h3><br/>
									<h3><?php echo "$util1_torriceli_vo  - " . 2 * $util3_torriceli_vo ." = Vo ² ";?></h3><br/>
									<?php $util4_torriceli_vo  = $util1_torriceli_vo  - ( 2 * $util3_torriceli_vo ) ;?>
									<h3><?php echo "Vo ² = $util4_torriceli_vo ";?></h3><br/>
									<h3><?php echo "Vo = √  $util4_torriceli_vo ";?></h3><br/>
									<h3><?php $resposta_torriceli_vo  = $util4_torriceli_vo ;?></h3>
									<?php
										if($resposta_torriceli_vo  < 0){
											$_SESSION['RespostaRaiz'] = "Obs.: não existe raiz de número negativo.";
											$resp_torriceli_vo  = $_SESSION['RespostaRaiz'];
										}else{?>
											<h3><?php
											$raiz_torriceli_vo  = sqrt($resposta_torriceli_vo );
											$resultForm_torriceli_vo  = number_format($raiz_torriceli_vo , 2,  ',', '');
											echo "Vo = " .$resultForm_torriceli_vo . " m/s"; 
											$resp_torriceli_vo  = "";
											?></h3>
										<?php }?>
										<!-- a linha abaixo, printa a observação usando a resposta do if-else a em cima-->
										<h3><div class="alert alert-warning" role="alert" style="background: transparent; border: 0px;"><?php echo $resp_torriceli_vo  ?></div></h3>
									<?php } ?>
									<?php if($usuario['tipo_formula'] == 'Torricelli - a'){?>
										<h3>V² = Vo² + 2 . a . (S - So)</h3><br/>
										<h3><?php echo  $usuario['valor1']?>² = <?php echo $usuario['valor2']?>² +  2 . a . (<?php echo  $usuario['valor3']?> - <?php echo  $usuario['valor4']?>)</h3><br/>
										<?php $util1_torricelli_a = $usuario['valor1'] * $usuario['valor1'];
											$util2_torricelli_a = $usuario['valor2'] * $usuario['valor2'];
											$util3_torricelli_a = $usuario['valor3'] - $usuario['valor4'];?>
										<h3><?php echo "$util1_torricelli_a = $util2_torricelli_a +  2 . a . $util3_torricelli_a";?></h3><br/>
										<?php $util4_torricelli_a = $util3_torricelli_a * 2 ;?>
										<h3><?php echo "$util1_torricelli_a = $util2_torricelli_a +  ( $util4_torricelli_a a )";?></h3><br/>
										<h3><?php echo "$util1_torricelli_a - $util2_torricelli_a =  $util4_torricelli_a a ";?></h3><br/>
										<?php $util5_torricelli_a = $util1_torricelli_a - $util2_torricelli_a;?>
										<h3><?php echo "$util5_torricelli_a =   $util4_torricelli_a a ";?></h3><br/>
										<h3><?php echo "$util5_torricelli_a / $util4_torricelli_a  = a";?></h3><br/>
										<?php 
											if ($util5_torricelli_a == 0 || $util4_torricelli_a== 0 ){ 
												$resposta_torricelli_a = 0;
											}else{
												$resposta_torricelli_a = $util5_torricelli_a / $util4_torricelli_a;
										}?>
										<?php $resultForm_torricelli_a = number_format($resposta_torricelli_a, 2,  ',', ''); ?>
										<h3><?php echo "a = " .$resultForm_torricelli_a. " m/s²" ;?></h3><br/>
									<?php } ?>
								<?php if($usuario['tipo_formula'] == 'Torricelli - S'){?>
									<h3>V² = Vo² + 2 . a . (S - So)</h3><br/>
									<h3><?php echo  $usuario['valor1']?> ² = <?php echo $usuario['valor2']?> ² +  2 . <?php echo  $usuario['valor3']?>. ( S - <?php echo  $usuario['valor4'] ?>)</h3><br/>
										<?php $util1_torricelli_s = $usuario['valor1'] * $usuario['valor1'];
											$util2_torricelli_s = $usuario['valor2'] * $usuario['valor2'];?>
										<h3><?php echo $util1_torricelli_s ?> = <?php echo $util2_torricelli_s?> + ( 2 . ( <?php echo $usuario['valor3']?> . ( S - <?php echo $usuario['valor4']?>)))</h3><br/>
										<?php $util3_torricelli_s =  $usuario['valor3'] *  $usuario['valor4'];?>
										<h3><?php echo $util1_torricelli_s ?> = <?php echo $util2_torricelli_s?> + ( 2 . ((<?php echo $usuario['valor3']?> . S ) - <?php echo $util3_torricelli_s ?>))</h3><br/>
										<?php $util4_torricelli_s = $util3_torricelli_s * 2 ;
											$util5_torricelli_s =  $usuario['valor3'] * 2 ;?>
										<h3><?php echo "$util1_torricelli_s = $util2_torricelli_s + (( $util5_torricelli_s . S ) - $util4_torricelli_s )";?></h3><br/>
										<h3><?php echo "$util1_torricelli_s - $util2_torricelli_s = (( $util5_torricelli_s . S ) - $util4_torricelli_s )";?></h3><br/>
										<?php $util6_torricelli_s = $util1_torricelli_s - $util2_torricelli_s ;?>
										<h3><?php echo "$util6_torricelli_s = ( $util5_torricelli_s . S ) - $util4_torricelli_s ";?></h3><br/>
										<h3><?php echo "$util6_torricelli_s + $util4_torricelli_s = $util5_torricelli_s . S ";?></h3><br/>
										<?php $util7_torricelli_s = $util6_torricelli_s + $util4_torricelli_s ;?>
										<h3><?php echo "$util7_torricelli_s = $util5_torricelli_s . S ";?></h3><br/>
										<h3><?php echo "$util7_torricelli_s / $util5_torricelli_s = S ";?></h3><br/>
										<?php $resposta_torricelli_s = $util7_torricelli_s / $util5_torricelli_s;?>
										<?php $resultForm_torricelli_s = number_format($resposta_torricelli_s, 2,  ',', ''); ?>
										<h3><?php echo "S = " .$resultForm_torricelli_s. " m";?></h3><br/>
								<?php } ?>
								<?php if($usuario['tipo_formula'] == 'Torricelli - So'){?>
										<h3>V² = Vo² + 2 . a . (S - So)</h3><br/>
										<h3><?php echo $usuario['valor1']?>² = <?php echo $usuario['valor2']?>² + 2 . <?php echo  $usuario['valor3']?> . ( <?php echo $usuario['valor4']?> - So )</h3><br/>
										<?php $util1_torriceli_so = $usuario['valor1'] * $usuario['valor1'];
											$util2_torriceli_so  = $usuario['valor2'] * $usuario['valor2'] ;?>
										<h3><?php echo $util1_torriceli_so ?> = <?php echo $util2_torriceli_so?> + 2 . <?php echo $usuario['valor3']?> . (<?php echo $usuario['valor4']?> - So )</h3><br/>
										<?php $util3_torriceli_so  = $usuario['valor3'] * 2 ;?>
										<h3><?php echo $util1_torriceli_so?> = <?php echo $util2_torriceli_so?>  + <?php echo $util3_torriceli_so?> . (<?php echo $usuario['valor4']?> - So )</h3><br/>
										<?php $util4_torriceli_so  = $util3_torriceli_so  * $usuario['valor4'];
											$util5_torriceli_so  =  $util3_torriceli_so  * -1;?>
										<h3><?php echo $util1_torriceli_so?>  = <?php echo $util2_torriceli_so?>  + <?php echo $util4_torriceli_so?>
										<?php if( $util5_torriceli_so  < 0){
											echo "$util5_torriceli_so  So";
										}elseif($util5_torriceli_so  >= 0){
											echo " - $util5_torriceli_so  So";
										}?></h3><br/>
										<h3><?php echo $util1_torriceli_so?> - <?php echo $util2_torriceli_so?>  = <?php echo $util4_torriceli_so?>
										<?php if( $util5_torriceli_so  < 0){
											echo "". $util5_torriceli_so . " So";
										}elseif($util5_torriceli_so  > 0){
											$util5_torriceli_so  = $util5_torriceli_so  * -1;
											echo " $util5_torriceli_so  So";
										}?></h3><br/>
										<?php $util6_torriceli_so  = $util1_torriceli_so  - $util2_torriceli_so  - $util4_torriceli_so  ;?>
										<h3><?php echo "$util1_torriceli_so  - $util2_torriceli_so  -  $util4_torriceli_so  =  $util5_torriceli_so  So ";?></h3><br/>
										<h3><?php echo "$util6_torriceli_so  / $util5_torriceli_so  =  So ";?></h3><br/> 
										<?php $resposta_torriceli_so  =  $util6_torriceli_so  / $util5_torriceli_so ;?>
										<?php $resultForm_torriceli_so  = number_format($resposta_torriceli_so , 2,  ',', ''); ?>
										<h3><?php echo "So = " .$resultForm_torriceli_so . " m";?></h3><br/>
							<?php } ?>
							<?php if($usuario['tipo_formula'] == 'Campo Elétrico - E'){?>
										<h3>E = (K . q)/ D²</h3><br/>
										<h3>E = (<?php echo $usuario['valor1']?> . <?php echo  $usuario['valor2']?>) / <?php echo  $usuario['valor3']?>²</h3><br/>
										<?php $util1_campo_E =  $usuario['valor3'] *  $usuario['valor3'];?>
										<h3>E = (<?php echo $usuario['valor1']?> . <?php echo  $usuario['valor2']?>) / <?php echo  $util1_campo_E?></h3><br/>
										<?php $util2_campo_E =  $usuario['valor1'] *  $usuario['valor2'];?>
										<h3>E = <?php echo  $util2_campo_E ?> / <?php echo  $util1_campo_E?></h3><br/>
										<?php
										$resp_campo_E =  $util2_campo_E  / $util1_campo_E ;
										$resultForm_campo_E  = number_format($resp_campo_E, 2,  ',', ''); ?>
										<h3>E = <?php echo $resultForm_campo_E ?> N/C</h3>
							<?php } ?>
							<?php if($usuario['tipo_formula'] == 'Campo Elétrico - q'){?>
										<h3>E = (K . q)/ D²</h3><br/>
										<h3><?php echo $usuario['valor1']?> = (<?php echo $usuario['valor2']?> . q) / <?php echo  $usuario['valor3']?>²</h3><br/>
										<?php $util1_campo_q = $usuario['valor3'] * $usuario['valor3'];?>
										<h3><?php echo $usuario['valor1'] ?> = (<?php echo $usuario['valor2']?> . q) / <?php echo $util1_campo_q ?></h3><br/>
										<h3><?php echo $usuario['valor1'] ?> . <?php echo $util1_campo_q ?> = <?php  echo $usuario['valor2']?> . q</h3><br/>
										<?php $util2_campo_q = $usuario['valor1'] * $util1_campo_q ;?>
										<h3><?php echo $util2_campo_q?> = <?php echo $usuario['valor2']?> . q</h3><br/>
										<h3><?php echo $util2_campo_q ?> / <?php echo $usuario['valor2']?> = q</h3><br/>
										<?php
										 $resp_campo_q = $util2_campo_q / $usuario['valor2'];
										 $resultForm_campo_q  = number_format($resp_campo_q, 2,  ',', ''); ?>
										<h3>q = <?php echo $resultForm_campo_q ?> C</h3><br/>
							<?php } ?>
							<?php if($usuario['tipo_formula'] == 'Campo Elétrico - d'){?>
										<h3>E = (K . q)/ D²</h3><br/>
										<h3><?php echo $usuario['valor1'] ?> = <?php echo $usuario['valor2']?> . <?php echo $usuario['valor3']?>/ D²</h3><br/>
										<?php $util1_campo_d = $usuario['valor2'] * $usuario['valor3'];?>
										<h3><?php echo $usuario['valor1']?> = <?php echo $util1_campo_d ?> / D²</h3><br/>
										<h3><?php echo $usuario['valor1'] ?> . D² = <?php echo $util1_campo_d ?></h3><br/>
										<h3><?php echo "D² = $util1_campo_d /"?> <?php echo $usuario['valor1']?></h3><br/>
										<?php $util2_campo_d = $util1_campo_d / $usuario['valor1'] ;?>
										<h3><?php echo "D² = $util2_campo_d";?></h3><br/>
										<h3><?php echo "D = √ $util2_campo_d";?></h3><br/>
										<?php
											if($util2_campo_d < 0){
												$_SESSION['RespostaRaiz'] = "Obs.: não existe raiz de número negativo.";
												$resp_campo_d = $_SESSION['RespostaRaiz'];
											}elseif ($util2_campo_d >= 0){?>
												<h3><?php
												$resposta_campo_d = sqrt($util2_campo_d);
												$resultForm_campo_d = number_format($resposta_campo_d, 2,  ',', '');
												echo "D = " .$resultForm_campo_d. " m "; 
												$resp_campo_d = "";
												?></h3>
											<?php } ?>
										<!-- a linha abaixo, printa a observação usando a resposta do if-else a em cima-->
										<h3><div class="alert alert-warning" role="alert" style="background: transparent; border: 0px;"><?php echo $resp_campo_d ?></div></h3>
								<?php } ?>
								<?php if($usuario['tipo_formula'] == 'Calor Específico - c'){?>
									<h3>c = Q / [m . ( t - to )]</h3><br/>
									<h3> c = <?php echo $usuario['valor1']?> / [<?php echo $usuario['valor2']?> . (<?php echo $usuario['valor3']?> - <?php echo $usuario['valor4']?>)]</h3><br/>
									<?php $util1_calor_c = $usuario['valor3'] - $usuario['valor4'];?>
									<h3>c = <?php echo $usuario['valor1'] ?> / <?php echo $usuario['valor2'] ?> . <?php echo $util1_calor_c ?></h3><br/>
									<?php $util2_calor_c = $usuario['valor2']  * $util1_calor_c ?>
									<h3>c = <?php echo  $usuario['valor1']?> / <?php echo $util2_calor_c ?></h3><br/>
									<?php
										if($util2_calor_c == 0){
											$result_calor_c = 0;
										}else{
											$result_calor_c =  $usuario['valor1'] / $util2_calor_c;
										}
										if($result_calor_c < 0){
											$_SESSION['RespostaNegativaCalor'] = "Obs.: não existe calor específico menor que zero.";
											$resp_calor_c = $_SESSION['RespostaNegativaCalor'];
										}else{?>
											<h3><?php
											$resultForm_calor_c = number_format($result_calor_c, 2,  ',', '');
											echo "c = " .$resultForm_calor_c. "cal/g.°C "; 
											$resp_calor_c = "";
											?></h3>
										<?php } ?>
											<!-- a linha abaixo, printa a observação usando a resposta do if-else a em cima-->
											<h3><div class="alert alert-warning" role="alert" style="background: transparent; border: 0px;"><?php echo $resp_calor_c ?></div></h3>
								<?php } ?>
								<?php if($usuario['tipo_formula'] == 'Calor Específico - Q'){?>
									<h3>c = Q / [m . ( t - to )]</h3><br/>
									<h3><?php echo $usuario['valor1'] ?> = Q / [<?php echo $usuario['valor2']?> . ( <?php echo $usuario['valor3']?> - <?php echo $usuario['valor4']?>)]</h3><br/>
									<?php $util1_calor_q = $usuario['valor3'] - $usuario['valor4']  ?>
									<h3><?php echo $usuario['valor1']?> = Q / <?php echo $usuario['valor2']?> . <?php echo $util1_calor_q ?></h3><br/>
									<?php $util2_calor_q  = $usuario['valor2'] * $util1_calor_q?>
									<h3><?php echo $usuario['valor1']?> = Q / <?php echo $util2_calor_q?></h3><br/>
									<h3><?php echo $usuario['valor1']?> . <?php echo $util2_calor_q?> = Q </h3><br/>
									<?php $result_calor_q =  $usuario['valor1'] * $util2_calor_q?>
									<?php $resultForm_calor_q = number_format($result_calor_q, 2,  ',', '')?>
									<h3> Q = <?php echo $resultForm_calor_q?> cal</h3><br/>
								<?php } ?>
								<?php if($usuario['tipo_formula'] == 'Calor Específico - m'){?>
									<h3>c = Q / [m . ( t - to )]</h3><br/>
									<h3><?php echo $usuario['valor1']?> = <?php echo $usuario['valor2']?> / m . (<?php echo $usuario['valor3']?> - <?php echo $usuario['valor4']?> )</h3><br/>
									<?php $util1_calor_m = $usuario['valor3'] - $usuario['valor4'] ;?>
									<h3><?php echo $usuario['valor1']?> = <?php echo $usuario['valor2'] ?> /  m . <?php echo $util1_calor_m?></h3><br/>
									<h3><?php echo $usuario['valor1'] ?> . (<?php echo $util1_calor_m ?> . m ) = <?php echo $usuario['valor2'] ?></h3><br/>
									<h3><?php echo $util1_calor_m ?> . m = <?php echo $usuario['valor2']?> / <?php echo $usuario['valor1'] ?></h3><br/>
									<?php $util2_calor_m = $usuario['valor2'] / $usuario['valor1'];?>
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
								<?php } ?>
								<?php if($usuario['tipo_formula'] == 'Calor Específico - t'){?>
									<h3>c = Q / [m . ( t - to )]</h3><br/>
									<h3><?php echo $usuario['valor1'] ?> = <?php echo $usuario['valor2']?> / <?php echo $usuario['valor3']?> . ( t - <?php echo $usuario['valor4']?>)</h3><br/>
									<h3><?php echo $usuario['valor1']?> . <?php echo $usuario['valor3']?> . ( t - <?php echo $usuario['valor4']?> ) = <?php echo $usuario['valor2'] ?></h3><br/>
									<?php $util1_calor_t = $usuario['valor1'] * $usuario['valor3'];?>
									<h3><?php echo $util1_calor_t?> . ( t - <?php echo $usuario['valor4'] ?> ) = <?php echo $usuario['valor2'] ?></h3><br/>
									<h3> t - <?php echo $usuario['valor4'] ?> = <?php echo $usuario['valor2']?> / <?php echo $util1_calor_t?></h3><br/>
									<?php $util2_calor_t = $usuario['valor2']/ $util1_calor_t;
									$resultForm1_calor_t = number_format($util2_calor_t, 2,  ',', '');?>
									<h3>t - <?php echo $usuario['valor4']?> = <?php echo $resultForm1_calor_t ?></h3><br/>
									<h3>t = <?php echo $resultForm1_calor_t?> +  <?php echo $usuario['valor4']?></h3><br/>
									<?php $util3_calor_t = $util2_calor_t + $usuario['valor4'];
									$resultForm2_calor_t = number_format($util3_calor_t, 2,  ',', '');?>
									<h3><?php echo "t = $resultForm2_calor_t °C";?></h3><br/>
								<?php } ?>
								<?php if($usuario['tipo_formula'] == 'Calor Específico - to'){?>
									<h3>c = Q / [m . ( t - to )]</h3><br/>
									<h3><?php echo $usuario['valor1']?> = <?php echo $usuario['valor2'] ?> / <?php echo $usuario['valor3']?> . ( <?php echo $usuario['valor4']?> - to )</h3><br/>
									<h3><?php echo $usuario['valor1']?> . <?php echo $usuario['valor3'] ?> . ( <?php echo $usuario['valor4']?> - to ) = <?php echo $usuario['valor2']?></h3><br/>
									<?php $util1_calor_to = $usuario['valor1']* $usuario['valor3'];?>
									<h3><?php echo $util1_calor_to ?> . ( <?php echo $usuario['valor4'] ?> - to ) = <?php echo $usuario['valor2']?></h3><br/>
									<h3><?php echo $usuario['valor4']?> - to = <?php $usuario['valor2'] ?> / <?php echo $util1_calor_to ?></h3><br/>
									<?php $util2_calor_to = $usuario['valor2']/ $util1_calor_to;
									$resultForm1_calor_to = number_format($util2_calor_to, 2,  ',', '');?>
									<h3><?php echo $usuario['valor4']?> - to = <?php echo $resultForm1_calor_to?></h3><br/>
									<h3><?php echo $usuario['valor4'] ?> = <?php echo $resultForm1_calor_to?> + to</h3><br/>
									<h3><?php echo $usuario['valor4']?> - <?php echo $resultForm1_calor_to ?> = to</h3><br/>
									<?php $util3_calor_to = $usuario['valor4'] - $util2_calor_to;?>
									<?php $resultForm2_calor_to = number_format($util3_calor_to, 2,  ',', '');?>
									<h3><?php echo "to = $resultForm2_calor_to °C";?></h3><br/>
								<?php } ?>
							</div>
							<?php $i++; ?>
						</div>
					</div>
				</div>
				<?php endforeach; ?>
		</div>        
	</body>
		
</html>