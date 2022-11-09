<?php 
   include '../conexao/conecta.php';
   if ($_GET['id']) {
    $id=$_GET['id'];
     $sql="SELECT id_cidade, nm_cidade, uf_cidade FROM tb_cidade WHERE id_cidade=$id";
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
   <h2>Cadastro de Cidades</h2>
   <a href="formListaCidade.php">Lista de Cidades</a> <br> <br>
<form method="post" action="GravaCidade.php">
<?php
  if ($_GET['id'])  {
    ?>
      <label>ID: </label> <br>
      <input type="TEXT " name="id" readonly="readonly" value=<?php echo $item['id_cidade'] ?> > <br> <br>
<?php     
  }
  ?>
  <label>Cidade:</label> <br>
  <input type="TEXT" name="cidade" value=<?php echo $item['nm_cidade']?> > <br> <br>
  <label>UF:</label> <br>
  <input type="TEXT" name="uf" value=<?php echo $item['uf_cidade']?> > <br> <br>                                                      
  <input type="submit" name="Salvar" value="Salvar">
</form>