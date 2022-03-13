<?php
error_reporting(0);

 require_once("class.conexao.php");
 require_once("funcao.php");
 
 class usuario extends conexao{
 
 	public  function cadastrar($usuario, $senha){
 	  
 	  $usuario = AntiSql($usuario);
 	  $senha = md5($senha);
 	  
 	  if(empty($usuario)){
 	  Alertar("O campo USUARIO não pode ficar em Branco"); 
 	  }
 	  if(empty($senha)){
 	   Alertar("O campo SENHA não pode ficar em Branco");
 	  
 	  }
 	  
 	  $insert = $this->conexao->query("INSERT INTO users(usuario,senha)VALUES('$usuario','$senha')");  
 	  
 	  
 	  if($insert){
 	  		echo "VOCE FOI CADASTRADO COM SUCESSO, CLIQUE AQUI PARA LOGAR <a href='index.php'>Logar</a>";
 	    }else{
 	    	echo "Erro";
 	    }
 	  }
 	  
 	  public function logar($usuario,$senha){
 	  
 	  		$usuario = AntiSql($usuario);
 	  		$senha = md5($senha);
 	  		
 	  		if(empty($usuario)){
 	  		Alertar("O campo USUARIO não pode ficar em Branco");
 	  	   
 	  		}
 	  		if(empty($senha)){
 	  		Alertar("O campo SENHA não pode ficar em Branco");
 	  		exit;
 	  		}
 	  		
 	  		$sql = $this->conexao->query("SELECT * FROM users WHERE usuario='$usuario' AND senha='$senha' ");
 	  		$cont = mysqli_num_rows($sql);
 	  		$reSql = mysqli_fetch_assoc($sql);
 	  
 	  		if($cont == 0){
 	  		
 	  			echo "<br>Senha ou nome invalido. tente novamente.";
 	  		
 	  		}else if($cont == 1 ){
 	  				$_SESSION["user"] = ucfirst($usuario);
 	  		echo "<script> location.href='./chat/'; </script>";
 	  								$_SESSION["user"] = ucfirst($usuario);
 	  		}else{
 	  		echo "Ocorreu algum erro inesperado, tente novamente mais tarde";	
 	  		}
 	  	}
 	}
 