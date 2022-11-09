<?php
include '../conexao/conecta.php';
$sql="SELECT feed.id_feedback, feed.obs, feed.fk_id_produto, pro.nm_produto FROM tb_feedback feed INNER JOIN tb_produto pro ON pro.id_produto=feed.fk_id_produto";
$resultado= mysqli_query($conexao,$sql);
if ($resultado==false) {
	die("Erro: ".mysqli_error($conexao));
}
?>
<meta charset="utf-8">
<h2> Lista de Comentários</h2>
<a href="formFeedback.php">Novo</a>
<table border="1">
	<tr>
		<th>ID </th>
		<th>Comentário</th>
      <th>Produto </th>
      <th colspan="2">Ações </th>

	</tr>
	<?php
         while ( $item=mysqli_fetch_array($resultado)) {
         	echo "<tr>";
         	echo "<td> $item[id_feedback] </td>";
         	echo "<td> $item[obs] </td>";
         	echo "<td> $item[nm_produto] </td>";
         	echo "<td><a href='formFeedback.php?id=$item[id_feedback]'>Editar</a></td>";
         	echo "<td><a href='formExcluirFeedback.php?id=$item[id_feedback]'>Excluir</a></td>";
         }
?>
</table>