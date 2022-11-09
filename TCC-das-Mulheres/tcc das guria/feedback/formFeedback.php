<?php
   include '../conexao/conecta.php';
   if ($_GET['id']) {
    $id=$_GET['id'];
     $sql="SELECT id_feedback, obs, fk_id_produto FROM tb_cliente WHERE id_feedback=$id";
     $resultado=mysqli_query($conexao,$sql);
     if ($resultado==false) {
       die("Erro: ".mysqli_error($conexao));
      } else
      {
        $item=mysqli_fetch_array($resultado);
      } 
     
   }

   $sqlproduto="SELECT id_produto, nm_produto, local_img, desc_produto FROM tb_produto ORDER BY nm_produto";
   $resultadoProduto=mysqli_query($conexao,$sqlproduto);
   ?>
   <meta charset="utf-8">
   <h2>Adicione um comentário</h2>
   <a href="formListaFeedback.php">Comentários</a> <br> <br>
<form method="post" action="GravaFeedback.php">
<?php
  if ($_GET['id'])  {
    ?>
      <label>ID: </label> <br>
      <input type="TEXT " name="id" readonly="readonly" value=<?php echo $item['id_feedback'] ?> /> <br> <br>
<?php     
  }
  ?>
  <label>Obs:</label> <br>
  <input type="TEXT" name="obs" value=<?php echo $item['obs']?> /> <br> <br>
 <label>Produto:</label> <br>

 <select  name="produto">
  <option value="produto">Selecione</option>
  <?php 
   while ($itemProduto=mysqli_fetch_array($resultadoProduto)) {
    if ($itemProduto['id_produto']==$item['fk_id_produto'])
    {
      echo "<option value='$itemProduto[id_produto]' selected='selected'>";
    }else
    {
      echo "<option value='$itemProduto[id_produto]' >";
    }
    echo $itemProduto['nm_produto'];
    echo "</option>";

   }
   ?>

 </select>
  <br><br>
  <input type="submit" name="Salvar" value="Salvar">
</form>