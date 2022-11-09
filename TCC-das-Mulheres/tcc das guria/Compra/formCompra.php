<?php
   include '../conexao/conecta.php';
   if ($_GET['id']) {
    $id=$_GET['id'];
     $sql="SELECT id_compra, desc_img, tamanho_img, formato_img, medidas_img, tonalidade_img, line_compra FROM tb_compra WHERE id_compra=$id";
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
   <h2>Cadastro de Compras</h2>
   <a href="formListaCompra.php">Lista de Compras</a> <br> <br>
<form method="post" action="GravaCompra.php">
<?php
  if ($_GET['id'])  {
    ?>
      <label>ID: </label> <br>
      <input type="TEXT " name="id" readonly="readonly" value=<?php echo $item['id_compra'] ?> > <br> <br>
<?php     
  }
  ?>
  <label>Descrição da Imagem:</label> <br>
  <input type="TEXT" name="desc" value=<?php echo $item['desc_img']?> > <br> <br>
  <label>Tamanho da Imagem:</label> <! soma> <br>
  <select name="size"> 
    <option> Selecione </option>
    <option value="10x10">
      10x10
    </option>
    <option value="20x20">
      20x20
    </option>

  </select>

  <br> <br>

    <label>Formato da Imagem:</label> <! Não soma> <br>
  <select name="formato"> 
    <option> Selecione </option>
    <option value="JPG">
      JPG
    </option>
    <option value="JPEG">
      JPEG
    </option>
    <option value="PNG">
      PNG
    </option>
  </select>

     <br> <br>

     <label>Medidas da Imagem:</label> <! soma> <br>
  <select name="medidas"> 
    <option> Selecione </option>
    <option value="Face">
      Rosto
    </option>
    <option value="Busto">
      Busto
    </option> 
    <option value="Corpo inteiro">
      Corpo Inteiro
    </option>
  </select>
    <br> <br>


 <label>Traço da Imagem:</label> <! soma> <br>
  <select name="line"> 
    <option> Selecione </option>
    <option value="Rascunho">
      Rascunho
    </option>
    <option value="Lineart">
      LineArt
    </option>
    <option value="Simples">
      Pintura Simples
    </option>
    <option value="Completo">
      Completo
    </option>
  </select>
    <br><br>

    <label>Tons da Pintura:</label> <! Não soma><br>
  <select name="tonalidades"> 
    <option> Selecione </option>
    <option value="Pastel">
      Pastel
    </option>
    <option value="Escala de Cinza">
      Escala de Cinza
    </option>
    <option value="Vibrante">
      Vibrante
    </option>
    <option value="Monocromático">
      Monocromático
    </option>


  </select> <br> <br>

  
  <input type="submit" name="Salvar" value="Salvar">
</form>