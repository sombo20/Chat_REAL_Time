<?php
error_reporting(0);
require("../Assets/classes/funcao.php");
	if(!$_SESSION["usuario"]){
	  echo "Não tens permissão pra ficar aqui faz o login<a href='../'>Logar</a>";
	}else{?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="stylesheet"  href="../Assets/css/style.css">
	<link rel="stylesheet" href="../Assets/font-awesome-4.7.0/css/font-awesome.min.css">
	<script type="text/javascript" src="http://localhost:8080/CHAT-REAL-TIME/Assets/js/jquery.js"></script>

</head>
<body>
	<div class="chat">
		<div class="header">
			<div class="name">
				<span><?php echo $_SESSION["usuario"][0]; ?></span>
			</div>
			<div class="title">
				<span>Shitpost</span>
			</div>
			<div class="online">
				<span class="fa fa-circle"> </span>
			</div>
			
			<div class="logout">
				<a href="../Assets/php/logout.php"><span class="fa fa-sign-in"> </span></a>
			</div>
		</div>
		
		<div class="section">
			<iframe  name="iframe" id="iframe" width='95%' height='425px' src='iframe.php' height='100%'></iframe>
		</div>
		
		<div class="footer">
		  <form  onsubmit="return false;">
		  <div class="all">
			<div class="write">
				<textarea class="sms" id="mensagem" name="mensagem" placeholder="Escrever algo..." ></textarea>
			</div>
			
			<div class="itens">
				<div class="btn">
					<button type="button" name="enviar_sms"  class="fa fa-send fa-2x" id="mandar"> </button>
				</div>
				
				<div class="foto">
					<span class="fa fa-upload  fa-2x" id="upload" ></span>
				</div>
			</div>
		</div>
		</form>
		</div>
		
		<div class="modal">
		<form  onsubmit="return false;" action="" method="POST" enctype="multipart/form-data">
		<div class="uploader">
		<label>Enviar Foto</label>
		<input type="file" name="file" class="file" required accept="image/*"></p>
		<input type="submit" name="submit" class="submit" value="Enviar">
		<button id="close">Cancelar</button>
		</div>
		</form>
		</div>
	</div>
	
	<script type="text/javascript" src="http://localhost:8080/CHAT-REAL-TIME/Assets/js/main.js"></script>
</body>
</html>
<?}?>
