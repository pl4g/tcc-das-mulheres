<?php
$drive='mysql';
$host='localhost';
$usuario='root';
$senha='';
$dbname='tcctmm';
$conexao=mysqli_connect($host,$usuario,$senha,$dbname);



if ($conexao==false) {
	die( "Erro: ".mysqli_connect_error());
}

?>