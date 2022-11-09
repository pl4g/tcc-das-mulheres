<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="CSS/style.css">
	<link rel="stylesheet" type="text/css" href="CSS/criarConta.css">


	<title>Document</title>
</head>
<body>

<?php
	include 'conecta.php';
	$sqlcidade="SELECT id_cidade, nm_cidade, uf_cidade FROM tb_cidade ORDER BY nm_cidade";
   $resultadoCidade=mysqli_query($conexao,$sqlcidade);
	?>
<ul>
	<img src="IMG/logo3.png" alt="logo" width="75px" height="75x">
  <li><a href="Criar conta.php" id="cp-criar-conta">Criar Conta</a></li>
  <li><a href="Entrar.php" id="cp-entrar">Entrar</a></li>
  <li><a href="sobre.php">Sobre</a></li>
</ul>

<div id="CriarConta">
	<form class="card" action="tcc das guria/cliente/gravaCliente.php" method="post">
	<div class="card-header">
	<h2>Criar Conta</h2>
</div>
		<div class="card-content">
			<div class="card-content-area">
				<label> Usuário:</label>
				<input type="text" name="nome" autocomplete="off" placeholder="Nome de Usuario">
			</div>
			<div class="card-content-area">
				<label>Email:</label>
				<input type="email" name="email" autocomplete="off"  placeholder="Email">
			</div>
            <div class="card-content-area">
				<label>Senha:</label>
				<input type="password" name="senha" autocomplete="off"  placeholder="Senha">
			</div>
            <div class="card-content-area">
				<label>Data de Nascimento:</label>
				<input type="date" name="data" autocomplete="off"  placeholder="Data de Nascimento">
			</div>
			<div class="card-content-area">
				<label>CPF:</label>
				<input type="text" name="CPF" autocomplete="off"  placeholder="CPF">
			</div>

			<div class="card-content-area">

				<label>Cidade: </label>
				<select name="cidade">
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
		</div>
		</div>

		<div class="card-footer">
			<input type="submit" value="Criar" class="submit">
			<a href="Entrar.php" class="entrar">Já tem conta, entre aqui</a>
		</div>
		</form>
</div>
</body>
</html>