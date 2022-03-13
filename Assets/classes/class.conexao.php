<?php
	class conexao{
		protected $conexao;
		
		public function  __construct(){
			try{
			$this->conexao = new mysqli("localhost","root","","chat");
		  }catch(Expection $e){
		     echo "Erro".$e->getMessage();
		  }
		}
		
		public function ___destruct(){
		 // echo "Conexao concluida";
		}
	}
?>
