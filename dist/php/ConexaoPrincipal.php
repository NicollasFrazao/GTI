<?php
	//$host = '108.179.192.246';
	$host = 'localhost';
	$user = 'root';
	$pass = 'root';
	$banco = 'db_gti';

	/*$conexaoPrincipal = new Conexao();
	$conexaoPrincipal -> AbrirConexao($host, $user, $pass, $banco);*/
	
	
	try 
	{
		$conexaoPrincipal = new PDO("mysql: host=$host; dbname=$banco; charset=utf8", $user, $pass);
		$conexaoPrincipal -> exec("SET CHARACTER SET utf8");
		$conexaoPrincipal -> exec("SET time_zone = '-03:00'");
		
		$conexaoPrincipal -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $exe) 
	{
		echo 'Erro ao tentar conectar com o banco de dados: ' . $exe->getMessage();
	}
?>