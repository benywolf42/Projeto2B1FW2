<?php

session_start();
if (!$_SESSION["autenticacao"]) {
    header ( 'Location: ' . $dominio . 'login.php?erro=1' );
}

require_once('conexaoBanco.php');

$petID = $_SESSION['petID'];
$i = 0;
$diretorio = "Imagens/";

if(!is_dir($diretorio)){ 
	echo "Pasta $diretorio nao existe";
}else{
	$arquivo = isset($_FILES['arquivo']) ? $_FILES['arquivo'] : FALSE;
	for ($controle = 0; $controle < count($arquivo['name']); $controle++){
		
		$destino = $diretorio."/".$arquivo['name'][$controle];
		if(move_uploaded_file($arquivo['tmp_name'][$controle], $destino)){
			$destino = "/".$destino;
			$coluna[$i] = $destino;
			$i = $i + 1;
			echo "Upload realizado com sucesso<br>"; 
		}else{
			echo "Erro ao realizar upload";
		}	
		
	}
}

// ================ O LINK DAS IMAGENS ESTÃO SENDO INSERIDOS EM LINHAS DIFERENTES E NÃO NAS COLUNAS SUBESEQUENTES

$insertFotoPet = "INSERT INTO fotosPet (idfotosPet, linkFotoPerfil, linkFoto1, linkFoto2, linkFoto3, linkFoto4, Pet_idPet) VALUES (NULL, '$coluna[0]', '$coluna[1]', '$coluna[2]', '$coluna[3]', '$coluna[4]', $petID)"; 
$result = mysqli_query($conn, $insertFotoPet);
if (!$result) {
    die('Invalid query: ' . mysqli_error($conn));
}


/*$find_id_pet = mysqli_query($conn, "SELECT Pet_idPet FROM Pet WHERE nome_provisorio = '$????????'");
$id_pet = mysqli_fetch_array($find_id_pet);*/


header ( 'Location: panel.php?sucesso=2');

?>