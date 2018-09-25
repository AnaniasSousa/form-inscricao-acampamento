<?php
 /*-x---VARIAVEIS---x-*/
$nome = $_POST ["nome_usr"];
$email = $_POST ["mail_usr"];
$sobrenome = $_POST ["sobrenome_usr"];
$aniversario = $_POST ["born_usr"];
$sexo = $_POST ["sexo"];
$fotoperfil = $_FILES ["foto_de_perfil"];
$autorizacao = $_FILES ["autorizacao_menor"];
$telefone = $_POST ["tel_usr"];
$rua = $_POST ["rua_end_usr"];
$bairro = $_POST ["bair_end_usr"];
$complemento = $_POST ["compl_end_usr"];
$cidade = $_POST ["compl_end_usr"];
$usoremedio = $_POST ["uso_medicamento"];
$nomeremedio = $_POST ["nome_medicamento_uso"];
$horarioremedio = $_POST ["harario_medicamento_uso"];
$alergiaremedio = $_POST ["alergico_a_medicamento"];
$nomealergiaremedio = $_POST ["nome_medicamento_alergico"];
$alergiaalimento = $_POST ["alergico_a_alimento"];
$nomealergiaalimento = $_POST ["nome_alimento_alergico"];
$fobia = $_POST ["tenho_fobia"];
$nomefobia = $_POST ["nome_fobia"];
$pagamento = $_POST ["forma_de_pagamento"];
$fedback = $_POST ["fedback"];
$mailin = $_POST ["mailin_acamps_2018_even"];
$litermo = $_POST ["li_o_termo"];

/*-x---BANCO DE DADOS---x-*/
/*--CONEXÃO--*/
$mysqli = new mysqli ( 'localhost' , 'admin' , 'admin' , 'usrs' );
if ( $mysqli->connect_errno ) {
	echo "Ocorreu um erro com a conexão ao servidro, favor contatar o administrador do site." ;
	echo "Detalhes do erro: \n";
	echo "Númeor do erro: " . $mysqli->connect_errno . "\n" ;
	echo "Descrição do erro: " . $mysqli->connect_error . "\n" ;
	exit;
}
/*--QUERY--*/
$sql = "INSERT INTO `inscritos` ( `nome` , `email` , `sobrenome` , `aniversario` , `sexo` , `foto perfil` , `autorização` , `telefone` , `rua` , `bairro` , `complemento` , `cidade` , `uso medicamento` , `nome do médicamento` , `horário do remédio` , `alergia a medicamento` , `medicamento alergia` , `alergia a alimento` , `alimento alergia` , `fobia` , `nome da fobia` , `pagamento` , `fedback` , `Mailin` , `Termo` , `id` )
VALUES ('$nome', '$email', '$sobrenome', '$aniversario', '$sexo', '$fotoperfil', '$autorizacao', '$telefone', '$rua', '$bairro', '$complemento', '$cidade', '$usoremedio', '$nomeremedio', '$horarioremedio', '$alergiaremedio', '$nomealergiaremedio', '$alergiaalimento', '$nomealergiaalimento', '$fobia', '$nomefobia', '$pagamento', '$fedback', '$mailin', '$litermo', '')";
if (! $result = $mysqli->query ( $sql )) {
	echo "Ocorreu um erro na query, favor entrar em contato com o administrador do site." ;
	echo "Pesquisa: " . $sql . "\n" ;
	echo "Númeor do erro: " . $mysqli->connect_errno . "\n" ;
	echo "Descrição do erro: " . $mysqli->connect_error . "\n" ;
	exit;	
}
if ( $result->num_rows === 0 ) {
	echo "Não foi possivél fazer a inscrição, a linha está vazia. Por favor entre em contato com o administrador do site";
	exit;
}
$incrito = $result->mysqli_fetch_array ();
echo "Parabéns, " . $inscrito [ 'nome' ] . " " . $inscrito [ 'sobrenome' ] . "." ;
?>


<!--HTML-><!DOCTYPE html>
<html lang="en">
<head>
	<?php include 'vars.php'; echo $header; ?>
	<title>Inscrição Confirmada - Parabéns</title>
</head>
<body>
	<div>
		<div>
			<?php include 'vars.php'; echo $menu; ?>
		</div>
<!--MENSAGEM->		<div>
			<div><?php echo "<h1>Parabéns, ".$nome."!</h1>"; ?></div>
			<div>
				<?php echo "<p>Recebemos sua inscrição, obrigado por participar do acampamento! Assim que analizarmos toda sua documentação, iremos te enviar o boleto em seu e-mail ".$email.".</p>".
				"<p
				>"."</p>"; ?>
			</div>
		</div>
<!--CONTATOS->		<div>
			<?php include 'vars.php'; echo $contatos; ?>
		</div>
	</div>
<?php include 'vars.php'; echo $js; ?>
</body>
</html>