<?php
	require_once("./Assets/classes/class.usuario.php");
		if(isset($_POST["entrar"])){
			//$cadastrar = new conexao();
			$validar = new usuario();
			$validar->logar($_POST["name"],$_POST["password"]);
			
		}
		
	
?>
