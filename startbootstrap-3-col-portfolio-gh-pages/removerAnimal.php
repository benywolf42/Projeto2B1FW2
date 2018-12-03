<?php
    //error_reporting(E_ALL);

    require_once('conexaoBanco.php');

    $id          = $_GET['id'];

    $removerFotosAnimal = "DELETE FROM fotosPet WHERE Pet_idPet = '$id'";
    $result_removerFotosAnimal = mysqli_query($conn, $removerFotosAnimal);
    if (!$result_removerFotosAnimal){
        die("Algo de errado não está certo: " . mysqli_connect_error($conn));
    }
    $removerAnimal = "DELETE FROM Pet WHERE idPet = '$id'";
    $result_removerAnimal = mysqli_query($conn, $removerAnimal);
    if (!$result_removerAnimal){
        die("Algo de errado não está certo: " . mysqli_connect_error($conn));
    }
    
    header ('Location: panel.php?sucesso=1')

?>
