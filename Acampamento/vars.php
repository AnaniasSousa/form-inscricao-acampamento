<?php 
/*________CONTATOS________*/
	$contatos = '
		<div><h2>FALE CONOSCO</h2></div>
		<div class="card-deck">
			<div class="card">
				<img class="card-img-top" src="images/mail.png" alt="card image cap"></img>
				<div class="card-body">
					<h5 class="card-title">E-MAIL</h5>
					<a class="card-text" href="mailto:tayla@ministerioeven.com.br">tayla@ministerioeven.com.br</a>
					<a class="card-text" href="mailto:jaqueline@ministerioeven.com.br">jaqueline@ministerioeven.com.br</a>
					<a class="card-text" href="mailto:abigail@ministerioeven.com.br">abigail@ministerioeven.com.br</a>
				</div>	
			</div>
			<div class="card">
				<img class="card-img-top" src="images/tel.png"  alt=""></img>
				<div class="card-body">
					<h5 class="card-title">TELEFONE</h5>
					<a class="card-text" href="tel:+5531999999999">(31) 9 9999.9999</a><br/>
					<a class="card-text" href="tel:+5531999999999">(31) 9 9999.9999</a><br/>
					<a class="card-text" href="tel:+5531999999999">(31) 9 9999.9999</a>
				</div>	
			</div>
			<div class="card">
				<img class="card-img-top" src="images/loc.png" lt=""></img>
				<div class="card-body">
					<h5 class="card-title">ENDEREÇO</h5>
					<a class="card-text" href="#">R.Cipriano de Carvalho, 212, Barreiro de Baixo. BH - MG</a>
				</div>	
			</div>
		</div>
	';
/*________NAVBAR________*/
	$menu ='
		<nav class="navbar navbar-expand-lg navbar-light bg-ligth">
			<a class="navbar-brand" href="index.php"><title>logo_EVEN</title><img class="logo" src="images/logo_ministerio_even_home.png">
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    			<span class="navbar-toggler-icon"></span>
  			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active"><a class="nav-link" href="aviso.php">INSCRIÇÕES</a></li>
					<li class="nav-item"><a class="nav-link" href="documentos.php#autorizacao">AUTORIZAÇÕES</a></li>
					<li class="nav-item"><a class="nav-link" href="documentos.php#termo">TERMOS</a></li>
					<li class="nav-item dropdown">
						<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							INFORMAÇÕES
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					    	<a class="dropdown-item" href="/informacoes.php">Como Funciona</a>
					    	<a class="dropdown-item" href="/informacoes.php">O que tem</a>
					    	<div class="dropdown-divider"></div>
					    	<a class="dropdown-item" href="/informacoes.php">Fale conosco</a>
						</div>
					</li>
				</ul>
			</div>
		</nav>
	';
/*________BANNER1________*/
	$bannerAcampamento ='
		<img class="img-fluid" src="images/banner.png">
		<div style="margin-top: 2%;"></div>
		<div class="col-md-11">
	    	<p class"text-justify">
				O acampamento Jardim foi feito com muito carinho para ser um acampamento trilegal onde todos se divirtam o conheça mais da vontade de Deus sobre nós. Venha passar este momento conosco no jardim! Sera tempo de alegrar-se, dividir bons momentos e até mesmo chorar. Porem que tudo isso seja para Gloria de Deus e que tudo que façamos la, nada se perca, desde as partidas de play até os devocionais, passando por jogos de mesa e momentos especificos de culto. Estamos arrumando tudo, e contamos com sua presença, #VemGalera!
			</p>
			</div>
	';
/*________PADRÃO HEADER________*/
$header='
	<!-- VER 1.0 (24/08/2018) ESCRITO POR ANANIAS PAULO ARAÚJO E SOUSA PARA O INISTERIO DE COMUNICAÇÃO DA PIB DO BARREIRO. DUVIDAS E SUGESTÕES FAVOR ENCAMINHAR UM E-MAIL PARA ANANIAS@MINISTERIOEVEN.COM -->
	<meta charset="UTF-8">
	<link rel="stylesheet" href="node_modules/bootstrap/compiler/bootstrap.css">
';
/*________PADRÃO SCRIPS________*/
	$js='
<!--JS-->
		<script src="node_modules/jquery/dist/jquery.js"></script>
		<script src="node_modules/popper.js/dist/popper.js"></script>
		<script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>	
	';
	$espaçador='
		<div style="margin-top: 5%;"></div>	
 	';
 ?>
