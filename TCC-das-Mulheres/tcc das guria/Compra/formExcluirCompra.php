<?php
include '../conexao/conecta.php';
$id=$_GET['id'];
$sql="DELETE FROM tb_compra WHERE id_compra=$id";
mysqli_query($conexao,$sql);
header ('location:formListaCompra.php');
?>