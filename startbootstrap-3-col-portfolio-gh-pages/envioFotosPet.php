<?php

session_start();
if (!$_SESSION["autenticacao"]) {
    header ( 'Location: ' . $dominio . 'login.php?erro=1' );
}

$diretorio = "Imagens/";

if(!is_dir($diretorio)){ 
	echo "Pasta $diretorio nao existe";
}else{
	$arquivo = isset($_FILES['arquivo']) ? $_FILES['arquivo'] : FALSE;
	for ($controle = 0; $controle < count($arquivo['name']); $controle++){
		
		$destino = $diretorio."/".$arquivo['name'][$controle];
		if(move_uploaded_file($arquivo['tmp_name'][$controle], $destino)){
			echo "Upload realizado com sucesso<br>"; 
		}else{
			echo "Erro ao realizar upload";
		}	
	}
}

$destino = "/".$destino;

$login =  $_SESSION["login"];

require_once('conexaoBanco.php');

/*$find_id_pet = mysqli_query($conn, "SELECT Pet_idPet FROM Pet WHERE nome_provisorio = '$????????'");
$id_pet = mysqli_fetch_array($find_id_pet);*/

$insertFotoPet = "INSERT INTO fotosPet (idfotosPet, linkFotoPerfil, Pet_idPet) VALUES (NULL, '$destino', 7)";
mysqli_query($conn, $insertFotoPet);

echo $destino;
header ( 'Location: ' . $dominio . 'fotosPet.php?sucesso=1')
?>