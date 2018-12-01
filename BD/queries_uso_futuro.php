 <?php
 
 //Inserção Usuario
 $usr = "INSERT INTO Usuario (idUsuario, nome_completo, login, senha, hash) VALUES (NULL, '$nome', '$login', 'PAO' )";
 mysqli_query($conn, $usr); //atenção na manipulação hash, não sei como vamos fazer


//Variável de Apoio
 $getLogin = mysql_query($conn , "SELECT idUsuario FROM Usuario WHERE login = '$login'");
 $loginObtido = mysqli_fetch_array($getLogin);

 //Inserção Contato Usuario
 $contatoUsr = "INSERT INTO Contato_Usuario (idContato_Usuario, usuario, telefone, tipo_telefone, dono_telefone) VALUES (NULL, '$loginObtido', '$telefone', '$tipo_telefone' , '$dono_telefone')";
 mysqli_query($conn, $contatoUsr); 


 //Inserção Endereco Usuario
 $enderecoUsr = "INSERT INTO Endereco_Usuario (idEndereco_Usuario , usuario , UF , cidade , bairro , logradouro , nome_logradouro, numero , complemento)        
) VALUES (NULL, '$loginObtido', '$UF' , '$cidade' , '$bairro' , '$logradouro' , '$nome_logradouro' , '$numero' , '$complemento')";
 mysqli_query($conn, $enderecoUsr);

 
 //Inserção Pet
 $pet = "INSERT INTO Pet (idPet, dono, nome_provisorio , especie , cidade, estado, sexo, porte) VALUES (NULL, '$loginObtido', '$nome_pet', '$especie' , '$cidade' , '$estado' , $sexo , $porte)";
 mysqli_query($conn, $usr);

https://docs.google.com/document/d/1mO1ihkxCLnBhudOKcKhFm-2FD33rbXDvFwyiYF1baLo/edit?usp=sharing
?>