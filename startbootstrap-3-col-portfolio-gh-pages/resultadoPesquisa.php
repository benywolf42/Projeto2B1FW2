<!DOCTYPE html>
<html lang="en">

  <head>

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
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Sobre</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contato</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading -->
      <h1 class="my-4">Dedo no Cão e Gataria
        <small>Adoção de animais</small>
      </h1>


        <!-- <div class='row '> -->
          <div>
            <div class='card h-100'>
                  <div class='card-body'>
                    <h4 class='card-title'>
                        Filtro de pesquisa
                    </h4>

                    <form name="pesquisaForm" id="pesquisaForm" method="post" action="envioPesquisa.php">
                      <select name="especie">
                            <option value="" selected="selected">Espécie:</option>
                            <option value="cao">Cão</option>
                            <option value="gato">Gato</option>
                            </select>
                            <select name="UF">
                              <option value="" selected="selected">Estado:</option>
                              <option value="AC">Acre</option>
                              <option value="AL">Alagoas</option>
                              <option value="AP">Amapá</option>
                              <option value="AM">Amazonas</option>
                              <option value="BA">Bahia</option>
                              <option value="CE">Ceará</option>
                              <option value="DF">Distrito Federal</option>
                              <option value="ES">Espírito Santo</option>
                              <option value="GO">Goiás</option>
                              <option value="MA">Maranhão</option>
                              <option value="MT">Mato Grosso</option>
                              <option value="MS">Mato Grosso do Sul</option>
                              <option value="MG">Minas Gerais</option>
                              <option value="PA">Pará</option>
                              <option value="PB">Paraíba</option>
                              <option value="PR">Paraná</option>
                              <option value="PE">Pernambuco</option>
                              <option value="PI">Piauí</option>
                              <option value="RJ">Rio de Janeiro</option>
                              <option value="RN">Rio Grande do Norte</option>
                              <option value="RS">Rio Grande do Sul</option>
                              <option value="RO">Rondônia</option>
                              <option value="RR">Roraima</option>
                              <option value="SC">Santa Catarina</option>
                              <option value="SP">São Paulo</option>
                              <option value="SE">Sergipe</option>
                              <option value="TO">Tocantins</option>
                            </select>
                              <select name="cidade">
                                <option value="" selected="selected">Cidade:</option>
                                <option value="Sao Paulo">São Paulo</option>
                                <option value="Rio de Janeiro">Rio de Janeiro</option>
                                <option value="Salvador">Salvador</option>
                                <option value="Curitiba">Curitiba</option>
                              </select>
                              <select name="porte">
                                <option value="" selected="selected">Porte:</option>
                                <option value="P">Pequeno</option>
                                <option value="M">Médio</option>
                                <option value="G">Grande</option>
                              </select>
                      <input type="submit" name="Enviar" id="Enviar" value="Procurar">
                    </form>
                  </div>
            </div>
          <!-- </div> -->
          <br><br>
      <?php
        require('envioPesquisa.php');

        $result_sqlPet=mysqli_query($conn, $pesquisaPet);
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
        echo  "           <a href='/animal.php'>".$array_sqlPet[1]."</a>\n";
        echo  "         </h4>";
        echo  "           <p class='card-text'>".$array_sqlPet[8]."</p>\n";
        echo  "           <p class='card-text'>".$array_sqlPet[3]." - ".$array_sqlPet[4]."</p>\n";
        echo  "           <p class='card-text'> Sexo: ".$array_sqlPet[5]." / Porte: ".$array_sqlPet[6]."</p>\n";
        echo  "   </div>\n";
        echo  " </div>\n";
        echo  "</div>\n";

        $rowsqlPet = mysqli_fetch_assoc($result_sqlPet);

        while ( $rowsqlFotosPet = mysqli_fetch_assoc($result_sqlFotosPet) ) {
          echo    "<div class='col-lg-4 col-sm-6 portfolio-item'>";
          echo      "<div class='card h-100'>";
          echo        "<a href='#'><img class='card-img-top' src='.".$rowsqlFotosPet["linkFotoPerfil"]."' alt=''></a>";
          echo            "<div class='card-body'>";
          echo              "<h4 class='card-title'>";
          echo                 "<a href='/animal.php'>".$rowsqlPet["nome_provisorio"]."</a>";
          echo              "</h4>";
          echo          "<p class='card-text'>".$rowsqlPet["descricao"]."</p>";
          echo          "<p class='card-text'>".$rowsqlPet["cidade"]." - ".$rowsqlPet["estado"]."</p>";
          echo          "<p class='card-text'> Sexo: ".$rowsqlPet["sexo"]." / Porte: ".$rowsqlPet["porte"]."</p>";
          echo        "</div>";
          echo      "</div>";
          echo    "</div>";
        }

        echo   "</div>";
      ?>
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
