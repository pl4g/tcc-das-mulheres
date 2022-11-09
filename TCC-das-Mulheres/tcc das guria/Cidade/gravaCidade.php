<?php
include '../conexao/conecta.php';
$nm_cidade=$_POST['cidade'];
$uf_cidade=$_POST['uf'];

if ($_POST['id']) {
	$id=$_POST['id'];
	$sql="UPDATE tb_cidade SET nm_cidade='$nm_cidade', uf_cidade='$uf_cidade' WHERE id_cidade=$id";
}
else {

$sql="INSERT INTO tb_cidade (nm_cidade, uf_cidade) VALUES ('$nm_cidade', '$uf_cidade')";

}

if (mysqli_query ($conexao,$sql)==false) {
	die ("Erro: ".mysqli_error($conexao));

}
header("location:formListaCidade.php");


?>