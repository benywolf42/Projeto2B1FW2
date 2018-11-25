<?php
    //error_reporting(E_ALL);

    require_once('conexaoBanco.php');

    $nome           = $_POST['nome'];
    $nomeUsuario    = $_POST['nomeUsuario'];
    $email          = $_POST['email'];
    $senha          = $_POST['senha'];
    $ddd            = $_POST['ddd'];
    $telefone       = $_POST['telefone'];
    $cep            = $_POST['cep'];
    $UF             = $_POST['UF'];
    $cidade         = $_POST['cidade'];
    $bairro         = $_POST['bairro'];
    $tipoLogradouro = $_POST['tipo'];
    $logradouro     = $_POST['logradouro'];
    $numero         = $_POST['numero'];
    $complemento    = $_POST['complemento'];

    $senha = md5($senha.'adocao');

    $cadastroUsuario = "INSERT INTO Usuario VALUES (null, '$nome', '$nomeUsuario', '$senha', '$email', '$ddd', '$telefone')";
    print $cadastroUsuario;
    mysqli_query($conn, $cadastroUsuario);

    $idCadastroUsuario = mysqli_query($conn, "SELECT idUsuario from Usuario WHERE nome_completo = '$nome'");
    $idCadastroUsuario = mysqli_fetch_array($idCadastroUsuario);
    
    /* INSERT INTO Endereco_Usuario ($UF, $cidade, $bairro, $logradouro, $nome_logradouro, $numero, $complemento, $idCadastroUsuario) */ 
    $cadastroEndereco = "INSERT INTO Endereco_Usuario ('$UF', '$cidade', '$bairro', '$logradouro', '$tipoLogradouro', '$numero', '$complemento', '$idCadastroUsuario[0]')";
    mysqli_query($conn, $cadastroEndereco);
    
    header ( 'Location: ' . $dominio . 'cadastroUsuario.php?sucesso=1')

?>