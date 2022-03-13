<?php
  require("../Assets/classes/funcao.php");
  if (!file_exists('fotos')) {
  mkdir('fotos', 0777);
  }
  
  
  $conexao = new mysqli("localhost","root","","chat");
  /* se enviar a foto, insere o nome da foto no banco de dados */
  $caminho = 'fotos/'. $_FILES['file']['name'];
  $usuario = $_SESSION["usuario"];
  move_uploaded_file($_FILES['file']['tmp_name'], $caminho); 
  mysqli_query($conexao,"INSERT INTO fotos(usuario,foto)VALUES('$usuario','$caminho')");
  echo "success";
  die();
  
  
  
  