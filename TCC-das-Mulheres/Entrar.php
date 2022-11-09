<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="CSS/style.css">
	<link rel="stylesheet" type="text/css" href="CSS/entrar.css">


	<title>Entrar</title>
</head>
<body>
<ul class="p-t-25">
	<img src="IMG/logo3.png" alt="logo" width="75px" height="75x">
  <li><a href="Criar conta.php" id="cp-criar-conta">Criar Conta</a></li>
  <li><a href="Entrar.php" id="cp-entrar">Entrar</a></li>
  <li><a href="sobre.php">Sobre</a></li>
</ul>
<div id="Entrar">
	<form class="card">
		<div class="card-header">
			<h2>Entrar</h2>
		</div>
		<div class="card-content">
			<div class="card-content-area">
				<label for="email">Email</label>
				<input type="email" id="email" autocomplete="off">
			</div>
			<div class="card-content-area">
				<label for="password">Senha</label>
				<input type="password" id="password" autocomplete="off">
			</div>
		</div>
		<div class="card-footer">
			<input type="submit" value="Login" class="submit">
			<a href="#" class="recuperar_senha">Esqueceu a senha?</a>
		</div>
		<div class="card-footer"> <br>
			<a href="Criar conta.php" class="entrar">Não possue uma conta? entre aqui</a>
		</div>
		
	</form>
</div>
</body>
</html>