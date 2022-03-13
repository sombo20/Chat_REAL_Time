<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link rel="stylesheet"  href="./Assets/css/style.css">
<link rel="stylesheet" href="./Assets/font-awesome-4.7.0/css/font-awesome.min.css">
</head>
<body>
			<form action="#"  method="POST" enctype="multipart/form-data">
				<div class="container">
					<div class="item">
						<label>Login</label>
				
					<div class="itens">
						<input type="text" name="name" placeholder="Set Your Name...">
						<span class="fa fa-user" ></span>
					</div>
				
					<div class="itens">
						<input type="password" name="password" id="password"  placeholder="Set Your Password...">
						<span class="fa fa-eye" id="change" ></span>
					</div>
				
					<div class="submit">
						<button class="btn" type="submit" name="entrar">Entrar</button>
					</div>
				</div>
			</div>
		</form>
		<a href="cadastroForm.php" >Cadastrar</a>
		<?php 
		require_once("./Assets/php/validar.php");
		?>
		<script type="text/javascript" src="./Assets/js/password.js"></script>
</body>
</html>