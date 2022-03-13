<?php
  require("../Assets/classes/classe.chat.php");
  $mensagem = new enviarSms;
  $sms = $_GET["mensagem"];
  $mensagem->Enviar($_SESSION["usuario"],$sms);
?>