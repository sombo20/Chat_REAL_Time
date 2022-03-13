<?php
require("../classes/funcao.php");
 unset($_SESSION["user"]);
 header('Refresh: 0; URL = http://localhost:8080/CHAT-REAL-TIME/');
?>