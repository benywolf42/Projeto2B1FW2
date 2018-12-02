<?php

session_start();
if (!$_SESSION["autenticacao"]) {
    header ( 'Location: ' . $dominio . 'login.php?erro=1' );
}

$login =  $_SESSION["login"];
require_once('conexaoBanco.php');
/*
echo $login;
echo $_POST['nomePet'];
echo $_POST['especie'];
echo $_POST['sexo'];
echo $_POST['porte'];
echo $_POST['UF'];
echo $_POST['cidadePet'];
echo $_POST['dataCadastroPet'];
echo $_POST['extraInfo'];
htmlspecialchars($_POST['desc']);*/

$nomePet            = $_POST['nomePet'];
$especie            = $_POST['especie'];
$sexo               = $_POST['sexo'];
$porte              = $_POST['porte'];
$UF                 = $_POST['UF'];
$cidadePet          = $_POST['cidadePet'];
$dataCadastroPet    = $_POST['dataCadastroPet'];
$extraInfo          = $_POST['extraInfo'];
$desc               = htmlspecialchars($_POST['desc']);


$query_apoio_usr = mysqli_query($conn, "SELECT idUsuario FROM Usuario WHERE login = '$login'");
$apoio_usr = mysqli_fetch_array($query_apoio_usr);


$insertPet = "INSERT INTO Pet VALUES (NULL, '$nomePet', '$especie', '$cidadePet', '$UF', '$sexo', '$porte' , '$dataCadastroPet' , '$desc' , '$extraInfo' , '$apoio_usr[0]')";
mysqli_query($conn, $insertPet);

$get_petID = mysqli_query($conn, "SELECT idPet FROM Pet WHERE nome_provisorio = '$nomePet'");
$petID = mysqli_fetch_array($get_petID);
$petID = $_SESSION['petID']; // to tentando pegar o id do pet e usar na query da linha 36 do envioFotosPet. Só vai hardcoded, variavel nao funfa. Mas deve estar no caminho

header ( 'Location: ' . $dominio . 'fotosPet.php')

?>