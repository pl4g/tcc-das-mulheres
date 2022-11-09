;<?php
   include '../conexao/conecta.php';
   if ($_GET['id']) {
    $id=$_GET['id'];
     $sql="SELECT id_cliente, nm_cliente, email_cliente, senha, dt_cliente, CPF_cliente, endereco_cliente, numero_cliente, CEP_cliente, fk_id_cidade FROM tb_cliente WHERE id_cliente=$id";
     $resultado=mysqli_query($conexao,$sql);
     if ($resultado==false) {
       die("Erro: ".mysqli_error($conexao));
      } else
      {
        $item=mysqli_fetch_array($resultado);
      } 
     
   }

   $sqlcidade="SELECT id_cidade, nm_cidade, uf_cidade FROM tb_cidade ORDER BY nm_cidade";
   $resultadoCidade=mysqli_query($conexao,$sqlcidade);
    ?>
   <meta charset="utf-8">
   <h2>Cadastro de Clientes</h2>
   <a href="formListaCliente.php">Lista de Clientes</a> <br> <br>
<form method="post" action="GravaCliente.php">
<?php
  if ($_GET['id'])  {
    ?>
      <label>ID: </label> <br>
      <input type="TEXT " name="id" readonly="readonly" value=<?php echo $item['id_cliente'] ?> /> <br> <br>
<?php     
  }
  ?>
  <label>Nome:</label> <br>
  <input type="TEXT" name="nome" value=<?php echo $item['nm_cliente']?> /> <br> <br>
  <label>Email:</label> <br>
  <input type="TEXT" name="email" value=<?php echo $item['email_cliente']?> /> <br> <br>
  <label>Senha:</label> <br>
  <input type="TEXT" name="senha" value=<?php echo $item['senha']?> /> <br> <br>
  <label>Data de Nascimento:</label> <br>
  <input type="TEXT" name="data" value=<?php echo $item['dt_cliente']?> /> <br> <br>
  <label>CPF:</label> <br>
  <input type="TEXT" name="CPF" value=<?php echo $item['CPF_cliente']?> /> <br> <br>
  <label>Endereço:</label> <br>
  <input type="TEXT" name="endereco" value=<?php echo $item['endereco_cliente']?> /> <br> <br>
  <label>Número de Telefone:</label> <br>
  <input type="TEXT" name="numero" value=<?php echo $item['numero_cliente']?> /> <br> <br>
  <label>CEP:</label> <br>
  <input type="TEXT" name="CEP" value=<?php echo $item['CEP_cliente']?> /> <br> <br>
 <label>Cidade</label> <br>

 <select  name="cidade">
  <option value="cidade">Selecione</option>
  <?php  
   while ($itemCidade=mysqli_fetch_array($resultadoCidade)) {
    if ($itemCidade['id_cidade']==$item['fk_id_cidade'])
    {
      echo "<option value='$itemCidade[id_cidade]' selected='selected'>";
    }else
    {
      echo "<option value='$itemCidade[id_cidade]' >";
    }
    echo $itemCidade['nm_cidade'];
    echo "</option>";

   }
   ?>

 </select>
  <br><br>
  <input type="submit" name="Salvar" value="Salvar">
</form>