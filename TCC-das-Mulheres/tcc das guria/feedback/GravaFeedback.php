<?php
include '../conexao/conecta.php';
$obs=$_POST['obs'];
$fk_id_produto=$_POST['produto'];

if ($_POST['id']) {
	$id=$_POST['id'];
	$sql="UPDATE tb_feedback SET obs='$obs', fk_id_produto=$fk_id_produto WHERE id_produto=$id";
}
else {

$sql="INSERT INTO tb_feedback (obs, fk_id_produto) VALUES ('$obs', $fk_id_produto)";

}

if (mysqli_query ($conexao,$sql)==false) {
	die ("Erro: ".mysqli_error($conexao));

}
header("location:formListaFeedback.php");


?>