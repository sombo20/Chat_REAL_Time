<?php
require_once("./Assets/classes/class.usuario.php");
		if(isset($_POST["cadastrar"])){
			//$cadastrar = new conexao();
			$cadastrar = new usuario();
			$cadastrar->cadastrar($_POST["name"],$_POST["password"]);
		}
?>