<?php

    require_once('conexaoBanco.php');

        $sql1 = "INSERT INTO Pet values(null, 'Rex', 'cão', 'São Paulo', 'SP', 'M', 'G', '2018-11-24', 'Rex é um cão nada amigável. Ótimo para fazer guarda à noite.', 'Vacinado e castrado.', '/Animais/1.html', 1)";

        $sql2 = "INSERT INTO fotosPet (linkFotoPerfil, Pet_idPet)values('/Imagens/labrador.jpg', 1)";
        
        //mysqli_query($conn,$sql1);
        mysqli_query($conn,$sql2);

?>