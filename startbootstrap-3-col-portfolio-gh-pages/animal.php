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

    <div class="container">

    <?php 

      $nome           = $_GET["name"];
      $fotoPerfil     = $_GET["fotoPerfil"];
      $descricao      = $_GET["descricao"];
      $cidade         = $_GET["cidade"];
      $UF             = $_GET["UF"];
      $sexo           = $_GET["sexo"];
      $porte          = $_GET["porte"];
      $outrasInfo     = $_GET["outrasInfo"];
      $foto2          = $_GET["foto2"];
      $foto3          = $_GET["foto3"];
      $foto4          = $_GET["foto4"];
      $foto5          = $_GET["foto5"];

        echo '<h1 class="my-4">'. $nome.'</h1>'; 

        echo '<div class="row">';

        echo '  <div class="col-md-8">';
        echo '    <img class="img-fluid" src=".'.$fotoPerfil.'" alt="">';
        echo '  </div>';

        echo '  <div class="col-md-4">';
        echo '    <h3 class="my-3">Sobre o pet:</h3>'; 
        echo '      <p>'.$descricao.'</p>';
        echo '    <h3 class="my-3">Outras informações</h3>';
        echo '    <ul>';
        echo '      <li>'.$cidade.' - '.$UF.' </li>';
        echo '      <li>Sexo: '.$sexo.'</li>';
        echo '      <li>Porte: '.$porte.'</li>';
        echo '      <li>'.$outrasInfo.'</li>';
        echo '    </ul>';
        echo '  </div>';

        echo '</div>';

        echo '<h3 class="my-4">Mais fotos</h3>';

        echo '<div class="row">';

        echo '   <div class="col-md-3 col-sm-6 mb-4">';
        echo '    <a href="#">';
        echo '      <img class="img-fluid" src="'.$foto2.'" alt="">';
        echo '    </a>';
        echo '  </div>';

        echo '  <div class="col-md-3 col-sm-6 mb-4">';
        echo '    <a href="#">';
        echo '      <img class="img-fluid" src="'.$foto3.'" alt="">';
        echo '    </a>';
        echo '  </div>';

        echo '  <div class="col-md-3 col-sm-6 mb-4">';
        echo '    <a href="#">';
        echo '      <img class="img-fluid" src="'.$foto3.'" alt="">';
        echo '    </a>';
        echo '  </div>';

        echo '  <div class="col-md-3 col-sm-6 mb-4"><a href="#"><img class="img-fluid" src="'.$foto4.'" alt=""></a></div>';
        echo '</div>';
        echo '</div>';


        echo '</div>';
    ?>

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
