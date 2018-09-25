<!DOCTYPE html>
<html lang="en">
<head>
	<?php include 'vars.php'; echo $header; ?>
	<title>Atenção - Pré Inscrição</title>
</head>
<body>
	<div style="text-align: right;padding-top: 2%;padding-right: 3%;">
		<b><a href="index.php">x</a></b>
	</div>
	<?php include 'vars.php'; echo $espaçador; ?>
<!--TÍTULO[0K]-->

	<div class="container-fluid" style="text-align: center;">
		<div class="container-fluid">
			<h1>ATENÇÃO!</h1>
			<img class="img-fluid" src="images/emoji.png">
		</div>
		<?php include 'vars.php'; echo $espaçador; ?>
<!--TEXTO[0K]-->

		<div class="container-fluid">
			<p>
				Para continar, imprima, preencha, assine e escaneie o termo de inscrição.
			</p>
			<p>
				Caso Seja Menor de Idade, além do termo, deverá repetir o processo com a autorização.
			</p>
			<p>
				Caso você já o tenha feito, clique em continuar.
			</p>
		</div>
<!--BOTÕES[0K]-->

		<div class="container-fluid col-md-6">
			<div class="row">
					<a class="btn-primary btn-lg" style="margin: 0 3% 0 3%;" href="documentos.php#termo">TERMO</a>
					<a class="btn-primary btn-lg" style="margin: 0 3% 0 3%;" href="documentos.php#autorizacao">AUTORIZAÇÃO</a>
					<a class="btn-primary btn-lg" style="margin: 0 3% 0 3%;" href="formulario_de_inscricao.php">CONTINUAR</a>		
			</div>	
		</div>
		<?php include 'vars.php'; echo $espaçador; ?>
	</div>
<?php include 'vars.php'; echo $js; ?>	
</body>
</html>