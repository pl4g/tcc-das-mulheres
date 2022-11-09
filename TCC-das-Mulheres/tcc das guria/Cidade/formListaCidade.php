<?php
 include '../conexao/conecta.php';
  $sql = "SELECT id_cidade, nm_cidade, uf_cidade FROM tb_cidade ";
  $resultado=mysqli_query($conexao, $sql);
   if($resultado==false) {
   	 die("Erro: ".mysqli_error($conexao));
   }

?>
<meta charset="utf-8">
<h2> Lista de Cidades</h2>
<a href="formCidade.php">Novo</a>
<table border="1">
	<tr>
		<th>ID </th>
		<th>Cidade </th>
    <th>UF </th>
		<th colspan="2">Ações</th>
	</tr>
	<?php
         while ( $item=mysqli_fetch_array($resultado)) {
         	echo "<tr>";
         	echo "<td> $item[id_cidade] </td>";
         	echo "<td> $item[nm_cidade] </td>";
          echo "<td> $item[uf_cidade] </td>";
         	echo "<td><a href='formCidade.php?id=$item[id_cidade]'>Editar</a></td>";
         	echo "<td><a href='formExcluirCidade.php?id=$item[id_cidade]'>Excluir</a></td>";
         }
?>
</table>