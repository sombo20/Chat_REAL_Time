<?php
session_start();
	function AntiSql($Valor){
		$Valor = mysql_real_escape_string($Valor);
		return($Valor);
	}
	
	function Alertar($valor){
	  echo "<script type='text/javascript'>alert(".$valor.")</script>";
	}
	
	
	  $_SESSION["usuario"] = $_SESSION["user"];
	
?>