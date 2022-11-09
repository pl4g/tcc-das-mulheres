<?php
include '../conexao/conecta.php';
$nm_produto=$_POST['produto'];
$local_img=$_POST['img'];
$desc_produto=$_POST['desc'];


if ($_POST['id']) {
	$id=$_POST['id'];
	$sql="UPDATE tb_produto SET nm_produto='$nm_produto', local_img='$local_img', desc_produto='$desc_produto' WHERE id_produto=$id";
}
else {

$sql="INSERT INTO tb_produto (nm_produto, local_img, desc_produto) VALUES ('$nm_produto', '$local_img', '$desc_produto')";

}

if (mysqli_query ($conexao,$sql)==false) {
	die ("Erro: ".mysqli_error($conexao));

}
header("location:formListaProduto.php");


?>