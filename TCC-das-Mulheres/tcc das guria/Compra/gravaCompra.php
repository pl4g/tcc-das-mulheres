<?php
include '../conexao/conecta.php';
$desc_img=$_POST['desc'];
$tamanho_img=$_POST['size'];
$formato_img=$_POST['formato'];
$medidas_img=$_POST['medidas'];
$tonalidade_img=$_POST['tonalidades'];
$line_compra=$_POST['line'];

if ($_POST['id']) {
	$id=$_POST['id'];
	$sql="UPDATE tb_compra SET desc_img='$desc_img', tamanho_img='$tamanho_img', formato_img='formato_img', medidas_img='$medidas_img', tonalidade_img='$tonalidade_img', line_compra='$line_compra'  WHERE id_compra=$id";
}
else {

$sql="INSERT INTO tb_compra (desc_img, tamanho_img, formato_img, medidas_img, tonalidade_img, line_compra) VALUES ('$desc_img', '$tamanho_img', '$formato_img', '$medidas_img', '$tonalidade_img', '$line_compra')";

}
 echo $sql;

if (mysqli_query ($conexao,$sql)==false) {
	die ("Erro: ".mysqli_error($conexao));

}
header("location:formListaCompra.php");


?>