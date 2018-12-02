<?php
    session_start();
    if (!$_SESSION["autenticacao"]) {
      header ( 'Location: ' . $dominio . 'login.php?erro=1' );
    }

    $login =  $_SESSION["login"];
    /*$find_nome = mysqli_query($conn, "SELECT nome_completo from Usuario WHERE login = '$login'");
    $nome = mysqli_fetch_array($find_nome);*/
?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dedo no Cão e Gataria</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/3-col-portfolio.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.php">Dedo no Cão e Gataria</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <?php 
              if (!$_SESSION) { 
                echo '<li class="nav-item"> <a class="nav-link" href="login.php">Login</a></li>'; 
              } else{
                  echo '<li class="nav-item"> <a class="nav-link" href="panel.php">Painel</a></li>';
                  echo '<li class="nav-item"> <a class="nav-link" href="logout.php">Logout</a></li>';
              }
            ?>
            <li class="nav-item">
              <a class="nav-link" href="sobre.html">Sobre</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contato.html">Contato</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">


      <!-- Page Heading -->
      <h1 class="my-4">Gerenciamento de Animais
        <!-- <small>Adoção de animais</small> -->
      </h1>

      <div class="row">
        <!-- <div class="col-lg-4 col-sm-6 portfolio-item"> -->
          <div class="card h-100">
            
            <div class="card-body">

            <span>
            
        <font size=4>Bem vindo, <?php  echo $login ?>! Clique <a href = "cadastrarPet.php">aqui</a> para cadastrar um novo pet.</font><br><br>
                  

        <?php  
          if (isset ( $_GET ['sucesso=1'] )) {
                echo "<font face=Verdana color=green size=2>";
                echo "<b>Pet removido com sucesso!</b>";
                echo "</font>";
          } elseif (isset ( $_GET ['sucesso=2'] )) {
            echo "<font face=Verdana color=green size=2>";
            echo "<b>Pet incluído com sucesso!</b>";
            echo "</font>";
          }
        ?>

        <?php
        require_once('conexaoBanco.php');
        $sqlUsuario = "SELECT idUsuario FROM Usuario WHERE login = '$login'";
        $result_sqlUsuario = mysqli_query($conn, $sqlUsuario);
        $array_sqlUsuario = mysqli_fetch_array($result_sqlUsuario);
        $sqlPet="SELECT * FROM Pet where Usuario_idUsuario = '$array_sqlUsuario[0]'";
        $result_sqlPet=mysqli_query($conn, $sqlPet);
        $array_sqlPet=mysqli_fetch_array($result_sqlPet);
        $sqlFotosPet="SELECT * FROM fotosPet";
        $result_sqlFotosPet=mysqli_query($conn,$sqlFotosPet);
        $array_sqlFotosPet=mysqli_fetch_array($result_sqlFotosPet);
        
        echo  "<div class='row '>\n";
        echo  " <div class='col-lg-4 col-sm-6 portfolio-item'>\n";
        echo  "   <div class='card h-100'>";
        echo  "     <a href='#'><img class='card-img-top' src='.".$array_sqlFotosPet[1]."' alt=''></a>\n";
        echo  "       <div class='card-body'>\n";
        echo  "         <h4 class='card-title'>\n";
        echo  "           <a href='animal.php?id=".$array_sqlPet[0]."'>".$array_sqlPet[1]."</a>\n";
        echo  "         </h4>";
        echo  "           <p class='card-text'>".$array_sqlPet[8]."</p>\n";
        echo  "           <p class='card-text'>".$array_sqlPet[3]." - ".$array_sqlPet[4]."</p>\n";
        echo  "           <p class='card-text'> Sexo: ".$array_sqlPet[5]." / Porte: ".$array_sqlPet[6]."</p>\n";
        echo  "           <h6 class='card-text'><a href='removerAnimal.php?id=".$array_sqlPet[0]."'> Remover Pet</a></h6>";
        echo  "   </div>\n";
        echo  " </div>\n";
        echo  "</div>\n";

        while ( $rowsqlFotosPet = mysqli_fetch_assoc($result_sqlFotosPet) and $rowsqlPet = mysqli_fetch_assoc($result_sqlPet) ) {
          echo    "<div class='col-lg-4 col-sm-6 portfolio-item'>";
          echo      "<div class='card h-100'>";
          echo        "<a href='#'><img class='card-img-top' src='.".$rowsqlFotosPet["linkFotoPerfil"]."' alt=''></a>";
          echo            "<div class='card-body'>";
          echo              "<h4 class='card-title'>";
          echo                 "<a href='animal.php?id=".$rowsqlPet["idPet"]."'>".$rowsqlPet["nome_provisorio"]."</a>";
          echo              "</h4>";
          echo          "<p class='card-text'>".$rowsqlPet["descricao"]."</p>";
          echo          "<p class='card-text'>".$rowsqlPet["cidade"]." - ".$rowsqlPet["estado"]."</p>";
          echo          "<p class='card-text'> Sexo: ".$rowsqlPet["sexo"]." / Porte: ".$rowsqlPet["porte"]."</p>";
          echo          "<h6 class='card-text'><a href='removerAnimal.php?id=".$rowsqlPet["idPet"]."'> Remover Pet</a></h6>";
          echo        "</div>";
          echo      "</div>";
          echo    "</div>";
        }

        echo   "</div>";
      ?>
      </div>
          
    </div>
        
  </div>
        
        <br><br><br>
      </div>
      <!-- /.row -->

      <!-- Pagination -->
      <!-- <ul class="pagination justify-content-center">
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
            <span class="sr-only">Previous</span>
          </a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">1</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">2</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">3</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
            <span class="sr-only">Next</span>
          </a>
        </li>
      </ul> -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; IFSP 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
