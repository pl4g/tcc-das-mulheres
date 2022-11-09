<?php
include '../conexao/conecta.php';
$id=$_GET['id'];
$sql="DELETE FROM tb_feedback WHERE id_feedback=$id";
mysqli_query($conexao,$sql);
header ('location:formListaFeedback.php');
?>