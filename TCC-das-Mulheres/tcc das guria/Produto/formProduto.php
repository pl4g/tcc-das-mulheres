<?php 
   include '../conexao/conecta.php';
   if ($_GET['id']) {
    $id=$_GET['id'];
     $sql="SELECT id_produto, nm_produto, local_img, desc_produto FROM tb_produto WHERE id_produto=$id";
     $resultado=mysqli_query($conexao,$sql);
     if ($resultado==false) {
       die("Erro: ".mysqli_error($conexao));
      } else
      {
        $item=mysqli_fetch_array($resultado);
      }
     
   }
   ?>
   <meta charset="utf-8">
   <h2>Cadastro de Produtos</h2>
   <a href="formListaProduto.php">Lista de Produtos</a> <br> <br>
<form method="post" action="GravaProduto.php">
<?php
  if ($_GET['id'])  {
    ?>
      <label>ID: </label> <br>
      <input type="TEXT " name="id" readonly="readonly" value=<?php echo $item['id_produto'] ?> > <br> <br>
<?php     
  }
  ?>
  <label>Produto:</label> <br>
  <input type="TEXT" name="produto" value=<?php echo $item['nm_produto']?> > <br> <br>
  <label>Imagem:</label> <br>
  <input type="TEXT" name="img" value=<?php echo $item['local_img']?> > <br> <br>
   <label>Descrição:</label> <br>
  <input type="TEXT" name="desc" value=<?php echo $item['desc_produto']?> > <br> <br>                                                      
  <input type="submit" name="Salvar" value="Salvar">
</form>