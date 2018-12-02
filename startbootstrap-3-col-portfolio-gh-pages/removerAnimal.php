<?php
    //error_reporting(E_ALL);

    require_once('conexaoBanco.php');

    $id          = $_GET['id'];

    $removerFotosAnimal = "DELETE FROM fotosPet WHERE Pet_idPet = '$id'";
    mysqli_query($conn, $removerFotosAnimal);
    $removerAnimal = "DELETE FROM Pet WHERE idPet = '$id'";
    mysqli_query($conn, $removerAnimal);
    
    header ('Location: panel.php?sucesso=1')

?>
