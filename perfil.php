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
		    <center><strong>Aqui em seu perfil suas fórmulas ficarão sempre salvas, para que você veja mais tarde. Bom estudo!</strong></center>
		</div>
		
		<div class="container col-10 col-sm-10 col-md-10 col-xl-10">
			<center><h2 class="p-3 mt-3" id="h2formulas">Fórmulas salvas</h2></center>
		</div>
		<div class="container containerFavoritos col-10 col-sm-10 col-md-10 col-xl-10" id="divs">
			<?php 
				$select_formula = mysqli_query($conectar, "SELECT * from formula WHERE id_usuario = $id_usuario" );
				?>
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
							#<?php echo $i; ?> - <?php echo $usuario['tipo_formula']; ?>
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
										<?php $resposta_torricelli_a = $util5_torricelli_a / $util4_torricelli_a; ?>
										<?php $resultForm_torricelli_a = number_format($resposta_torricelli_a, 2,  ',', ''); ?>
										<h3><?php echo "a = " .$resultForm_torricelli_a. " m/s²" ;?></h3><br/>
									<?php } ?>
								<?php $i++; ?>
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
							</div>
						</div>
					</div>
				</div>
				<?php endforeach; ?>
		</div>        
	</body>
		
</html>