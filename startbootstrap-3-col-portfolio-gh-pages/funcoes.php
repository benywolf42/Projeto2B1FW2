<?php
//faz referencia a sessão previamente criada OU inicia a criação da sessão
function refSessao() {
    session_cache_expire(1);
    session_start ();
	return;
}

//cria a seção após autenticação do usuário
function criaSessao() { 
    refSessao ();
    $_SESSION["autenticacao"] = "a";
	header ( 'Location: ' . 'panel.php' );
}

?>