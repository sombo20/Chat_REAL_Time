<?php
	require_once("class.conexao.php");
	require_once("funcao.php");
	
	class enviarSms extends conexao {
	  
	  public function Enviar($usuario,$mensagem){
	    $usuario = AntiSql($usuario);
	    $mensagem = AntiSql($mensagem);
	    
	    $inserir = $this->conexao->query("INSERT INTO mensagens(usuario,mensagem)VALUES('$usuario','$mensagem')");
	    
	    if($inserir){
	      //echo "Enviada";
	    }else{
	      echo "<script type='text/javascript'>alert('Erro no envio da mensagem')</script>";
	    }
	  }
	  
	  public function MostraSms(){
	    $mostra = $this->conexao->query("SELECT*FROM mensagens");
	    
	    while($dados = mysqli_fetch_object($mostra)){
	      
	     echo '<div class="mensagem">';
	     echo '<div class="user">';
	     echo '<span><b>'.$dados->usuario.'</b></span>';
	     echo '</div>';
	     echo '<div class="texto">';
	     echo '<span>'.$dados->mensagem.'</span>';
	     echo '</div>';
	     echo '</div>';
	    }
	  }
	  
	  
	  public function MostraFoto(){
	  $mostra = $this->conexao->query("SELECT*FROM fotos");
	  
	  while($dados = mysqli_fetch_object($mostra)){
	  
	  echo '<div class="mensagem">';
	  echo '<div class="user">';
	  echo '<span><b>'.$dados->usuario.'</b></span>';
	  echo '</div>';
	  echo '<div class="imagem">';
	  echo '<span><img src='.$dados->foto.'></span>';
	  echo '</div>';
	  echo '</div>';
	  
	  }
	  }
	 
	 }
	 
?>