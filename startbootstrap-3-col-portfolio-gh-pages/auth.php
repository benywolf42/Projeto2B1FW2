<?php
    // error_reporting(E_ALL);

    require('funcoes.php');
    require_once('conexaoBanco.php');

    $login = $_POST['userid'];
    $pwd = $_POST['pwd'];
    $md5 = md5($pwd.'adocao');

    $sql = "SELECT senha FROM Usuario 
    WHERE login = " . "'". $login. "' ".  "and ". "senha ="."'".$md5."'";

    $result = mysqli_query($conn, $sql);

    $row = mysqli_fetch_array($result);

    if ($row[0] == $md5) {
        criaSessao();
        $_SESSION["login"] = $login;
    } else {
        header ( 'Location: ' . $dominio . 'login.php?erro=1' );
    }

?>
