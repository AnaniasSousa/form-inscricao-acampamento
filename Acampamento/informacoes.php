<!DOCTYPE html>
<html lang="en">
<head>
	<?php include 'vars.php'; echo $header; ?>
	<title>Informações - Tudo Que Precisa Saber</title>
</head>
<body>
	<div><?php include 'vars.php'; echo $menu; ?></div>
<!--INTRODUÇÃO-->
	<div><?php include 'vars.php'; echo $bannerAcampamento; ?></div>
<!--VIDEO INSTITUCIONAL-->
	<div>
		<div><h2>COMO FUNCIONA</h2></div>
		<div>
			<video id="video" width="700px" controls>
				<source src="videos/videx.mp4" type="mp4">
				<source src="" type="">
				<source src="" type="">
				Seu navegador não pode reproduzir este vídeo!
			</video>
		</div>	
		<div>
			<p>
				O Acampamento acontece uma vez ao ano com o intuito de ser um momento unicamente separado a Deus. Onde podemos nos ajuntar e adorar nosso senhor em tudo que fizermos. Também é proporcionado vários momentos de diversão como os momentos na piscina, cmapos de futebol, rodas de bate papo, devocionais, sala de jogos... Os alojamentos são separados entre meninos e meninas para maior organização. #NaRocha
			</p>
		</div>	

	</div>
<!--ATIVIDADES-->
	<div>
		
		<div><h2>O QUE TEM</h2></div>
		<div>
			<div id="convidado"><img src="images/cant_verb.png" alt=""></div>
			<div id="convidado"><img src="images/front.png" alt=""></div>
			<div id="convidado"><img src="images/theo.png" alt=""></div>
		</div>
		<div>
			<p>
				Dentro do escopo de atividades que temos programadas para o acampamento podemos destacar algumas como, hidroginastica, campeonato de fifa, roda de conversa com o preletor, cultos, vigilha, noite  na fogueira, contação de historia, momento do testemunho e muitas outras. #VemGalera
			</p>
		</div>
		<div>
			<div id="btn"><a href="aviso.php">INSCREVA-SE</a></div>
			<div id="btn"><a href="documentos.php#termo">TERMO</a></div>
			<div id="btn"><a href="documentos.php#autorizacao">AUTORIZAÇÃO -18</a></div>
		</div>
	</div>		
<?php include 'vars.php'; echo $js; ?>
</body>
</html>