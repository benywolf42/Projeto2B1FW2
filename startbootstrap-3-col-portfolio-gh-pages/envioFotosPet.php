<?php

session_start();
if (!$_SESSION["autenticacao"]) {
    header ( 'Location: ' . $dominio . 'login.php?erro=1' );
}

require_once('conexaoBanco.php');

$petID = $_SESSION['petID'];

$diretorio = "Imagens/";

if(!is_dir($diretorio)){ 
	echo "Pasta $diretorio nao existe";
}else{
	$arquivo = isset($_FILES['arquivo']) ? $_FILES['arquivo'] : FALSE;
	for ($controle = 0; $controle < count($arquivo['name']); $controle++){
		
		$destino = $diretorio."/".$arquivo['name'][$controle];
		if(move_uploaded_file($arquivo['tmp_name'][$controle], $destino)){
			$destino = "/".$destino;
			$insertFotoPet = "INSERT INTO fotosPet (idfotosPet, linkFotoPerfil, Pet_idPet) VALUES (NULL, '$destino', $petID)"; 
			mysqli_query($conn, $insertFotoPet);
			echo "Upload realizado com sucesso<br>"; 
		}else{
			echo "Erro ao realizar upload";
		}	

	}
}

// ================ O LINK DAS IMAGENS ESTÃO SENDO INSERIDOS EM LINHAS DIFERENTES E NÃO NAS COLUNAS SUBESEQUENTES



/*$find_id_pet = mysqli_query($conn, "SELECT Pet_idPet FROM Pet WHERE nome_provisorio = '$????????'");
$id_pet = mysqli_fetch_array($find_id_pet);*/


// header ( 'Location: panel.php?sucesso=2') ============ COMENTEI O HEADER PRA VERMOS OS POSSÍVEIS ERROS

?>