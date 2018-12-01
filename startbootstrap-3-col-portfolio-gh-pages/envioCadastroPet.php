<?php

session_start();
if (!$_SESSION["autenticacao"]) {
    header ( 'Location: ' . $dominio . 'login.php?erro=1' );
}

$login =  $_SESSION["login"];

require_once('conexaoBanco.php');

$nomePet            = $_POST['nomePet'];
$especie            = $_POST['especie'];
$sexo               = $_POST['sexo'];
$porte              = $_POST['porte'];
$UF                 = $_POST['UF'];
$cidadePet          = $_POST['cidadePet'];
$dataCadastroPet    = $_POST['dataCadastroPet'];
$extraInfo          = $_POST['extraInfo'];
$desc               = htmlspecialchars($_POST['desc']);


$query_apoio_usr = mysqli_query($conn, "SELECT idUsuario FROM Usuario WHERE login_usr = '$login'");
$apoio_usr = mysqli_fetch_array($query_apoio_usr);


$insertPet = "INSERT INTO Pet VALUES (NULL, '$nomePet', '$especie', '$cidade', '$UF', '$sexo', '$porte' , '$dataCadastroPet' , '$desc' , '$extraInfo' , '$apoio_usr[0]')";
mysqli_query($conn, $insertPet);


header ( 'Location: ' . $dominio . 'fotosPet.php')

?>