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
            <li class="nav-item">
              <a class="nav-link" href="login.php">Login</a>
            </li>
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
      <h1 class="my-4">Cadastro de novo Pet
        <!-- <small>Adoção de animais</small> -->
      </h1>

      <div class="row">
        <!-- <div class="col-lg-4 col-sm-6 portfolio-item"> -->
          <div class="card h-100">
            
            <div class="card-body">

             <span>
          <?php  
            if (isset ( $_GET ['sucesso'] )) {
                  echo "<font face=Verdana color=green size=2>";
                  echo "<b>Cadastro de pet realizado com sucesso!</b>";
                  echo "</font>";
            }
            
            ?>
        </span>
            <script>
            $(document).ready(function(){
              
              $("#Enviar").click(function(){
                
                if ($("#nomePet").val()==''){
                  $("#mensagem").html("Campo obrigatório");
                  $("#nomePet").focus(); // foco no campo
                  } else if ($("#especie").val()==''){
                  $("#mensagem").html("Campo obrigatório");
                  $("#especie").focus(); // foco no campo
                  } else if ($("#sexo").val()==''){
                  $("#mensagem").html("Campo obrigatório");
                  $("#sexo").focus(); // foco no campo
                  } else if ($("#porte").val()==''){
                  $("#mensagem").html("Campo obrigatório");
                  $("#porte").focus(); // foco no campo
                  } else if ($("#UF").val()==''){
                  $("#mensagem").html("Campo obrigatório");
                  $("#UF").focus(); // foco no campo
                  } else if ($("#cidadePet").val()==''){
                  $("#mensagem").html("Campo obrigatório");
                  $("#cidadePet").focus(); // foco no campo
                  } else if ($("#dataCadastroPet").val()==''){
                  $("#mensagem").html("Campo obrigatório");
                  $("#dataCadastroPet").focus(); // foco no campo
                  } else if ($("#desc").val()==''){
                  $("#mensagem").html("Campo obrigatório");
                  $("#desc").focus(); // foco no campo
                  }  else{
                    $("#cadastroPetForm").submit();
                }
              
              });
              
            });
          </script>

        <form name="cadastroPetForm" id="cadastroPetForm" method="post" action="envioCadastroPet.php">
            <font size=4 color=DarkBlue><b>Informe os dados do seu Pet:</b></font><br><br>
                Nome do Pet*:<br> <input type="text" style="width:290px;" id="nomePet" name="nomePet"><br>
                Especie:*
                <select name="especie">
                    <option value="Cao">Cão</option>
                    <option value="Gato">Gato</option>
                </select><br>
                Sexo*:
                <select name="sexo">
                    <option value="F">F</option>
                    <option value="M">M</option>
                </select><br>
               Porte*: 
                <select name="porte">
                    <option value="P">P</option>
                    <option value="M">M</option>
                    <option value="G">G</option>
                </select><br>
                UF*:    
                <select name="UF">
                    <option value="AC">AC</option>
                    <option value="AL">AL</option>
                    <option value="AP">AP</option>
                    <option value="AM">AM</option>
                    <option value="BA">BA</option>
                    <option value="CE">CE</option>
                    <option value="DF">DF</option>
                    <option value="ES">ES</option>
                    <option value="GO">GO</option>
                    <option value="MA">MA</option>
                    <option value="MT">MT</option>
                    <option value="MS">MS</option>
                    <option value="MG">MG</option>
                    <option value="PA">PA</option>
                    <option value="PB">PB</option>
                    <option value="PR">PR</option>
                    <option value="PE">PE</option>
                    <option value="PI">PI</option>
                    <option value="RJ">RJ</option>
                    <option value="RN">RN</option>
                    <option value="RS">RS</option>
                    <option value="RO">RO</option>
                    <option value="RR">RR</option>
                    <option value="SC">SC</option>
                    <option value="SP">SP</option>
                    <option value="SE">SE</option>
                    <option value="TO">TO</option>
                </select><br>
                Cidade*: <br><input type="text" style="width:290px;" id="cidadePet" name="cidadePet"><br>
                Data do Cadastro*: <br><input type="text" style="width:290px;" id="dataCadastroPet" name="dataCadastroPet"><br>
                Descrição*:<br><textarea id="desc" name="desc" rows="4" cols="30" wrap="soft"> </textarea><br>
                Informações Adicionais: <br><input type="text" style="width:290px;" id="extraInfo" name="extraInfo"><br><br>
          <input type="button" name="Enviar" id="Enviar" value="Enviar dados">
          <div id="mensagem"></div>
        </form>
            
        <br><br>

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
