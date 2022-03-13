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
			<form action="#" method="POST" enctype="multipart/form-data">
				<div class="container">
					<div class="item">
						<label>Cadastro</label>
				
					<div class="itens">
						<input type="text" name="name" placeholder="Set Your Name..." required="required" >
						<span class="fa fa-user" ></span>
					</div>
				
					<div class="itens">
						<input type="password" name="password" id="password"  placeholder="Set Your Password..." required="required" >
						<span class="fa fa-eye" id="change" ></span>
					</div>
					
					<div class="submit">
						<button class="btn" type="submit" name="cadastrar">Cadastrar</button>
					</div>
				</div>
			</div>
		</form>
		<?php require_once("./Assets/php/cadastro.php");?>
		<script type="text/javascript" src="./Assets/js/password.js"></script>
</body>
</html>