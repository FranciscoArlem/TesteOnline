<?php

require_once('bd.class.php');

$usuario	= $_POST['usuario'];
$email 		= $_POST['email'];
$senha		= md5($_POST['senha']);

$objBd = new bd();
$objBd->conecta_mysql();

$usuario_existe = false;
$email_existe = false;

$sql = " select * from usuarios where usuario = '$usuario' ";
if($resultado_id = mysql_query($sql)){
	$dados = mysql_fetch_array($resultado_id);
	if(isset($dados['usuario'])){
		$usuario_existe = true;
	}
} else {
	echo 'Erro ao tentar localizar o registro de usuário no banco de dados';
}

$sql = " select * from usuarios where email = '$email' ";
if($resultado_id = mysql_query($sql)){
	$dados = mysql_fetch_array($resultado_id);
	if(isset($dados['usuario'])){
		$email_existe = true;
	}
} else {
	echo 'Erro ao tentar localizar o registro de email no banco de dados';
}

if($usuario_existe || $email_existe){

	$retorno_get = '';

	if($usuario_existe){
		$retorno_get.= "erro_usuario=1&";
	}

	if($email_existe){
		$retorno_get.= "erro_email=1&";
	}

	header("Location: inscrevase.php?".$retorno_get);
	die();
}

$sql = " insert into usuarios(usuario, email, senha)values('$usuario', '$email', '$senha') ";

if(mysql_query($sql)){
	echo 'Usuário foi registrado com sucesso!';
} else {
	echo 'Erro ao tentar inserir o registro';
}

?>