<?php
 include '../conexao/conecta.php';
  $sql = "SELECT id_compra, desc_img, tamanho_img, formato_img, preco_produto, medidas_img, tonalidade_img, line_compra FROM tb_compra ";
  $resultado=mysqli_query($conexao, $sql);
   if($resultado==false) {
   	 die("Erro: ".mysqli_error($conexao));
   }

?>
<meta charset="utf-8">
<h2> Lista de Compra</h2>
<a href="formCompra.php">Novo</a>
<table border="1">
	<tr>
		<th>ID </th>
		<th>Descrição </th>
    <th>Tamanho </th>
    <th>Formato </th>
    <th>Medida </th>
    <th>Tonalidade </th>
    <th>Line </th>
    <th colspan="2">Ações </th>
	</tr>
	<?php
         while ( $item=mysqli_fetch_array($resultado)) {
         	echo "<tr>";
         	echo "<td> $item[id_compra] </td>";
         	echo "<td> $item[desc_img] </td>";
          echo "<td> $item[tamanho_img] </td>";
          echo "<td> $item[formato_img] </td>";
          echo "<td> $item[medidas_img] </td>";
          echo "<td> $item[tonalidade_img] </td>";
          echo "<td> $item[line_compra] </td>";

         	echo "<td><a href='formCompra.php?id=$item[id_compra]'>Editar</a></td>";
         	echo "<td><a href='formExcluirCompra.php?id=$item[id_compra]'>Excluir</a></td>";
         }
?>
</table>