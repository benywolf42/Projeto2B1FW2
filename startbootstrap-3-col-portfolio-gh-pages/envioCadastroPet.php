<?php

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


$cadastroPet = "INSERT INTO Pet (idPet, nome_provisorio) VALUES (null, '$nomePet')";
mysqli_query($conn, $cadastroPet);

//$cadastroPet = "INSERT INTO Pet VALUES (null, '$nomePet', '$especie', '$cidade', '$UF', '$sexo', '$porte' , '$dataCadastroPet' , $desc , 
//                                            $extraInfo,     )";




header ( 'Location: ' . $dominio . 'fotosPet.php')

?>