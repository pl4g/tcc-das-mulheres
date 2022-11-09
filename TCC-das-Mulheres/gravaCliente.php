<?php
include 'conecta.php';
$nm_cliente=$_POST['nome']; 
$email_cliente=$_POST['email'];
$senha=$_POST['senha'];
$dt_cliente=$_POST['data'];
$CPF_cliente=$_POST['CPF'];
$fk_id_cidade=$_POST['cidade'];

if ($_POST['id']) {
	$id=$_POST['id'];
	$sql="UPDATE tb_cliente SET nm_cliente='$nm_cliente', email_cliente='$email_cliente', senha='$senha', dt_cliente='$dt_cliente', CPF_cliente='$CPF_cliente', endereco_cliente='$endereco_cliente', numero_cliente='$numero_cliente', CEP_cliente='$CEP_cliente', fk_id_cidade=$fk_id_cidade WHERE id_cliente=$id";
}
else {
$sql="INSERT INTO tb_cliente (nm_cliente, email_cliente, senha, dt_cliente, CPF_cliente, fk_id_cidade) VALUES ('$nm_cliente', '$email_cliente', '$senha', '$dt_cliente', '$CPF_cliente', $fk_id_cidade)";
}

if (mysqli_query($conexao,$sql)==false) {
	die ("Erro: ".mysqli_error($conexao));
}
header("location:../Entrar.php");


?>