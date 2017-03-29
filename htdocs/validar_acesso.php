<?php

session_start();

require_once('bd.class.php');

$usuario 	= $_POST['usuario'];
$senha 		= md5($_POST['senha']);

$sql = " SELECT id, usuario, email FROM usuarios WHERE usuario = '$usuario' AND senha = '$senha' ";

$objBd = new bd();
$objBd->conecta_mysql();

$resultado_id = mysql_query($sql);

if($resultado_id){

	$dados_usuario = mysql_fetch_array($resultado_id);

	if(isset($dados_usuario['usuario'])){

		$_SESSION["id_usuario"]	= $dados_usuario['id'];
		$_SESSION["usuario"]	= $dados_usuario['usuario'];
		$_SESSION["email"]		= $dados_usuario['email'];

		header("Location: home.php");
		
	} else {
		header("Location: index.php?erro=1");
	}
	

} else {
	echo 'Erro na execução da consulta, favor entrar em contato com o admin do site';
}

// erro: false
// resource

?>