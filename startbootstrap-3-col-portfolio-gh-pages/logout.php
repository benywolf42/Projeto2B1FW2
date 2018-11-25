<?php
    session_start();
    session_destroy(); 
    header ( 'Location: ' . $dominio . 'login.php' );
?>