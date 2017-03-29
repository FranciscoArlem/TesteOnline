<?php

class bd {

	//host
	private $host = 'mysql.hostinger.com.br';
	//usuario
	private $user = 'u840684955_admin';
	//senha
	private $password = '123456';
	//banco de dados
	private $database = 'u840684955_exd';

	public function conecta_mysql(){

		$con = mysql_connect($this->host, $this->user, $this->password) or die("Erro ao conectar ao servidor: ".mysql_error());
		mysql_select_db($this->database) or die("Erro ao selecionar o banco de dados: ".mysql_error());

		mysql_query("SET NAMES 'utf8'");
		mysql_query("SET character_set_connection=uf8");
		mysql_query("SET character_set_client=uf8");
		mysql_query("SET character_set_results=uf8");

		return $con;

	}

}


?>