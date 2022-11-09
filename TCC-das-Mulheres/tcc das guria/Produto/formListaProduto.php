<?php
 include '../conexao/conecta.php';
  $sql = "SELECT id_produto, nm_produto, local_img, desc_produto FROM tb_produto ";
  $resultado=mysqli_query($conexao, $sql);
   if($resultado==false) {
   	 die("Erro: ".mysqli_error($conexao));
   }

?>
<meta charset="utf-8">
<h2> Lista de Produtos</h2>
<a href="formProduto.php">Novo</a>
<table border="1">
	<tr>
		<th>ID </th>
		<th>Produto </th>
    <th>Imagem </th>
    <th>Descrição </th>

		<th colspan="2">Ações</th>
	</tr>
	<?php
         while ( $item=mysqli_fetch_array($resultado)) {
         	echo "<tr>";
         	echo "<td> $item[id_produto] </td>";
         	echo "<td> $item[nm_produto] </td>";
          echo "<td> $item[local_img] </td>";
          echo "<td> $item[desc_produto] </td>";
         	echo "<td><a href='formProduto.php?id=$item[id_produto]'>Editar</a></td>";
         	echo "<td><a href='formExcluirProduto.php?id=$item[id_produto]'>Excluir</a></td>";
         }
?>
</table>