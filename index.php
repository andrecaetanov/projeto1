<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Yoshi's Store</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="shortcut icon" href="assets/img/logo/Yoshis_Store_-_Logo.ico" type="image/x-icon" />
	<link rel="stylesheet" type="text/css" href="assets/bootstrap-3.3.7-dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/index.css">
	<link rel="stylesheet" type="text/css" href="assets/css/footer.css">
	<link rel="stylesheet" type="text/css" href="assets/css/header.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font.css">
	<link rel="stylesheet" href="assets/font-awesome-4.7.0/css/font-awesome.min.css">
</head>

<body class="pagina-inicial">
	<?php include("header.php");?>	
	<?php include ("banco-produtos.php"); 
	include ("conexao.php");
	?>
	<?php 
	$produtos=listaProdutos($conexao);
	$slides=listaSlides($conexao);
	?>
	<!-- __________________________________________________________________________________________________________________________________ -->
	<section class="slides">
		<!-- Carousel -->
		<div id="carousel-example-generic" class="carousel slide carousel-fade" data-ride="carousel">
			<!-- Indicadores -->
			<ol class="carousel-indicators">
				<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
				<li data-target="#carousel-example-generic" data-slide-to="1"></li>
				<li data-target="#carousel-example-generic" data-slide-to="2"></li>
			</ol>
			<!-- Fim dos indicadores -->
			<!-- Imagens dos slides -->
			<div class="carousel-inner" role="listbox">
				<?php
				$i=0;
				foreach($slides as $produto) :
					if($i==0) :
						?>                       
						<div class="item active">
							<?php
						else :
							?>
							<div class="item">
								<?php
							endif;
							$i++;
							?>
							<a href="produto-unico.php?id=<?=$produto['id']?>"><img src="<?= $produto['imagem']?>" href="produto-unico.php?id=<?=$produto['id']?>" alt="<?= $produto['nome']?>"></a>
						</div>
						<?php
					endforeach
					?>

				</div>
			</div>
		</section>
		<!-- Fim imagens dos slides -->
		<!-- Fim do carousel -->
		<!-- __________________________________________________________________________________________________________________________________ -->
		<main>
			<section class="produtos-recentes">
				<!-- Produtos -->  
				<div id="wrapper-produtos" class="container">
					<div class="row">
						<div class="col-md-12">                         
							<h4 class="titulo">
								<span class="text">Adicionados <strong>recentemente</strong></span>
							</h4>
							<div>
								<!-- Imagens dos produtos -->
								<ul class="thumbnails">
									<?php
									foreach($produtos as $produto) :
										?>                       
										<li class="col-md-4">
											<div class="caixa-produtos">
												<span></span>
												<p><a href="produto-unico.php?id=<?=$produto['id']?>"><img src="<?= $produto['imagem']?>" alt=<?= $produto['nome']?> class="img-responsive" /></a></p>
												<a href="#" class="titulo"><?= $produto['nome']?></a><br/>
												<?php
												if($produto['tipo_nome']=="Console") :
													?>
													<a href="produto-unico.php?id=<?=$produto['id']?>" class="categoria"><?= $produto['tipo_nome']?></a>
													<?php
												else :
													?>
													<a href="produto-unico.php?id=<?=$produto['id']?>" class="categoria"><?= $produto['tipo_nome']?> <?= $produto['plataforma_nome']?></a>
													<?php
												endif
												?>
												<p class="preco">R$<?= $produto['preco']?></p>
											</div>
										</li>
										<?php
									endforeach
									?>
								</ul>
								<!-- Fim das imagens dos produtos -->
							</div>
						</div>        
					</div>
				</div>
				<!-- Fim dos produtos -->
			</section>
		</main>
		<?php include ("footer.php"); ?>
	</body>
	</html>