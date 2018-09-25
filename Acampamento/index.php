<!DOCTYPE html>
<html lang="en">
	<head>
		<?php include 'vars.php'; echo $header; ?>
		<title>Jardim - O Acampamento</title>
	</head>
	<body>
<!--NAVBAR[0K]-->

		<?php include 'vars.php'; echo $menu; ?>
<!--INTRODUÇÃO[0K]-->

		<div class="container-fluid">
			<div class="container">
				<?php  include 'vars.php'; echo $bannerAcampamento; ?>
			</div>
			<?php include 'vars.php'; echo $espaçador; ?>
<!--ATRAÇÕES[0K]-->

			<div class="container" id="convidados">
				
				<div class="container">
					<h2>QUEM VAI</h2>
					<p>Clique sobre o convidado saber mais.</p>
				</div>
				<div class="row" style="margin-bottom: 2%">
					<div class="col-md-4"><a target="blank" href="https://www.facebook.com/cantoverbo/"><img class="img-thumbnail" src="images/cant_verb.png" alt=""></a></div>
					<div class="col-md-4"><a target="blank" href="https://www.facebook.com/fronteiraoficial"><img class="img-thumbnail" src="images/front.png" alt=""></a></div>
					<div class="col-md-4"><a target="blank" href="https://www.facebook.com/teofilo.marcelino"><img class="img-thumbnail" src="images/theo.png" alt=""></a></div>
				</div>
				<div class="container-fluid col-10">
					<a class="btn btn-primary btn-lg btn-block" href="aviso.php">INSCREVA-SE</a>
				</div>

			</div>
			<?php include 'vars.php'; echo $espaçador; ?>
<!--INSTITUCIONAL[0K]-->	

			<div class="container">
				<h2>O MINISTERIO EVEN</h2>
				<p>
					Um ministerio muito legal, firmado sobre a rocha, onde cada um de nos é o uma nova pedra sobre a fundação que forma a igreja do senhor. A palavra Even vem do hebraico, e quer dizer rocha. Assim como em Matheus 7.24, construimos a casa de Deus sobre a rocha, que é Cristo Jesus. #NaRocha!
				</p>
			</div>
			<?php include 'vars.php'; echo $espaçador; ?>	
<!--INSTAGRAM[0K]-->

			<div class="container">
				<div class="row">
					<div>
						<img class="img-thumbnail" width="50%" src="images/insta" alt="">
					</div>
					<div>
						<h2>NOSSO INSTA</h2>
					</div>
				</div>
				<div class="container-fluid col-10">
					<div class="row">
						<div id="post_insta" class="col-md-3"><a href="instagram.com/ministerioeven/"><img class="img-thumbnail" src="images/inst_04.png" alt=""></a></div>
						<div id="post_insta" class="col-md-3"><a href="instagram.com/ministerioeven/"><img class="img-thumbnail" src="images/inst_03.png" alt=""></a></div>
						<div id="post_insta"  class="col-md-3"><a href="instagram.com/ministerioeven/"><img class="img-thumbnail" src="images/inst_02.png" alt=""></a></div>
						<div id="post_insta" class="col-md-3"><a href="instagram.com/ministerioeven/"><img class="img-thumbnail" src="images/inst_01.png" alt=""></a></div>
					</div>
				</div>
			</div>
			<?php include 'vars.php'; echo $espaçador; ?>
<!--CONTATOS[0K]-->

			<div class="container-fluid col-10">
				<?php include 'vars.php'; echo $contatos; ?>
			</div>
			<?php include 'vars.php'; echo $espaçador; ?>
<!--RODAPÉ[0K]-->		

			<div  style="text-align: center; font-size: 12px; margin-bottom: 8%;">
				<p><i>Feito com o S2 de Jesus, pelo minstério de comunicação da PIBB</i></p>
			</div>
		</div>
<?php include 'vars.php'; echo $js; ?>	
	</body>
</html>