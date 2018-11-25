<?php
    session_start();
    if (!$_SESSION["autenticacao"]) {
      header ( 'Location: ' . $dominio . 'login.php?erro=1' );
    }
?>