<?php
include '../conexao/conecta.php';
$sql="SELECT cli.id_cliente, cli.nm_cliente, cli.email_cliente, cli.senha, cli.dt_cliente, cli.CPF_cliente,  cli.endereco_cliente, cli.numero_cliente, cli.CEP_cliente, cli.fk_id_cidade, cid.nm_cidade, cid.uf_cidade FROM tb_cliente cli INNER JOIN tb_cidade cid ON cid.id_cidade=cli.fk_id_cidade";
$resultado= mysqli_query($conexao,$sql);
if ($resultado==false) {
	die("Erro: ".mysqli_error($conexao));
}
?>
<meta charset="utf-8">
<h2> Lista de Clientes</h2>
<a href="formCliente.php">Novo</a>
<table border="1">
	<tr>
		<th>ID </th>
		<th>Cliente</th>
		<th>CPF</th>
		<th>Número de Telefone</th>
		<th>Cidade</th>
		<th>UF</th>
      <th colspan="2">Ações </th>

	</tr>
	<?php
         while ( $item=mysqli_fetch_array($resultado)) {
         	echo "<tr>";
         	echo "<td> $item[id_cliente] </td>";
         	echo "<td> $item[nm_cliente] </td>";
         	echo "<td> $item[CPF_cliente] </td>";
         	echo "<td> $item[numero_cliente] </td>";
         	echo "<td> $item[nm_cidade] </td>";
         	echo "<td> $item[uf_cidade] </td>";

         	echo "<td><a href='formCliente.php?id=$item[id_cliente]'>Editar</a></td>";
         	echo "<td><a href='formExcluirCliente.php?id=$item[id_cliente]'>Excluir</a></td>";
         }
?>
</table>